<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Medical, Doctor, Dental">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>One Dental Clinic</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon/flaticon_medolia.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/spacings.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/pages/home-one.css') }}">
    <style>
        html {
    scroll-behavior: smooth;
}


    </style>

    @stack('styles')
</head>

<body class="restaurant-website">

{{-- <div class="preloader">
    <div class="loader"></div>
</div> --}}

<div class="offcanvas__overlay"></div>

<header class="header-area header-one">
    <div class="container">
        <div class="header-navigation">
            <div class="nav-inner-menu">
                <div class="primary-menu">

                    <div class="site-branding">
                        <a href="#home" class="brand-logo">
                            <img style="width: 70%;" class="dentallogo"  src="{{ asset('assets/images/newlogo.png') }}" alt="Brand Logo">
                        </a>
                    </div>

                    <div class="theme-nav-menu">
                        <div class="theme-menu-top d-flex justify-content-between d-block d-lg-none mb-4">
                            <div class="site-branding">
                                <a href="#home" class="brand-logo">
                                    <img src="{{ asset('assets/images/newlogo.png') }}" alt="Brand Logo">
                                </a>
                            </div>
                        </div>

                        <nav class="main-menu">
                            <ul>
                                {{-- <li class="menu-item has-children">
                                    <a href="{{ url('/') }}">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('/') }}">Home 01</a></li>
                                        <li><a href="#">Home 02</a></li>
                                        <li><a href="#">Home 03</a></li>
                                    </ul>
                                </li> --}}
                             <li class="menu-item"><a href="#home">Home</a></li>


                                <li class="menu-item"><a href="{{ asset('#about') }}">About Us</a></li>
                                <li class="menu-item"><a href="{{ asset('#services') }}">Services</a></li>
      <li class="menu-item"><a href="#faq">FAQ</a></li>
        <li class="menu-item"><a href="#contact">Contact</a></li>
{{--
                                <li class="menu-item has-children">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ asset('/services') }}">Services</a></li>
                                        <li><a href="#">Service Details</a></li>
                                    </ul>
                                </li> --}}

                                {{-- <li class="menu-item has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Testimonial</a></li>
                                        <li><a href="#">Faq</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Blog Grid</a></li>
                                        <li><a href="#">Blog Standard</a></li>
                                        <li><a href="#">Blog Details</a></li>
                                    </ul>
                                </li>

                                <li class="menu-item">
                                    <a href="{{ url('/contact') }}">Contact</a>
                                </li> --}}
                            </ul>
                        </nav>

                        <div class="theme-nav-button mt-3 d-block d-md-none">
                            <a href="#contact" class="theme-btn style-one">Contact</a>
                        </div>

                        <div class="theme-menu-bottom mt-5 d-block d-lg-none">
                            <h5>Follow Us</h5>
                            <ul class="social-link">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="nav-right-item">
                        <div class="nav-button d-none d-md-block">
                            <a href="#contact" class="theme-btn style-one">Contact Us</a>
                        </div>
                        <div class="navbar-toggler">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</header>

<main>
    @yield("Content")
</main>


<!-- Final Vertical Sticky Bar -->
<div class="vertical-sticky-bar">
    <!-- WhatsApp -->
    <a href="https://wa.me/923302194770" target="_blank" class="sticky-item whatsapp" title="WhatsApp Us">
        <i class="fab fa-whatsapp"></i>
    </a>

    <!-- Instagram -->
    <a href="https://www.instagram.com/a1dental.clinic/" target="_blank" class="sticky-item instagram" title="Follow on Instagram">
        <i class="fab fa-instagram"></i>
    </a>

    <!-- Facebook -->
    <a href="https://www.facebook.com/a1dentalclinicofficial" target="_blank" class="sticky-item facebook" title="Like on Facebook">
        <i class="fab fa-facebook-f"></i>
    </a>

    <!-- Email -->
    <a href="mailto:drbaldev13@gmail.com" class="sticky-item email" title="Email Us">
        <i class="fas fa-envelope"></i>
    </a>

    <!-- Appointment Button -->
    <a href="#contact" class="sticky-item appointment">
        <i class="fas fa-calendar-alt"></i>
        <span class="sticky-text">Book Now</span>
    </a>
</div>
{{--
<footer class="default-footer bg_cover" style="background-image: url('{{ asset('assets/images/footer-bg.jpg') }}');">
    <div class="container">
        <div class="footer-top pt-50 pb-40">
            <div class="row">
                <div class="col-xl-7">
                    <div class="footer-top-left mb-30" data-aos="fade-up" data-aos-duration="1000">
                        <h2>Precision Product Testing by Expert Scientists</h2>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="footer-top-right mb-30" data-aos="fade-up" data-aos-duration="1200">
                        <p>Expert scientists conduct precision product testing using advanced methodologies to ensure accuracy.</p>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form_control" placeholder="Enter email" name="email" required>
                                <button class="theme-btn style-one">Submit Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget-area pt-100 pb-50">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12 order-1">
                    <div class="footer-widget footer-about-widget mb-40" data-aos="fade-up" data-aos-duration="800">
                        <div class="widget-content">
                            <img src="{{ asset('assets/images/home-two/logo/logo-white.png') }}" class="mb-25" alt="logo white">
                            <p>Medlife offers healthcare solutions, medicines, diagnostics, and wellness products for better health.</p>
                            <div class="social-box">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 order-xl-2 order-3">
                    <div class="row ps-xl-5">
                        <div class="col-md-6">
                            <div class="footer-widget footer-nav-widget mb-40" data-aos="fade-up" data-aos-duration="1000">
                                <h4 class="widget-title">Quick Link</h4>
                                <div class="widget-content">
                                    <ul class="widget-nav">
                                        <li><a href="#">Company</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Appointment</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="footer-widget footer-schedule-widget mb-40" data-aos="fade-up" data-aos-duration="1200">
                                <h4 class="widget-title">Schedule Time</h4>
                                <div class="widget-content">
                                    <span>Mon Thu: 09:00 06:00</span>
                                    <span>Saturday: 09:00 06:00</span>
                                    <span>Sunday: Off Day</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 order-2 order-xl-3">
                    <div class="footer-widget footer-contact-info-widget mb-40" data-aos="fade-up" data-aos-duration="1400">
                        <h4 class="widget-title">Address</h4>
                        <div class="widget-content">
                            <div class="medolia-info-box mb-25">
                                <div class="icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <p>123 Health Avenue, New York, NY 10001, USA</p>
                                </div>
                            </div>

                            <div class="medolia-info-box mb-25">
                                <div class="icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <div class="content">
                                    <p>123 Health Avenue, New York, NY 10001, USA</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright-area">
        <div class="container">
            <div class="copyright-text text-center">
                <p>&copy; {{ date('Y') }} All rights reserved by Medolia</p>
            </div>
        </div>
    </div>
</footer> --}}
<footer class="default-footer bg_cover" style="background-image: url('{{ asset('assets/images/footer-bg.png') }}'); position: relative; background-size: cover; background-position: center;">

    <div class="footer-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.85); z-index: 1;"></div>

    <div class="container" style="position: relative; z-index: 2; color: #ffffff;">
        <div class="footer-top pt-50 pb-40">
            <div class="row">
                <div class="col-xl-7">
                    <div class="footer-top-left mb-30" data-aos="fade-up" data-aos-duration="1000">
                        <h2 style="color: #79D3F1; font-weight: 700;">Your Trusted Dental Clinic</h2>
                        <p style="color: rgba(255, 255, 255, 0.8);">Expert Dental Care with over 24 years of experience in treatments, implants, and orthodontics.</p>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="footer-top-right mb-30" data-aos="fade-up" data-aos-duration="1200">
                        <form>
                            <div class="form-group" style="display: flex; gap: 10px;">
                                <input type="email" class="form_control" placeholder="Enter email" name="email" required style="background: rgba(255,255,255,0.1); border: 1px solid #79D3F1; color: white; padding: 10px;">
                                <button class="theme-btn style-one" style="background: #79D3F1; color: #000; border: none; padding: 10px 20px; font-weight: bold;">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget-area pt-100 pb-50">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                    <div class="footer-widget footer-about-widget mb-40" data-aos="fade-up" data-aos-duration="800">
                        <div class="widget-content">
                            <img src="{{ asset('assets/images/newlogo.png') }}" class="mb-25" alt="Logo" style="max-width: 180px;">
                            <p>A1 Dental Clinic offers specialized dental care services with a personalized approach to patient health.</p>
                            <div class="social-box">
                                <a href="https://www.facebook.com/a1dentalclinicofficial" style="color: #79D3F1; margin-right: 15px;"><i class="fab fa-facebook-f"></i></a>
<a href="https://www.instagram.com/a1dental.clinic/" target="_blank" style="color: #79D3F1; margin-right: 15px;">
  <i class="fab fa-instagram"></i>
</a>
 {{-- <a href="#" style="color: #79D3F1; margin-right: 15px;"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" style="color: #79D3F1;"><i class="fab fa-youtube"></i></a> --}}
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-5 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-widget footer-nav-widget mb-40" data-aos="fade-up" data-aos-duration="1000">
                                <h4 class="widget-title" style="color: #79D3F1;">Quick Links</h4>
                                <div class="widget-content">
                                    <ul class="widget-nav" style="list-style: none; padding: 0;">
                                        <li><a href="#home" style="color: #fff; text-decoration: none;">Home</a></li>
                                        <li><a href="#about" style="color: #fff; text-decoration: none;">About Us</a></li>
                                        <li><a href="#services" style="color: #fff; text-decoration: none;">Services</a></li>
                                        <li><a href="#contact" style="color: #fff; text-decoration: none;">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="footer-widget footer-schedule-widget mb-40" data-aos="fade-up" data-aos-duration="1200">
                                <h4 class="widget-title" style="color: #79D3F1;">Schedule</h4>
                                <div class="widget-content" style="display: flex; flex-direction: column; gap: 5px;">
                                    <span>Mon - Thu: 09:00 AM - 06:00 PM</span>
                                    <span>Saturday: 09:00 AM - 06:00 PM</span>
                                    <span>Sunday: Closed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 col-sm-12">
                    <div class="footer-widget footer-contact-info-widget mb-40" data-aos="fade-up" data-aos-duration="1400">
                        <h4 class="widget-title" style="color: #79D3F1;">Contact Info</h4>
                        <div class="widget-content">
                            <div class="medolia-info-box mb-25" style="display: flex; align-items: center; gap: 15px;">
                                <i class="far fa-map-marker-alt" style="color: #79D3F1;"></i>
                                <p style="margin: 0;">Main Touheed Commercial Plot 9C 24 Street Phase 5 DHA Karachi</p>
                            </div>

                            <div class="medolia-info-box mb-25" style="display: flex; align-items: center; gap: 15px;">
                                <i class="far fa-phone-alt" style="color: #79D3F1;"></i>
                                <p style="margin: 0;"><a href="tel:+923302194770" style="color: #fff; text-decoration: none;">+92 330-2194770</a></p>
                            </div>

                            <div class="medolia-info-box" style="display: flex; align-items: center; gap: 15px;">
                                <i class="far fa-envelope" style="color: #79D3F1;"></i>
                                <p style="margin: 0;"><a href="mailto:drbaldev13@gmail.com" style="color: #fff; text-decoration: none;">drbaldev13@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright-area" style="position: relative; z-index: 2; border-top: 1px solid rgba(255,255,255,0.1); padding: 20px 0;">
        <div class="container">
            <div class="copyright-text text-center">
<p>
    © {{ date('Y') }} A1 Dental Clinic Developed by
    <a href="https://weboctane.tech" target="_blank" style="color: #f8c434; text-decoration: none;">
        WebOctane
    </a>
</p>          </div>
        </div>
    </div>
</footer>

{{-- <div class="back-to-top"><i class="far fa-angle-up"></i></div> --}}

<script src="{{ asset('assets/js/plugins/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.waypoints.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/aos.js') }}"></script>
<script src="{{ asset('assets/js/common.js') }}"></script>
<script src="{{ asset('assets/js/home-one.js') }}"></script>


@stack('scripts')

</body>
<script>
   $(document).ready(function() {
    // When the form is submitted
    $('#bookingPageForm').on('submit', function(e) {
        e.preventDefault();  // Prevent the default form submission

        var formData = $(this).serialize();  // Serialize form data

        // Show loading indicator (Optional)
        $('#submitButton').text('Submitting...');  // Targeting the submit button only

        $.ajax({
            url: $(this).attr('action'),  // Use the form action URL
            method: 'POST',
            data: formData,
            success: function(response) {
                if (response.message) {
                    // Show the modal with the thank you message and image
                    $('#thankYouModal').modal('show');  // Show the modal

                    // Clear the form after successful submission
                    $('#bookingPageForm')[0].reset();

                    // Reset the button text
                    $('#submitButton').text('Submit');
                }
            },
            error: function(xhr, status, error) {
                // Handle errors if any
                alert("Something went wrong, please try again.");
                $('#submitButton').text('Submit');
            }
        });
    });
});
</script>

{{-- services --}}
<script>

document.addEventListener('DOMContentLoaded', function() {

    const sliders = document.querySelectorAll('.ba-range-slider');



    sliders.forEach(slider => {

        const container = slider.closest('.before-after-slider');

        const beforeWrapper = container.querySelector('.before-image-wrap');

        const button = container.querySelector('.slider-button');

        const afterImg = container.querySelector('.after-image');



        function setInitialWidth() {

            const containerWidth = container.offsetWidth;

            afterImg.style.width = `${containerWidth}px`;

            beforeWrapper.style.width = `${slider.value}%`;

            button.style.left = `${slider.value}%`;

            // Ensure before image covers the wrapper width

            const beforeImg = beforeWrapper.querySelector('img');

            if (beforeImg) {

                beforeImg.style.width = `${containerWidth}px`;

                beforeImg.style.maxWidth = 'none';

            }

        }



        // Set initial sizes

        setInitialWidth();



        // Update on window resize

        window.addEventListener('resize', () => {

            setInitialWidth();

        });



        slider.addEventListener('input', (e) => {

            const val = e.target.value;

            beforeWrapper.style.width = `${val}%`;

            button.style.left = `${val}%`;

        });

    });

});

</script>
<script>
    // Optional: For custom smooth scrolling behavior
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>
</html>
