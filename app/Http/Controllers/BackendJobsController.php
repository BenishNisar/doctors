<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Company;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BackendJobsController extends Controller
{
    private function isAdmin()
    {
        return Auth::check() && Auth::user()->role_id == 1;
    }

    private function isCompany()
    {
        return Auth::check() && Auth::user()->role_id == 3;
    }

    private function loggedCompanyOrFail()
    {
        $company = Company::where('user_id', Auth::id())->first();

        if (!$company) {
            abort(403, 'Company profile not found.');
        }

        return $company;
    }

    private function authorizeCompanyJob(Job $job)
    {
        if ($this->isCompany()) {
            $company = $this->loggedCompanyOrFail();

            if ((int) $job->company_id !== (int) $company->id) {
                abort(403, 'Unauthorized access.');
            }
        }
    }

    public function index()
    {
        if ($this->isAdmin()) {
            $jobs = Job::with('company')
                ->where('status', 1)
                ->latest()
                ->paginate(12);
        } elseif ($this->isCompany()) {
            $company = $this->loggedCompanyOrFail();

            $jobs = Job::with('company')
                ->where('company_id', $company->id)
                ->where('status', 1)
                ->where('approval_status', 'approved')
                ->latest()
                ->paginate(12);
        } else {
            abort(403, 'Unauthorized access.');
        }

        return view('Dashboard.admin.jobs.index', compact('jobs'));
    }

    public function list()
    {
        if ($this->isAdmin()) {
            $jobs = Job::with('company')->latest()->paginate(10);
        } elseif ($this->isCompany()) {
            $company = $this->loggedCompanyOrFail();

            $jobs = Job::with('company')
                ->where('company_id', $company->id)
                ->where('approval_status', 'approved')
                ->latest()
                ->paginate(10);
        } else {
            abort(403, 'Unauthorized access.');
        }

        return view('Dashboard.admin.jobs.list', compact('jobs'));
    }

    public function newJob()
    {
        if ($this->isAdmin()) {
            $companies = Company::where('status', 'active')
                ->orderBy('company_name')
                ->get();

            return view('Dashboard.admin.jobs.new-job', compact('companies'));
        }

        if ($this->isCompany()) {
            $company = $this->loggedCompanyOrFail();

            return view('Dashboard.admin.jobs.new-job', compact('company'));
        }

        abort(403, 'Unauthorized access.');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_id' => 'nullable|exists:companies,id',
            'position' => 'required|string|max:255',
            'job_category' => 'nullable|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'vacancy' => 'nullable|string|max:50',
            'experience' => 'nullable|string|max:50',
            'posted_date' => 'nullable|date',
            'last_date_to_apply' => 'nullable|date',
            'close_date' => 'nullable|date',
            'gender' => 'nullable|string|max:50',
            'salary_from' => 'nullable|string|max:50',
            'salary_to' => 'nullable|string|max:50',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'education_level' => 'nullable|string|max:255',
            'description' => 'required|string',
            'long_description' => 'required|string',
            'status' => 'required|in:0,1',
        ]);

        if ($this->isCompany()) {
            $company = $this->loggedCompanyOrFail();
            $validated['company_id'] = $company->id;
            $validated['approval_status'] = 'pending';
        }

        if ($this->isAdmin()) {
            $validated['approval_status'] = 'approved';
        }

        if (empty($validated['company_id'])) {
            return redirect()->back()
                ->withErrors(['company_id' => 'Please select a company.'])
                ->withInput();
        }

        $selectedCompany = Company::findOrFail($validated['company_id']);
        $validated['company_name'] = $selectedCompany->company_name;

        Job::create($validated);

        return redirect()->route('Dashboard.admin.jobs.list')
            ->with('success', 'Job added successfully.');
    }

    public function edit(Job $job)
    {
        $this->authorizeCompanyJob($job);

        if ($this->isAdmin()) {
            $companies = Company::where('status', 'active')
                ->orderBy('company_name')
                ->get();

            return view('Dashboard.admin.jobs.edit', compact('job', 'companies'));
        }

        $company = $this->loggedCompanyOrFail();

        return view('Dashboard.admin.jobs.edit', compact('job', 'company'));
    }

    public function update(Request $request, Job $job)
    {
        $this->authorizeCompanyJob($job);

        $validated = $request->validate([
            'company_id' => 'nullable|exists:companies,id',
            'position' => 'required|string|max:255',
            'job_category' => 'nullable|string|max:255',
            'job_type' => 'nullable|string|max:255',
            'vacancy' => 'nullable|string|max:50',
            'experience' => 'nullable|string|max:50',
            'posted_date' => 'nullable|date',
            'last_date_to_apply' => 'nullable|date',
            'close_date' => 'nullable|date',
            'gender' => 'nullable|string|max:50',
            'salary_from' => 'nullable|string|max:50',
            'salary_to' => 'nullable|string|max:50',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'education_level' => 'nullable|string|max:255',
            'description' => 'required|string',
            'long_description' => 'required|string',
            'status' => 'required|in:0,1',
        ]);

        if ($this->isCompany()) {
            $company = $this->loggedCompanyOrFail();
            $validated['company_id'] = $company->id;
            $validated['approval_status'] = 'pending';
        }

        if ($this->isAdmin() && empty($validated['company_id'])) {
            $validated['company_id'] = $job->company_id;
        }

        $selectedCompany = Company::findOrFail($validated['company_id']);
        $validated['company_name'] = $selectedCompany->company_name;

        $job->update($validated);

        return redirect()->route('Dashboard.admin.jobs.list')
            ->with('success', 'Job updated successfully.');
    }

    public function destroy(Job $job)
    {
        $this->authorizeCompanyJob($job);

        $job->delete();

        return redirect()->route('Dashboard.admin.jobs.list')
            ->with('success', 'Job deleted successfully.');
    }

    public function viewJob(Job $job)
    {
        $this->authorizeCompanyJob($job);

        $job->load('company');

        return view('Dashboard.admin.jobs.view', compact('job'));
    }

    public function application()
    {
        if ($this->isAdmin()) {
            $applications = JobApplication::with(['job', 'job.company'])
                ->latest()
                ->paginate(10);
        } elseif ($this->isCompany()) {
            $company = $this->loggedCompanyOrFail();

            $applications = JobApplication::with(['job', 'job.company'])
                ->whereHas('job', function ($query) use ($company) {
                    $query->where('company_id', $company->id);
                })
                ->latest()
                ->paginate(10);
        } else {
            abort(403, 'Unauthorized access.');
        }

        return view('Dashboard.admin.jobs.application', compact('applications'));
    }

    public function deleteApplication(JobApplication $application)
    {
        $application->load('job');

        if ($this->isCompany()) {
            $company = $this->loggedCompanyOrFail();

            if (!$application->job || (int) $application->job->company_id !== (int) $company->id) {
                abort(403, 'Unauthorized access.');
            }
        }

        if ($application->cv) {
            Storage::disk('public')->delete($application->cv);
        }

        $application->delete();

        return redirect()->back()->with('success', 'Application deleted successfully.');
    }

    public function applyJob()
    {
        if ($this->isAdmin()) {
            $jobs = Job::with('company')->latest()->get();
        } elseif ($this->isCompany()) {
            $company = $this->loggedCompanyOrFail();

            $jobs = Job::with('company')
                ->where('company_id', $company->id)
                ->where('approval_status', 'approved')
                ->latest()
                ->get();
        } else {
            abort(403, 'Unauthorized access.');
        }

        return view('Dashboard.admin.jobs.apply', compact('jobs'));
    }

    public function updateApprovalStatus(Request $request, Job $job)
    {
        if (!$this->isAdmin()) {
            abort(403, 'Unauthorized access.');
        }

        $request->validate([
            'approval_status' => 'required|in:pending,approved,rejected',
        ]);

        $job->update([
            'approval_status' => $request->approval_status,
        ]);

        return redirect()->back()->with('success', 'Approval status updated successfully.');
    }
}
