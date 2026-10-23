@extends("Layout.layout")
@section("Content")

{{--
<section class="medolia-hero">
    <div class="shape shape-one"><span></span></div>
    <div class="shape shape-two"><span></span></div>
    <div class="shape shape-three"><span></span></div>

    <!-- Video Background -->
    <div class="medolia-video-bg">
        <video autoplay muted loop playsinline class="hero-video-bg">
            <source src="{{ asset('assets/videos/clinic.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xl-7 col-lg-8">
                <!-- Hero Content -->
                <div class="hero-content text-center text-xl-start">
                    <span class="sub-title" data-aos="fade-up" data-aos-duration="1000">Wish Your Happy Life</span>
                    <h1 data-aos="fade-up" data-aos-duration="1200" class="text-dark"> Personalized Care Healthier You</h1>
                    <p data-aos="fade-up" data-aos-duration="1400">Experience personalized care tailored to your needs for a healthier, happier life. Expert medical guidance, compassionate support, and seamless treatment.</p>
                    <div class="medolia-button-box d-flex align-items-center" data-aos="fade-up" data-aos-duration="1600">
                        <div class="medolia-button">
                            <a href="contact.php" class="theme-btn style-one">Discover More</a>
                        </div>
                        <div class="medolia-author-box">
                            <div class="author-thumbnail">
                                <img src="{{ asset('assets/images/support.jpg') }}" alt="author">
                            </div>
                            <div class="author-info">
                                <span>Call Us Anytime</span>
                                <h5><a href="tel:+0012345667890">+00 123 456 67890</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-8">
                <!-- Hero Image Box -->
                <div class="hero-image-box">
                    <div class="medolia-image" data-aos="fade-up" data-aos-duration="1000">
                        <img src="{{ asset('assets/images/hero-img1.png') }}" alt="Hero Image">
                    </div>
                    <div class="text-shape ts-one" data-aos="fade-down" data-aos-duration="1200"><a href="service-details.php">Orthopedics</a></div>
                    <div class="text-shape ts-two" data-aos="fade-down" data-aos-duration="1400"><a href="service-details.php">Cardiology</a></div>
                    <div class="medolia-avatar-box" data-aos="fade-up" data-aos-duration="1600">
                        <div class="medolia-avatar">
                            <h5>Patient Recovers</h5>
                            <ul class="avatar-list">
                                <li><img src="{{ asset('assets/images/avatar1.jpg') }}" alt="avatar"></li>
                                <li><img src="{{ asset('assets/images/avatar2.jpg') }}" alt="avatar"></li>
                                <li><img src="{{ asset('assets/images/avatar3.jpg') }}" alt="avatar"></li>
                                <li><img src="{{ asset('assets/images/avatar4.jpg') }}" alt="avatar"></li>
                                <li><span>5k+</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

{{-- home --}}

{{-- <section class="medolia-hero" id="home">
    <div class="medolia-video-bg">
        <video autoplay muted loop playsinline class="hero-video-bg">
            <source src="{{ asset('assets/videos/clinic.mp4') }}" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7">
                <div class="hero-content text-center text-xl-start">
                    <span class="sub-title text-light">Creating a Healthier Tomorrow</span>
                    <!-- Animated Heading -->
                    <h1 class="text-light animated-heading">
                        <span class="word">Expert</span>
                        <span class="word">Dental</span>
                        <span class="word">Care</span>
                        <span class="word">for</span>
                        <span class="word">Every</span>
                        <span class="word">Smile</span>
                    </h1>
                    <p class="text-light">Providing comprehensive dental treatments, including preventive care, cosmetic dentistry, implants, and orthodontics for a healthier smile.</p>
                    <a href="contact.php" class="theme-btn style-one">Discover More</a>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5">
                <div class="hero-image-wrapper">
                    <div class="medolia-image">
                        <img src="{{ asset('assets/images/contact.png') }}" alt="Doctor" class="img-fluid main-hero-img">
                    </div>

                    <div class="hero-contact-box">
                        <h5>A1 DENTAL CLINIC</h5>
                        <p><strong>Call:</strong> +92 330-2194770</p>
                        <p>Main Touheed Commercial, Phase 5, DHA, Karachi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section class="medolia-hero" id="home">
    <div class="medolia-video-bg">
        <video autoplay muted loop playsinline class="hero-video-bg">
            <source src="{{ asset('assets/videos/clinic.mp4') }}" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-7 col-lg-7">
                <div class="hero-content text-center text-xl-start">
                    <span  class="sub-title text-light">Creating a Healthier Tomorrow</span>
                    <h1 class="animated-heading text-light">
                        <span class="word">Expert</span>
                        <span class="word">Dental</span>
                        <span class="word">Care</span>
                        <span class="word">for</span>
                        <span class="word">Every</span>
                        <span class="word">Smile</span>
                    </h1>
                    <p class="text-light">Providing comprehensive dental treatments, including preventive care, cosmetic dentistry, implants, and orthodontics for a healthier smile.</p>
                    <a href="#contact" class="theme-btn style-one">Discover More</a>
                </div>
            </div>

            <div class="col-xl-5 col-lg-5">
                <div class="hero-image-wrapper">
                    <div class="medolia-image">
                        <img src="{{ asset('assets/images/contact.png') }}"  alt="Doctor" class="img-fluid main-hero-img">
                    </div>

                    <div class="hero-contact-box">
                        <h5>A1 DENTAL CLINIC</h5>
                        <p><strong>Call:</strong> +92 330-2194770</p>
                        <p>Main Touheed Commercial, Phase 5, DHA, Karachi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- about --}}
<section class="medolia-about-sec pt-130 pb-120" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="medolia-image-box">
                    <div class="medolia-image" data-aos="fade-up" data-aos-duration="800">
                        <img src="{{ asset('assets/images/doctors/certificate.png') }}" alt="about image">
                    </div>

                    <!-- Medolia Certificate Box -->
                    <div class="medolia-certificate-box mt-3" data-aos="fade-up" data-aos-duration="1200">
                        <div class="content">
                            <h4>Certificate Verification</h4>
                            <p>Dr. Baldev’s credentials are fully verified. He is a Senior Dental Surgeon with over 24 years of experience in Dental Surgery, Implants, and Orthodontics. His certification and qualifications ensure that he provides the highest standard of care.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-8">
                <div class="medolia-content-box">
                    <!-- Section Title -->
                    <div class="section-title" data-aos="fade-up" data-aos-duration="800">
                        <span class="sub-title text-light" style="background-color:black;">About Us</span>
                        <h2>Dr. Baldev Leading the Charge in Revolutionary Dental Care</h2>
                    </div>
                    <p class="mb-25" data-aos="fade-up" data-aos-duration="1000">
                        At A1 Dental Clinic, Dr. Baldev leads the team with more than 24 years of experience in dental surgery, implants, and orthodontics. His patient-centric approach ensures that every individual receives care that’s tailored to their unique needs.
                    </p>
                    <!-- Medolia Left Icon Box -->
                    <div class="medolia-left-icon-box bg-one mb-30" data-aos="fade-up" data-aos-duration="1200">
                        <div class="icon">
                            <i class="flaticon-first-aid-kit"></i>
                        </div>
                        <div class="content">
                            <h4>Dedicated Healthcare Provider</h4>
                            <p>Dr. Baldev’s approach to dental care is personalized, employing the latest technology and techniques to ensure the best possible outcome for each patient.</p>
                        </div>
                    </div>
                    <!-- Medolia Left Icon Box -->
                    <div class="medolia-left-icon-box bg-two mb-30" data-aos="fade-up" data-aos-duration="1400">
                        <div class="icon">
                            <i class="flaticon-tooth"></i>
                        </div>
                        <div class="content">
                            <h4>Comprehensive Dental Care</h4>
                            <p>Dr. Baldev offers a full range of services, from routine checkups to advanced treatments such as implants, orthodontics, and cosmetic dentistry—all under one roof.</p>
                        </div>
                    </div>
                    <!-- Medolia Button Box -->
                    <div class="medolia-button-box d-flex mb-40" data-aos="fade-up" data-aos-duration="1600">
                        <div class="medolia-button">
                            <a href="#contact" class="theme-btn style-one">About More</a>
                        </div>
                        <div class="medolia-author-box">
                            <div class="author-thumbnail">
                                <img src="https://developers.google.com/static/ml-kit/vision/barcode-scanning/images/qrcode.png"
                                style="border: 2px solid white; padding: 5px; border-radius: 10px;object-fit:cover;background-color:#fff;"
                                 alt="author">
                            </div>
                            <div class="author-info">
                                <h5>Dr. Baldev</h5>
                                <span class="position">Senior Dental Surgeon</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--====== End About Section ======-->
<section class="medolia-counter-sec pt-80 pb-80">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-3 col-md-6 counter-column">
				<!-- Medolia Counter Item -->
				<div class="medolia-counter-item" data-aos="fade-up" data-aos-duration="1000">
					<div class="content">
						<img src="{{ asset("assets/images/teethden.png") }}" alt="avatar">
						{{-- <h4>300+ Appointments Successfully </h4> --}}
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 counter-column">
				<!-- Medolia Counter Item -->
				<div class="medolia-counter-item" data-aos="fade-up" data-aos-duration="1200">
					<div class="content">
						<h2><span class="counter">200</span>+</h2>
						<h4>Specialists Doctors</h4>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 counter-column">
				<!-- Medolia Counter Item -->
				<div class="medolia-counter-item" data-aos="fade-up" data-aos-duration="1400">
					<div class="content">
						<h2><span class="counter">50</span>K</h2>						<h4>Happy Customer</h4>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 counter-column">
				<!-- Medolia Counter Item -->
				<div class="medolia-counter-item" data-aos="fade-up" data-aos-duration="1600">
					<div class="content">
						<h2><span class="counter">152</span>+</h2>
						<h4>Winning Awards</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



{{-- <section class="medolia-service-sec pt-120 pb-80"  id="services">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="section-title text-center mb-60" data-aos="fade-up">

                    <span class="sub-title">Our Dental Services</span>

                    <h2>Advanced Dental Treatments With Professional Care</h2>

                    <p>We provide modern dental treatments using advanced technology and international level procedures.</p>

                </div>

            </div>

        </div>



        @php

            $services = [

                [

                    'title' => 'Consultation',

                    'text' => 'Professional dental checkup and expert advice for your oral health.',

                    'price' => 'PKR 500',

                    'before' => '{{ asset("assets/images/doctors/Consultation_Before.png") }}',

                    'after' => '{{ asset("assets/images/doctors/Consultation_After.png") }}',

                ],

                [

                    'title' => 'Scaling And Polishing',

                    'text' => 'Deep cleaning to remove stains, plaque and tartar buildup.',

                    'price' => 'PKR 3000',

                    'before' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Laser Teeth Whitening',

                    'text' => 'Advanced whitening for bright smile like actors and TV personalities.',

                    'price' => 'PKR 15000',

                    'before' => 'https://images.unsplash.com/photo-1609840114035-3c981b782dfe?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Root Canal Posterior',

                    'text' => 'Complete treatment in 3 visits with advanced technique.',

                    'price' => 'PKR 6000',

                    'before' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1606811971618-4486d14f3f99?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Anterior Root Canal Endo',

                    'text' => 'Single visit root canal treatment with precision care.',

                    'price' => 'PKR 5000',

                    'before' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Porcelain Crown',

                    'text' => 'Restore damaged teeth with strong and aesthetic crowns.',

                    'price' => 'PKR 500',

                    'before' => 'https://images.unsplash.com/photo-1609840114035-3c981b782dfe?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Zirconium Crown',

                    'text' => 'Premium solid crown with long lasting durability.',

                    'price' => 'PKR 20000',

                    'before' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1609840114035-3c981b782dfe?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Composite Filling',

                    'text' => 'Light cure tooth color filling for natural appearance.',

                    'price' => 'PKR 2000',

                    'before' => 'https://images.unsplash.com/photo-1606811971618-4486d14f3f99?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Normal Filling',

                    'text' => 'Standard cavity filling with reliable treatment.',

                    'price' => 'PKR 1500',

                    'before' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1606811971618-4486d14f3f99?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Night Guard',

                    'text' => 'Protection for teeth grinding during sleep.',

                    'price' => 'PKR 5000',

                    'before' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Labial Bow Procedure',

                    'text' => 'Removable orthodontic alignment treatment.',

                    'price' => 'PKR 5000',

                    'before' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Braces',

                    'text' => 'Teeth alignment treatment available on consultation.',

                    'price' => 'Discount Available',

                    'before' => 'https://images.unsplash.com/photo-1609840114035-3c981b782dfe?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Denture Upper Lower',

                    'text' => 'Complete denture replacement for missing teeth.',

                    'price' => 'PKR 30000',

                    'before' => 'https://images.unsplash.com/photo-1598256989800-fe5f95da9787?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Soft Denture',

                    'text' => 'Flexible denture with comfort and 3 visit treatment.',

                    'price' => 'PKR 70000',

                    'before' => 'https://images.unsplash.com/photo-1606811841689-23dfddce3e95?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1598256989800-fe5f95da9787?auto=format&fit=crop&w=900&q=80',

                ],

                [

                    'title' => 'Dental Implants',

                    'text' => 'Advanced implant treatment with international standard methods.',

                    'price' => '50% Discount',

                    'before' => 'https://images.unsplash.com/photo-1629909613654-28e377c37b09?auto=format&fit=crop&w=900&q=80',

                    'after' => 'https://images.unsplash.com/photo-1606811971618-4486d14f3f99?auto=format&fit=crop&w=900&q=80',

                ],

            ];

        @endphp



        <div class="row">

            @foreach($services as $service)

                <div class="col-xl-4 col-md-6">

                    <div class="medolia-service-box image-service-box mb-30" data-aos="fade-up">

                        <div class="before-after-slider">

                            <img src="{{ $service['after'] }}" alt="After" class="after-image">

                            <div class="before-image-wrap" style="width: 50%;">

                                <img src="{{ $service['before'] }}" alt="Before" class="before-image">

                            </div>

                            <input type="range" min="0" max="100" value="50" class="ba-range-slider">

                            <div class="slider-button"></div>

                            <span class="ba-label before-label">Before</span>

                            <span class="ba-label after-label">After</span>

                        </div>

                        <div class="content">

                            <h4>{{ $service['title'] }}</h4>

                            <p>{{ $service['text'] }}</p>

                            <h5>{{ $service['price'] }}</h5>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>



    </div>

</section> --}}


<section class="medolia-service-sec pt-120 pb-80" id="services">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center mb-60" data-aos="fade-up">
                    <span class="sub-title">Our Dental Services</span>
                    <h2>Advanced Dental Treatments With Professional Care</h2>
                    <p>We provide modern dental treatments using advanced technology and international level procedures.</p>
                </div>
            </div>
        </div>

        @php
            $services = [
                [
                    'title' => 'Consultation',
                    'text' => 'Professional dental checkup and expert advice for your oral health.',
                    'price' => 'PKR 500',
                    'before' => asset('assets/images/doctors/Consultation_Before.png'),
                    'after' => asset('assets/images/doctors/Consultation_After.png'),
                ],
                [
                    'title' => 'Scaling And Polishing',
                    'text' => 'Deep cleaning to remove stains, plaque and tartar buildup.',
                    'price' => 'PKR 3000',
                    'before' => asset('assets/images/doctors/Scaling_Before.png'),
                    'after' => asset('assets/images/doctors/Scaling_After.png'),
                ],
                [
                    'title' => 'Laser Teeth Whitening',
                    'text' => 'Advanced whitening for a brighter and confident smile.',
                    'price' => 'PKR 15000',
                    'before' => asset('assets/images/doctors/Whitening_Before.png'),
                    'after' => asset('assets/images/doctors/Whitening_After.png'),
                ],
                [
                    'title' => 'Root Canal Posterior',
                    'text' => 'Complete treatment in 3 visits with advanced technique.',
                    'price' => 'PKR 6000',
                    'before' => asset('assets/images/doctors/Root_Canal_Before.png'),
                    'after' => asset('assets/images/doctors/Root_Canal_After.png'),
                ],
                [
                    'title' => 'Anterior Root Canal Endo',
                    'text' => 'Single visit root canal treatment with precision care.',
                    'price' => 'PKR 5000',
                    'before' => asset('assets/images/doctors/Anterior_Before.png'),
                    'after' => asset('assets/images/doctors/Anterior_After.png'),
                ],
                [
                    'title' => 'Porcelain Crown',
                    'text' => 'Restore damaged teeth with strong and aesthetic crowns.',
                    'price' => 'PKR 500',
                    'before' => asset('assets/images/doctors/Crown_Before.png'),
                    'after' => asset('assets/images/doctors/Crown_After.png'),
                ],
                [
                    'title' => 'Zirconium Crown',
                    'text' => 'Premium solid crown with long lasting durability.',
                    'price' => 'PKR 20000',
                    'before' => asset('assets/images/doctors/Zirconium_Before.png'),
                    'after' => asset('assets/images/doctors/Zirconium_After.png'),
                ],
                [
                    'title' => 'Composite Filling',
                    'text' => 'Light cure tooth color filling for natural appearance.',
                    'price' => 'PKR 2000',
                    'before' => asset('assets/images/doctors/Composite_Filling_before.png'),
                    'after' => asset('assets/images/doctors/Composite_Filling_After.png'),
                ],
                [
                    'title' => 'Normal Filling',
                    'text' => 'Standard cavity filling with reliable treatment.',
                    'price' => 'PKR 1500',
                    'before' => asset('assets/images/doctors/Filling_Before.png'),
                    'after' => asset('assets/images/doctors/Filling_After.png'),
                ],
                [
                    'title' => 'Night Guard',
                    'text' => 'Protection for teeth grinding during sleep.',
                    'price' => 'PKR 5000',
                    'before' => asset('assets/images/doctors/Night_Guard_Before.png'),
                    'after' => asset('assets/images/doctors/Night_Guard_After.png'),
                ],
                [
                    'title' => 'Labial Bow Procedure',
                    'text' => 'Removable orthodontic alignment treatment.',
                    'price' => 'PKR 5000',
                    'before' => asset('assets/images/doctors/Labial_Bow_Before.png'),
                    'after' => asset('assets/images/doctors/Labial_Bow_After.png'),
                ],
                [
                    'title' => 'Braces',
                    'text' => 'Teeth alignment treatment available on consultation.',
                    'price' => 'Discount Available',
                    'before' => asset('assets/images/doctors/Braces_Before.png'),
                    'after' => asset('assets/images/doctors/Braces_After.png'),
                ],
                [
                    'title' => 'Denture Upper Lower',
                    'text' => 'Complete denture replacement for missing teeth.',
                    'price' => 'PKR 30000',
                    'before' => asset('assets/images/doctors/Denture_Before.png'),
                    'after' => asset('assets/images/doctors/Denture_After.png'),
                ],
                [
                    'title' => 'Soft Denture',
                    'text' => 'Flexible denture with comfort and 3 visit treatment.',
                    'price' => 'PKR 70000',
                    'before' => asset('assets/images/doctors/Soft_Denture_Before.png'),
                    'after' => asset('assets/images/doctors/Soft_Denture_After.png'),
                ],
                [
                    'title' => 'Dental Implants',
                    'text' => 'Advanced implant treatment with international standard methods.',
                    'price' => '50% Discount',
                    'before' => asset('assets/images/doctors/Implant_Before.png'),
                    'after' => asset('assets/images/doctors/Implant_After.png'),
                ],
            ];

        @endphp

        <div class="row">
            @foreach($services as $service)
                <div class="col-xl-4 col-md-6">
                    <div class="medolia-service-box image-service-box mb-30" data-aos="fade-up">

                        <div class="before-after-slider">
                            <img src="{{ $service['after'] }}" alt="{{ $service['title'] }} After" class="after-image">

                            <div class="before-image-wrap" style="width: 50%;">
                                <img src="{{ $service['before'] }}" alt="{{ $service['title'] }} Before" class="before-image">
                            </div>

                            <input type="range" min="0" max="100" value="50" class="ba-range-slider">
                            <div class="slider-button"></div>

                            <span class="ba-label before-label">Before</span>
                            <span class="ba-label after-label">After</span>
                        </div>

                        <div class="content">
                            <h4>{{ $service['title'] }}</h4>
                            <p>{{ $service['text'] }}</p>
                            <h5>{{ $service['price'] }}</h5>

                            <a href="https://wa.me/923302194770?text=Hello%2C%20I%20want%20to%20book%20{{ urlencode($service['title']) }}"
                               target="_blank"
                               class="service-whatsapp-btn">
                                Book Consultation
                            </a>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>

<style>
.image-service-box .content {
    display: flex;
    flex-direction: column;
}

.image-service-box .content h5 {
    margin-bottom: 14px;
}

.service-whatsapp-btn {
    align-self: flex-end;
    margin-top: -45px;
    margin-right: 0;
}

.service-whatsapp-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 165px;
    height: 42px;
    padding: 0 22px;
    background: linear-gradient(135deg, #79D3F1 0%, #4DB7DD 100%);
    color: #ffffff;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 800;
    line-height: 1;
    text-decoration: none;
    letter-spacing: 0.2px;
    box-shadow: 0 10px 24px rgba(77, 183, 221, 0.35);
    transition: all 0.3s ease;
    border: 1px solid rgba(255, 255, 255, 0.35);
}

.service-whatsapp-btn:hover {
    background: linear-gradient(135deg, #111111 0%, #2b2b2b 100%);
    color: #ffffff;
    transform: translateY(-3px);
    box-shadow: 0 14px 30px rgba(0, 0, 0, 0.22);
}
@media screen and (max-width: 767px) {
    .before-after-slider {
        height: 230px;
    }

    .image-service-box .content {
        padding: 20px;
    }

    .image-service-box .content h4 {
        font-size: 19px;
    }

    .service-whatsapp-btn {
        align-self: flex-start;
        margin-top: 0;
    }
}
</style>






<!--====== Start Treatment Section ======-->
<section class="medolia-treatment-sec pt-130 pb-110">
    <div class="treatment-bg bg_cover" style="background-image: url(assets/images/treatment-bg.jpg);"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-6">
                <div class="medolia-content-box">
                    <div class="section-title mb-40" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title">Clinical Excellence</span>
                        <h2>The Expertise You Can Trust</h2>
                    </div>

                    <p data-aos="fade-up" data-aos-duration="1200">
                        At A1 Dental Clinic, we combine over 24 years of surgical precision with a compassionate approach to dental care. Dr. Baldev Shalapuri, our Senior Dental Surgeon, brings unparalleled experience from his tenure at the Aga Khan Hospital, Karachi. His expertise spans across complex dental surgeries, state-of-the-art implants, and advanced orthodontic treatments.
                    </p>

                    <p data-aos="fade-up" data-aos-duration="1400">
                        We are committed to providing personalized, high-quality care that meets international standards. Every treatment plan is carefully curated to ensure optimal health outcomes and a lasting, beautiful smile for our patients. Your oral health journey deserves the best, and we are here to guide you with innovation and care.
                    </p>

                    <div class="medolia-button-box d-flex align-items-center" data-aos="fade-up" data-aos-duration="1600">
                        {{-- <div class="medolia-button">
                            <a href="contact.php" class="theme-btn style-one">Book Consultation</a>
                        </div> --}}

                        <div class="medolia-author-box">
                            <div class="author-thumbnail" style="border: 2px solid white; padding: 5px; border-radius: 10px;object-fit:cover;background-color:#fff;">
                                <img src="https://developers.google.com/static/ml-kit/vision/barcode-scanning/images/qrcode.png" width="100%" alt="QR Scanner">
                            </div>
                            <div class="author-info">
                                <h5 style="margin-bottom: 2px;">Dr. Baldev</h5>
                                <span class="position">Senior Dental Surgeon</span>
                                <p style="font-size: 11px; margin: 0; line-height: 1.2;">Scan for Location</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--====== End Treatment Section ======--><!--====== Start Process Section ======-->

<!--====== End Counter Section ======--><!--====== Start Service Section ======-->
<section class="medolia-tech-sec pt-130 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-title text-center mb-60" data-aos="fade-up">
                    <span class="sub-title">Advanced Technology</span>
                    <h2>Where Technology Meets Dentistry</h2>
                </div>
            </div>
        </div>

        <div class="tech-grid-wrapper">
            <div class="tech-slider">
                @php
                    $tech_items = [
                        ['img' => asset('assets/images/doctors/Root_Canals_Under_Microscope.png'), 'title' => 'Root Canals Under Microscope'],
                        ['img' => asset('assets/images/doctors/digital_scanning.png'), 'title' => 'State Of The Art Surgeries'],
                        ['img' => asset('assets/images/doctors/cbct.png'), 'title' => 'Treatment Planning On CBCT'],
                        ['img' => asset('assets/images/doctors/Sirona_Laser_technology.png'), 'title' => 'Sirona Laser technology'],
                        ['img' => asset('assets/images/doctors/digital_scanning.png'), 'title' => 'Digital Scanning']
                    ];
                @endphp

                {{-- Image set ko double kar rahe hain taake infinite loop smooth chale --}}
                @foreach(array_merge($tech_items, $tech_items) as $item)
                    <div class="tech-item">
                        <div class="tech-image-box">
                            <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}">
                        </div>
                        <h4 class="tech-title">{{ $item['title'] }}</h4>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>








{{--
<section class="medolia-process-sec pt-130">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-7">
				<!-- Section Title -->
				<div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1000">
					<span class="sub-title">Working Process</span>
					<h2>Guiding You Through Every Step</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolia Process Item -->
				<div class="medolia-process-item mb-40" data-aos="fade-up" data-aos-duration="1000">
					<div class="sn">01</div>
					<div class="icon">
						<i class="flaticon-diagnostic-report"></i>
					</div>
					<div class="content">
						<h4>Health Assessment</h4>
						<p>Comprehensive assessment personalized health care</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolia Process Item -->
				<div class="medolia-process-item mb-40" data-aos="fade-up" data-aos-duration="1200">
					<div class="sn">02</div>
					<div class="icon">
						<i class="flaticon-treatment-plan"></i>
					</div>
					<div class="content">
						<h4>Treatment Plant</h4>
						<p>Customized treatment for health recovery.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolia Process Item -->
				<div class="medolia-process-item mb-40" data-aos="fade-up" data-aos-duration="1400">
					<div class="sn">03</div>
					<div class="icon">
						<i class="flaticon-first-aid-kit-1"></i>
					</div>
					<div class="content">
						<h4>Medical Guidance</h4>
						<p>Expert advice for better health decisions</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolia Process Item -->
				<div class="medolia-process-item mb-40" data-aos="fade-up" data-aos-duration="1600">
					<div class="sn">04</div>
					<div class="icon">
						<i class="flaticon-24-7"></i>
					</div>
					<div class="content">
						<h4>Monitoring & Support</h4>
						<p>Ongoing care for continuous health improvement</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}

<!--====== End Process Section ======--><!--====== Start Choose Section ======-->

<section class="medolia-choose-sec pb-90">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-5 col-lg-8">
				<!-- Medolia Content Box -->
				<div class="medolia-content-box mb-60">
					<div class="section-title mb-20" data-aos="fade-up" data-aos-duration="1000">
						<span class="sub-title">Why Choose Us</span>
						<h2>Excellence in Dental Care, Personalized for You</h2>
					</div>
					<p data-aos="fade-up" data-aos-duration="1200">At Dr. Baldev’s One Dental Clinic, we provide the highest quality dental care with advanced treatments, compassionate support, and customized dental solutions to ensure your smile stays healthy and bright.</p>
				</div>
			</div>
			<div class="col-xl-7 col-lg-8">
				<!-- Medolia Image Box -->
				<div class="medolia-image-box mb-70" data-aos="fade-up" data-aos-duration="1200">
					<div class="medolia-image">
						<img src="{{ asset('assets/images/doctors/choose_us.webp') }}" alt="choose image">
						{{-- <div class="play-button">
							<a href="https://www.youtube.com/watch?v=Fjf20HmHRd8" class="video-popup"><i class="fas fa-play"></i></a>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolioa Iconic Box -->
				<div class="medolia-iconic-box text-center bg_one mb-40" data-aos="fade-up" data-aos-duration="1000">
					<div class="icon">
						<i class="flaticon-timer"></i>
					</div>
					<div class="content">
						<h4 class="text-light">Fast and Efficient Service</h4>
						<p>We ensure timely dental appointments and treatments, getting you back to your routine quickly.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolioa Iconic Box -->
				<div class="medolia-iconic-box text-center bg_two mb-40" data-aos="fade-up" data-aos-duration="1200">
					<div class="icon">
						<i class="flaticon-aim"></i>
					</div>
					<div class="content">
						<h4 class="text-light">Personalized Care</h4>
						<p>At Dr. Baldev’s clinic, we put patients first, offering personalized treatment for all dental needs.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolioa Iconic Box -->
				<div class="medolia-iconic-box text-center bg_three mb-40" data-aos="fade-up" data-aos-duration="1400">
					<div class="icon">
						<i class="flaticon-doctor"></i>
					</div>
					<div class="content">
						<h4 class="text-light">Experienced Dental Specialists</h4>
						<p>With over 24 years of experience, Dr. Baldev and his team provide top-notch dental care.</p>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolioa Iconic Box -->
				<div class="medolia-iconic-box text-center bg_four mb-40" data-aos="fade-up" data-aos-duration="1600">
					<div class="icon">
						<i class="flaticon-24-7"></i>
					</div>
					<div class="content">
						<h4 class="text-light">24/7 Assistance</h4>
						<p>We are available to support you anytime, ensuring you have access to care whenever you need it.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

{{-- <section class="medolia-booking-sec pt-130 pb-80" id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<!-- Medolia Content Box -->
				<div class="medolia-content-box mb-50">
					<div class="section-title mb-40" data-aos="fade-up" data-aos-duration="1000">
						<span class="sub-title">Booking</span>
						<h2 class="mb-20">Book Your Appointment Schedule Today</h2>
						<p>Book your appointment today for expert medical & personalized And treatment, compassionate support for a healthier.</p>
					</div>
					<div class="medolia-image" data-aos="fade-up" data-aos-duration="1200">
						<img src="{{ asset("assets/images/booking-img.jpg") }}" alt="Booking Image">
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<!-- Booking Wrapper -->
				<div class="booking-wrapper" data-aos="fade-up" data-aos-duration="1400">
					<h3>Make an Appointment</h3>
					<form class="booking-form">
						<div class="row">
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form_control" placeholder="Patient Name" name="name" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="text" class="form_control" placeholder="Phone Number" name="Phone" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<input type="date" class="form_control" name="Phone" required>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									<select class="wide">
										<option value="Time">Time</option>
										<option value="01">10.00 AM -- 11.00 AM</option>
										<option value="02">11.00 AM -- 12.00 PM</option>
										<option value="02">12.00 AM -- 01.00 PM</option>
										<option value="02">03.00 PM -- 04.00 PM</option>
										<option value="02">04.00 AM -- 05.00 PM</option>
										<option value="02">05.00 AM -- 06.00 PM</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<select class="wide">
										<option value="Select Department">Select Department</option>
										<option value="01">Cardiologist</option>
										<option value="02">Gynecologist</option>
										<option value="03">Orthopedist</option>
										<option value="04">Dentist Specialist</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group">
									<select class="wide">
										<option value="Select Doctor">Select Doctor</option>
										<option value="01">Dr. Alison Banson</option>
										<option value="02">Dr. Emily Carter</option>
										<option value="03">Christopher Case</option>
										<option value="04">Dr. Sarah Mitchell</option>
									</select>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="form-group mt-20">
									<button class="theme-btn style-one">Appointment</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section> --}}


{{-- <section class="medolia-booking-sec pt-130 pb-80" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="medolia-content-box mb-50">
                    <div class="section-title mb-40" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title">Appointments</span>
                        <h2 class="mb-20">Schedule Your Consultation Today</h2>
                        <p>Reserve your appointment now for professional and personalized dental care, offering compassionate support for a healthier, more confident smile.</p>
                    </div>
                    <div class="medolia-image" data-aos="fade-up" data-aos-duration="1200">
                        <img src="{{ asset("assets/images/booking-img.jpg") }}" alt="Booking Image">
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-wrapper" data-aos="fade-up" data-aos-duration="1400">
                    <h3>Contact Us</h3>
                    <form id="bookingPageForm" class="contact-form" method="POST" action="{{ route('Home.welcome.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form_control" placeholder="Your Name" name="name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form_control" placeholder="Phone Number" name="phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form_control" placeholder="Country" name="country" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form_control" placeholder="Your Message" name="message" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group mt-20">
                                    <button type="submit" class="theme-btn style-one" id="submitButton">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}


{{-- <section class="medolia-booking-sec pt-130 pb-80" id="contact">
    <div class="container">
        <div class="row align-items-stretch">

            <div class="col-lg-6">
                <div class="medolia-content-box contact-info-box mb-50 h-100">
                    <div class="section-title mb-35" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title">Contact</span>
                        <h2 class="mb-20">Get in Touch With A1 Dental Clinic</h2>
                        <p>
                            Reach out to A1 Dental Clinic for appointments, dental consultations, implant guidance,
                            orthodontic care, and professional oral health support.
                        </p>
                    </div>

                    <div class="clinic-contact-details" data-aos="fade-up" data-aos-duration="1200">

                        <div class="clinic-contact-item">
                            <i class="fas fa-user-md"></i>
                            <div>
                                <h5>Dr. Baldev</h5>
                                <p>Senior Dental Surgeon with more than 24 years of experience</p>
                            </div>
                        </div>

                        <div class="clinic-contact-item">
                            <i class="fas fa-phone-alt"></i>
                            <div>
                                <h5>Appointment Number</h5>
                                <p><a href="tel:+923302194770">92 330 2194770</a></p>
                            </div>
                        </div>

                        <div class="clinic-contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h5>Email Address</h5>
                                <p><a href="mailto:drbaldev13@gmail.com">drbaldev13@gmail.com</a></p>
                            </div>
                        </div>

                        <div class="clinic-contact-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h5>Clinic Timing</h5>
                                <p>3:00 PM to 9:00 PM<br>Sunday Closed</p>
                            </div>
                        </div>

                        <div class="clinic-contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h5>Clinic Address</h5>
                                <p>Main Touheed Commercial, Plot 9C, 24 Street, Phase 5, DHA Karachi</p>
                            </div>
                        </div>

                    </div>

                    <div class="clinic-map-box mt-30" data-aos="fade-up" data-aos-duration="1300">
                        <iframe
                            src="https://www.google.com/maps?q=Main%20Touheed%20Commercial%20Plot%209C%2024%20Street%20Phase%205%20DHA%20Karachi&output=embed"
                            width="100%"
                            height="250"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-wrapper mb-50 h-100" data-aos="fade-up" data-aos-duration="1400">
                    <h3>Contact Us</h3>

                    <form id="bookingPageForm" class="contact-form" method="POST" action="{{ route('Home.welcome.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form_control" placeholder="Your Name" name="name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form_control" placeholder="Phone Number" name="phone" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form_control" placeholder="Country" name="country" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form_control" placeholder="Your Message" name="message" rows="5" required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mt-20">
                                    <button type="submit" class="theme-btn style-one" id="submitButton">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section> --}}

<section class="medolia-booking-sec pt-130 pb-80" id="contact">
    <div class="container">
        <div class="row align-items-stretch">

            <div class="col-lg-6">
                <div class="medolia-content-box contact-info-box mb-50 h-100">
                    <div class="section-title mb-35" data-aos="fade-up" data-aos-duration="1000">
                        <span class="sub-title">Contact</span>
                        <h2 class="mb-20">Get in Touch With A1 Dental Clinic</h2>
                        <p>
                            Reach out to A1 Dental Clinic for appointments, dental consultations, implant guidance,
                            orthodontic care, and professional oral health support.
                        </p>
                    </div>

                    <div class="clinic-contact-grid" data-aos="fade-up" data-aos-duration="1200">

                        <div class="clinic-contact-card">
                            <div class="clinic-icon">
                                <i class="fas fa-user-md"></i>
                            </div>
                            <h5>Dr. Baldev</h5>
                            <p>Senior Dental Surgeon</p>
                            <span>24 Years of Experience</span>
                        </div>

                        <a href="tel:+923302194770" class="clinic-contact-card">
                            <div class="clinic-icon">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <h5>Appointment Number</h5>
                            <p>92 330 2194770</p>
                            <span>Tap to call directly</span>
                        </a>

                        <a href="mailto:drbaldev13@gmail.com" class="clinic-contact-card">
                            <div class="clinic-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h5>Email Address</h5>
                            <p>drbaldev13@gmail.com</p>
                            <span>Send your query anytime</span>
                        </a>

                        <a href="https://www.google.com/maps/search/?api=1&query=Main%20Touheed%20Commercial%20Plot%209C%2024%20Street%20Phase%205%20DHA%20Karachi"
                           target="_blank"
                           class="clinic-contact-card">
                            <div class="clinic-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h5>Clinic Address</h5>
                            <p>Main Touheed Commercial, Plot 9C, 24 Street, Phase 5, DHA Karachi</p>
                            <span>Tap to open in map</span>
                        </a>

                    </div>

                    <div class="clinic-modern-map mt-30" data-aos="fade-up" data-aos-duration="1300">
                        <div class="map-topbar">
                            <div>
                                <h5>A1 Dental Clinic Location</h5>
                                <p>DHA Karachi</p>
                            </div>

                            <a href="https://www.google.com/maps/search/?api=1&query=Main%20Touheed%20Commercial%20Plot%209C%2024%20Street%20Phase%205%20DHA%20Karachi"
                               target="_blank">
                                Open Map
                            </a>
                        </div>

                        <iframe
                            src="https://www.google.com/maps?q=Main%20Touheed%20Commercial%20Plot%209C%2024%20Street%20Phase%205%20DHA%20Karachi&output=embed"
                            width="100%"
                            height="250"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-wrapper mb-50 h-100" data-aos="fade-up" data-aos-duration="1400">
                    <h3>Contact Us</h3>

                    <form id="bookingPageForm" class="contact-form" method="POST" action="{{ route('Home.welcome.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form_control" placeholder="Your Name" name="name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form_control" placeholder="Phone Number" name="phone" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form_control" placeholder="Email Address" name="email" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form_control" placeholder="Country" name="country" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form_control" placeholder="Your Message" name="message" rows="5" required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group mt-20">
                                    <button type="submit" class="theme-btn style-one" id="submitButton">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</section>







<!--====== End Booking Section ======-->

<!-- Modal for Thank You Message -->
<div class="modal fade" id="thankYouModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">

                {{-- <h5 class="modal-title">Success</h5> --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <img src="{{ asset('assets/images/contact.png') }}" alt="Success">
                <h5>Message Sent!</h5>
                <p>Thank you for reaching out. Our team will contact you shortly to confirm your appointment.</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




<section class="medolia-team-sec pt-130 pb-85">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-7">
				<!-- Section Title -->
				<div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1000">
					<span class="sub-title">Our Expert Team</span>
					<h2>Meet Our Trusted Dental Experts</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolia Team Item -->
				<div class="medolia-team-item text-center mb-40" data-aos="fade-up" data-aos-duration="1000">
					<div class="member-image">
						<img src="{{ asset('assets/images/doctors/doc1.png') }}" alt="Dr. Alison Banson">
						<div class="social-box">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
							<a href="#"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="member-info">
						<h4><a href="team-details.php">Dr. Qayyum</a></h4>
						<span class="position">Dental Specialist</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolia Team Item -->
				<div class="medolia-team-item text-center mb-40" data-aos="fade-up" data-aos-duration="1200">
					<div class="member-image">
						<img src="{{ asset("assets/images/doctors/doc2.png") }}" alt="Dr. Emily Carter">
						<div class="social-box">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
							<a href="#"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="member-info">
						<h4><a href="team-details.php">Dr. Zoheen</a></h4>
						<span class="position">Cosmetic Dentist</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolia Team Item -->
				<div class="medolia-team-item text-center mb-40" data-aos="fade-up" data-aos-duration="1400">
					<div class="member-image">
						<img src="{{ asset("assets/images/doctors/doc3.png") }}" alt="Dr. Michael Cole">
						<div class="social-box">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
							<a href="#"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="member-info">
						<h4><a href="team-details.php">Dr. Sarah Khan</a></h4>
						<span class="position">Orthodontic Specialist</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-sm-12">
				<!-- Medolia Team Item -->
				<div class="medolia-team-item text-center mb-40" data-aos="fade-up" data-aos-duration="1600">
					<div class="member-image">
						<img src="{{ asset("assets/images/doctors/doc4.png") }}" alt="Dr. Sarah Mitchell">
						<div class="social-box">
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-linkedin-in"></i></a>
							<a href="#"><i class="fab fa-pinterest-p"></i></a>
						</div>
					</div>
					<div class="member-info">
						<h4><a href="team-details.php">Dr. Ubaid</a></h4>
						<span class="position">Pediatric Dentist</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--====== End Team Section ======-->


<!--====== Start Testimonial Section ======-->



<section class="medolia-testimonial-sec pt-130 pb-80">
	<div class="container">
		<div class="row">
			<div class="col-xl-6">
				<!--=== Medolia Content Box ===-->
				<div class="medolia-content-box mb-50">
					<div class="section-title mb-50" data-aos="fade-up" data-aos-duration="1000">
						<span class="sub-title">Testimonials</span>
						<h2 class="mb-20">Patient Testimonials Healthier Happier Smiles</h2>
						<p>Discover real patient testimonials highlighting our expert medical care and personalized treatments, and compassionate support.</p>
					</div>
					<div class="testimonial-slider" data-aos="fade-up" data-aos-duration="1200">
						<div class="medolia-testimonial-item">
							<div class="testimonial-content">
								<div class="ratings">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
								<h4>Discover real patient testimonials highlighting our expert medical care, personalized treatments, and compassionate support. See how our dedicated </h4>
								<div class="medolia-author-box">
									<div class="author-thumbnail">
										<img src="{{ asset('assets/images/avatar1.jpg') }}" alt="author">
									</div>
									<div class="author-info">
										<h5>Anjelina Watson</h5>
										<span class="position">Health</span>
									</div>
								</div>
							</div>
						</div>
						<div class="medolia-testimonial-item">
							<div class="testimonial-content">
								<div class="ratings">
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
								</div>
								<h4>Discover real patient testimonials highlighting our expert medical care, personalized treatments, and compassionate support. See how our dedicated </h4>
								<div class="medolia-author-box">
									<div class="author-thumbnail">
										<img src="{{ asset('assets/images/avatar2.jpg') }}" alt="author">
									</div>
									<div class="author-info">
										<h5>Anjelina Watson</h5>
										<span class="position">Health</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6">
				<!--=== Medolia Image ===-->
				<div class="medolia-image mb-50" data-aos="fade-up" data-aos-duration="1000">
					<img src="{{ asset('assets/images/doctors/Testimonials.png') }}" alt="testimonial img">
				</div>
			</div>
		</div>
	</div>
</section>
<!--====== End Testimonial Section ======--><!--====== Start Faq Section ======-->
<section class="medolia-faq-sec pt-130 pb-120" id="faq" >
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-5 col-lg-8 order-2 order-xl-1">
				<!--=== Medolia Image Box ===-->
				<div class="medolia-image-box">
					<!-- Medolia Image -->
					<div class="medolia-image mb-30" data-aos="fade-up" data-aos-duration="1000">
						<img src="{{ asset('assets/images/doctors/faqs.png') }}" alt="FAQ Image">
					</div>
					<!-- Medolia Info Box -->
					<div class="medolia-info-area" data-aos="fade-up" data-aos-duration="1200">
						<div class="icon">
							<i class="far fa-phone-alt"></i>
						</div>
						<div class="info">
							<span>Emergency Appointment</span>
							<h4><a href="tel:+923302194770">+92 330-2194770</a></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-8 order-1 order-xl-2">
				<!-- Medolia Content Box -->
				<div class="medolia-content-box mb-5 mb-xl-0">
					<div class="section-title mb-50" data-aos="fade-up" data-aos-duration="1000">
						<span class="sub-title">FAQ’s</span>
						<h2 class="mb-20">Your Dental Care Questions Answered</h2>
						<p>Find answers to common dental care questions, treatment details, and services offered at A1 Dental Clinic to make informed decisions about your health.</p>
					</div>
					<!--====== Accordion  ======-->
					<div class="accordion" id="accordionOne">
						<!--====== Accordion Item  ======-->
						<div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="800">
							<div class="accordion-header">
								<h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true">
									How often should I visit the dentist for a check-up?
								</h6>
							</div>
							<div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionOne">
								<div class="accordion-content">
									<p>It is recommended to visit your dentist for a routine check-up at least once every six months to maintain optimal oral health.</p>
								</div>
							</div>
						</div>
						<!--====== Accordion Item  ======-->
						<div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1000">
							<div class="accordion-header">
								<h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false">
									What are the signs that I may need emergency dental care?
								</h6>
							</div>
							<div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
								<div class="accordion-content">
									<p>If you experience severe tooth pain, excessive bleeding, broken teeth, or swelling, it's crucial to seek emergency dental care immediately.</p>
								</div>
							</div>
						</div>
						<!--====== Accordion Item  ======-->
						<div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1200">
							<div class="accordion-header">
								<h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false">
									What are the best ways to maintain good oral hygiene?
								</h6>
							</div>
							<div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
								<div class="accordion-content">
									<p>Brushing your teeth twice daily with fluoride toothpaste, flossing regularly, and using mouthwash can help keep your teeth and gums healthy.</p>
								</div>
							</div>
						</div>
						<!--====== Accordion Item  ======-->
						<div class="accordion-card mb-10" data-aos="fade-up" data-aos-duration="1400">
							<div class="accordion-header">
								<h6 class="accordion-title" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false">
									What dental services does A1 Dental Clinic offer?
								</h6>
							</div>
							<div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
								<div class="accordion-content">
									<p>A1 Dental Clinic offers a wide range of services including general dentistry, orthodontics, dental implants, teeth whitening, and emergency care.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!--====== End Faq Section ======-->


{{-- <section class="medolia-blog pt-130 pb-90">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5">
				<!--=== Section Title ===-->
				<div class="section-title mb-50 text-center text-lg-start" data-aos="fade-up" data-aos-duration="1000">
					<span class="sub-title">Latest Blog</span>
					<h2>Latest Medical Insights And Updates</h2>
				</div>
			</div>
			<div class="col-lg-7">
				<!--=== Medolia Button ===-->
				<div class="medolia-button text-center text-lg-end mb-60" data-aos="fade-up" data-aos-duration="1200">
					<a href="blog-grid.php" class="theme-btn style-one">View All Blog</a>
				</div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-xl-4 col-md-6 col-sm-12">
				<!-- Medolia Post Item -->
				<div class="medolia-post-item mb-40" data-aos="fade-up" datas-aos-duration="1000">
					<div class="post-thumbnail">
						<img src="{{ asset('assets/images/blog-img1.jpg') }}" alt="blog image">
					</div>
					<div class="post-content">
						<div class="post-meta">
							<span><a href="#">Medical</a></span>
							<span><a href="#">Healthcare</a></span>
						</div>
						<h4 class="title"><a href="blog-details.php">Demystifying Male Infertility Causes Symptoms Diagnostic</a></h4>
						<a href="blog-details.php" class="read-more style-one">Read more <i class="far fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 col-sm-12">
				<!-- Medolia Post Item -->
				<div class="medolia-post-item mb-40" data-aos="fade-up" data-aos-duration="1200">
					<div class="post-thumbnail">
						<img src="assets/images/home-one/blog/blog-img2.jpg" alt="blog image">
					</div>
					<div class="post-content">
						<div class="post-meta">
							<span><a href="#">Medical</a></span>
							<span><a href="#">Healthcare</a></span>
						</div>
						<h4 class="title"><a href="blog-details.php">Healthcare Insights Navigating Business and Patient Care</a></h4>
						<a href="blog-details.php" class="read-more style-one">Read more <i class="far fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 col-sm-12">
				<!-- Medolia Post Item -->
				<div class="medolia-post-item mb-40" data-aos="fade-up" data-aos-duration="1400">
					<div class="post-thumbnail">
						<img src="assets/images/home-one/blog/blog-img3.jpg" alt="blog image">
					</div>
					<div class="post-content">
						<div class="post-meta">
							<span><a href="#">Medical</a></span>
							<span><a href="#">Healthcare</a></span>
						</div>
						<h4 class="title"><a href="blog-details.php">Wellness Weaves: Creating a Tapestry of Optimal Health</a></h4>
						<a href="blog-details.php" class="read-more style-one">Read more <i class="far fa-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> --}}





@endsection
