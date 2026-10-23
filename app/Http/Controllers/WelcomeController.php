<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use App\Mail\UserThankYouMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // public function index()
    // {
    //     $featuredBlog = Blog::find(6);

    //     $latestBlogs = Blog::where('id', '!=', 6)
    //         ->latest()
    //         ->take(3)
    //         ->get();

    //     $blogs = Blog::with('category')
    //         ->where('status', 1)
    //         ->latest()
    //         ->take(3)
    //         ->get([
    //             'id',
    //             'slug',
    //             'title',
    //             'short_description',
    //             'featured_image',
    //             'author',
    //             'category_id',
    //             'status',
    //             'created_at',
    //             'date'
    //         ]);

    //     $slides = Banner::whereIn('id', [1, 2, 3])
    //         ->orderByRaw('FIELD(id,1,2,3)')
    //         ->get()
    //         ->keyBy('id');

    //     return view("Home.welcome", compact('featuredBlog', 'latestBlogs', 'slides', 'blogs'));
    // }


//  public function index()
//     {
//         $featuredBlog = Blog::find(6);

//         $latestBlogs = Blog::where('id', '!=', 6)
//             ->latest()
//             ->take(3)
//             ->get();

//         $blogs = Blog::with('category')
//             ->where('status', 1)
//             ->latest()
//             ->take(3)
//             ->get([
//                 'id',
//                 'slug',
//                 'title',
//                 'short_description',
//                 'featured_image',
//                 'author',
//                 'category_id',
//                 'status',
//                 'created_at',
//                 'date'
//             ]);

//         $featuredJobs = Job::where('status', 1)
//             ->orderByDesc('posted_date')
//             ->take(5)
//             ->get();

//         return view("Home.welcome", compact(
//             'featuredBlog',
//             'latestBlogs',
//             'blogs',
//             'featuredJobs'
//         ));
//     }

public function index()
{
    $featuredBlog = Blog::find(6);

    $latestBlogs = Blog::where('id', '!=', 6)
        ->latest()
        ->take(3)
        ->get();

    $blogs = Blog::with('category')
        ->where('status', 1)
        ->latest()
        ->take(3)
        ->get([
            'id',
            'slug',
            'title',
            'short_description',
            'featured_image',
            'author',
            'category_id',
            'status',
            'created_at',
            'date'
        ]);

    return view("Home.welcome", compact(
        'featuredBlog',
        'latestBlogs',
        'blogs'
    ));
}

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'country' => 'required',
            'phone' => 'nullable',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $contact = Contact::create($request->only(['name', 'email', 'country', 'phone', 'message']));

        Mail::to('test@gmail.com')->queue(new ContactMail($contact));
        Mail::to($contact->email)->send(new UserThankYouMail($contact->name));

        return response()->json(['message' => 'Contact submitted successfully.']);
    }
}
