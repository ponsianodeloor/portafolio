<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$user->name}} - {{$user->about->about}}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio - v3.7.0
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{asset($profile->url_photo)}}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">{{$profile->user->name}}</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="{{$profile->url_linkedin}}" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                <a href="{{$profile->url_github}}" class="github" target="_blank"><i class="bx bxl-github"></i></a>
                <a href="{{$profile->url_twitter}}" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
            </div>
        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Profile</span></a></li>
                <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
                <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex flex-column justify-content-center align-items-center" style='background: url("{{asset($profile->url_photo_background)}}") top center;'>
    <div class="hero-container" data-aos="fade-in">
        <h1>{{$profile->user->name}}</h1>
        <p>{{$profile->slogan}} <span class="typed small" data-typed-items="{{$profile->slogan_dynamic}}"></span></p>
        <p>{{$profile->message}}</p>
        <a href="{{route('login.facebook')}}" class="btn btn-primary bi bi-facebook"> Login With Facebook</a>
        <a href="{{route('login.google')}}" class="btn btn-danger bi bi-google"> Login With Google</a>
        <a href="{{route('login.github')}}" class="btn btn-light bi bi-github"> Login With GitHub</a>
        <p>&nbsp;</p>
        <p>This site was developed in Laravel 9</p>

        <div
            class="fb-like"
            data-share="true"
            data-width="450"
            data-show-faces="true">
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title">
                <h2>About</h2>
                <p>{{$about->about}}</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{asset($profile->url_photo)}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3>{{$about->who_are_you}}</h3>
                    <p class="fst-italic">
                       {{$about->short_description}}
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$about->date_of_birth}}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span> <a href="{{$about->website}}" target="_blank">Personal URL</a></span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{$about->phone}}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$about->city}}</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$edad}}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{$about->degree}}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$about->user->email}}</span></li>
                                <li><i class="bi bi-chevron-right"></i> <strong>Status:</strong> <span>{{$about->status}}</span></li>
                            </ul>
                        </div>
                    </div>
                    <p>
                        {{$about->description}}
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
        <div class="container">

            <div class="section-title">
                <h2>Facts</h2>
                <p>{{$about->facts_description}}</p>
            </div>

            <div class="row no-gutters">

                @foreach($facts as $fact)
                    <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                        <div class="count-box">
                            <i class="{{$fact->icon}}"></i>
                            <span data-purecounter-start="0" data-purecounter-end="{{$fact->many}}" data-purecounter-duration="1" class="purecounter"></span>
                            <p><strong>{{$fact->fact}}</strong> {{$fact->short_description}}</p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Skills</h2>
                <p>{{$about->skills_description}}</p>
            </div>

            <div class="row skills-content">

                @foreach($skills as $skill)
                    <div class="col-lg-6" data-aos="fade-up">
                        <div class="progress">
                            <span class="skill">{{$skill->skill}} <i class="val">{{$skill->percent}}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->percent}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2>Resume</h2>
                <p>{{$resume->resume}}</p>
            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Sumary</h3>
                    <div class="resume-item pb-0">
                        <h4>{{$resume->user->name}}</h4>
                        <p><em>{{$resume->sumary}}</em></p>
                        <ul>
                            <li>{{$resume->address}}</li>
                            <li>{{$about->phone}}</li>
                            <li>{{$resume->user->email}}</li>
                        </ul>
                    </div>

                    <h3 class="resume-title">Education</h3>
                    @foreach($educations as $education)
                        <div class="resume-item">
                            <h4>{{$education->title}}</h4>
                            <h5>From: {{$education->date_start}}, to: {{$education->date_end}}</h5>
                            <p><em>{{$education->educational_institution}}, {{$education->city}}</em></p>
                            <p>{{$education->description}}</p>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Professional Experience {{$time_professional_experiences}}</h3>
                    @foreach($professional_experiences as $professional_experience)
                        <div class="resume-item">
                            <h4>{{$professional_experience->position}}</h4>
                            @php
                                $fecha_inicial = new DateTime($professional_experience->date_start);
                                $fecha_final = new DateTime($professional_experience->date_end.' + 1 days');
                                $diff = $fecha_final->diff($fecha_inicial)
                            @endphp
                            <h5>
                                From {{$professional_experience->date_start}},
                                to: {{$professional_experience->date_end}},

                                @if($diff->format('%y') == 0)
                                    {{$diff->format('%m m')}}
                                @elseif($diff->format('%y') == 1 && $diff->format('%m') == 0)
                                    {{$diff->format('%y year')}}
                                @elseif($diff->format('%y') == 1 && $diff->format('%m') > 0)
                                    {{$diff->format('%y year %m m')}}
                                @elseif($diff->format('%y') > 1 && $diff->format('%m') == 0)
                                    {{$diff->format('%y years')}}
                                @else
                                    {{$diff->format('%y years %m m')}}
                                @endif
                            </h5>
                            <p><em>{{$professional_experience->city}} </em></p>
                            <ul>
                                <li>
                                    {{$professional_experience->description}}
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Portfolio</h2>
                <p>
                    {{$portfolio->description}}
                </p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach($project_categories as $project_category)
                            <li data-filter=".filter-{{strtolower($project_category->project_category)}}">
                                {{$project_category->project_category}}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
                @foreach($portfolio->projects as $project)
                    @foreach($project->images as $images)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-{{strtolower($project->category->project_category)}}">
                            <div class="portfolio-wrap">
                                <img src="{{asset($images->url_image)}}" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="{{asset($images->url_image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$project->project}} {{$images->title}}"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Services</h2>
                <p>{{$service->description}}</p>
            </div>
            <div class="row">
                @foreach($service->types as $type_service)
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                        <div class="icon"><i class="bi bi-{{$type_service->icon}}"></i></div>
                        <h4 class="title"><a href="">{{$type_service->title}}</a></h4>
                        <p class="description">{{$type_service->short_description}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
        <div class="container">
            <div class="section-title">
                <h2>Testimonials</h2>
                <p>{{$user->testimonial->description}}</p>
            </div>
            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach($user->testimonial->personalReferences as $personal_references)
                        <div class="swiper-slide">
                            <div class="testimonial-item" data-aos="fade-up">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    {{$personal_references->testimonial}}
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                @foreach($personal_references->images as $images_personal_references)
                                <img src="{{asset($images_personal_references->url_image)}}" class="testimonial-img" alt="">
                                @endforeach
                                <h3>{{$personal_references->name}}</h3>
                                <h4>{{$personal_references->position}} - {{$personal_references->company}}</h4>
                            </div>
                        </div><!-- End testimonial item -->
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>{{$user->contact->description}}</p>
            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p>{{$user->resume->address}}</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>{{$user->email}}</p>
                        </div>

                        <div class="phone">
                            <a href="https://wa.me/593968894134?text=Hola%20nos%20gustaria%20ponernos%20en%20contacto%20contigo,%20hemos%20visto%20tu%20portfolio%20y%20quisieramos%20contar%20con%20tus%20servicios" target="_blank" ><i class="bi bi-phone"></i></a>

                            <h4>Call - WhatsApp:</h4>
                            <p>
                                <a href="https://wa.me/593968894134?text=Hola%20nos%20gustaria%20ponernos%20en%20contacto%20contigo,%20hemos%20visto%20tu%20portfolio%20y%20quisieramos%20contar%20con%20tus%20servicios" target="_blank">{{$user->about->phone}}</a>

                            </p>
                        </div>

                        <iframe src="{{$user->contact->url_google_maps}}" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{route('mail.send')}}" method="post" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="10" required></textarea>
                        </div>

                        <div class="text-center">
                            <input type="submit" value="Send Message" class="form-control btn-primary rounded-3">
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/typed.js/typed.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '772677743961161',
            xfbml      : true,
            version    : 'v15.0'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>


</body>

</html>
