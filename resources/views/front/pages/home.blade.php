@extends('front.layout.main')

@push('custom-style')
    <link rel="stylesheet" href="{{asset('front-assets/css/custom.css')}}">
@endpush

@section('content')
    <!-- ...::: Start Hero Section :::... -->
    <div class="hero-section section-dark-blue-bg" id="home">
        <div class="hero-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7">
                        <div class="hero-content">
                            <h3 class="title-big">Hello! I’m</h3>
                            <h2 class="title-large">Abdullah <span class="shape-mark">Iftikhar</span></h2>
                            <p>A Top Rated FULL Stack & TALL Stack Developer</p>

                            <a href="#footer" class="btn btn-xl btn-outline-one icon-space-left">
                                Get Contact
                            </a>

                            <div class="video-link">
                                <a class="wave-btn"
                                   href="https://www.youtube.com/watch?v=F7zVhS2dmPE&ab_channel=AbdullahIftikhar"
                                   data-autoplay="true"
                                   data-vbtype="video">
                                    <div class="ripple"><i class="icofont-ui-play"></i></div>
                                </a>
                                <span class="video-text">Watch Video</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-shape hero-top-shape">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="hero-shape hero-bottom-shape">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="hero-portrait">
                <div class="image">
                    <img class="img-fluid" src="{{asset('front-assets/images/portrait/portrait-hero.png')}}" alt="">

                    <div class="image-half-round-shape"></div>
                    <div class="social-link">
                        <a href="https://www.upwork.com/freelancers/~01ccc827e449d96028" target="_blank">
                            <small class="upwork-font">Upwork</small></a>
                        <a href="https://github.com/Abdullah-Iftikhar" target="_blank"><i
                                class="icofont-github"></i></a>
                        <a href="mailto:abdullah.laraveldev@gmail.com"><i class="icofont-email"></i></a>
                        <a href="https://www.linkedin.com/in/abdullah-iftikhar-kamboh/" target="_blank"><i
                                class="icofont-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ...::: End Hero Section :::... -->

    <!-- ...::: Start Service Display Section :::... -->
    <div class="service-display-section section-gap-tb-165 pos-relative" id="services">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start Section Content -->
                    <div class="section-content">
                        <span class="section-tag">My Services</span>
                        <h2 class="section-title">Service Provide For My Clients.</h2>
                    </div>
                    <!-- End Section Content -->
                </div>
            </div>
        </div>

        <!-- Start Service Section Wrapper -->
        <div class="service-display-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="service-display-slider">
                            <!-- Slider main container -->
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <!-- Start Service Box Single Item -->
                                    <div class="service-box-single-item swiper-slide">
                                        <div class="inner-shape inner-shape-top-right"></div>
                                        <div class="icon"><img
                                                src="{{asset('front-assets/images/icon/service-icon-2.png')}}" alt="">
                                        </div>
                                        <h4 class="title"><a href="#">Full Stack Development</a></h4>
                                        <ul class="list-item">
                                            <li>Laravel</li>
                                            <li>Vue.js</li>
                                            <li>React.js</li>
                                            <li>JS, JQuery</li>
                                            <li>Html, Css, Bootstrap</li>
                                            <li>MySql, PgSql, SqLite, Firebase/Firestore</li>
                                        </ul>
                                        <div class="inner-shape inner-shape-bottom-right"></div>
                                    </div>
                                    <!-- End Service Box Single Item -->
                                    <!-- Start Service Box Single Item -->
                                    <div class="service-box-single-item swiper-slide">
                                        <div class="inner-shape inner-shape-top-right"></div>
                                        <div class="icon"><img
                                                src="{{asset('front-assets/images/icon/service-icon-2.png')}}" alt="">
                                        </div>
                                        <h4 class="title"><a href="#">TALL Stack Development</a></h4>
                                        <ul class="list-item">
                                            <li>Laravel</li>
                                            <li>Livewire</li>
                                            <li>Tailwind.css</li>
                                            <li>Alpine.js</li>
                                            <li>Html, Css</li>
                                            <li>MySql, PgSql, SqLite, Firebase/Firestore</li>
                                        </ul>
                                        <div class="inner-shape inner-shape-bottom-right"></div>
                                    </div>
                                    <!-- End Service Box Single Item -->

                                    <div class="service-box-single-item swiper-slide">
                                        <div class="inner-shape inner-shape-top-right"></div>
                                        <div class="icon"><img
                                                src="{{asset('front-assets/images/icon/service-icon-2.png')}}" alt="">
                                        </div>
                                        <h4 class="title"><a href="#">Front End Development</a></h4>
                                        <ul class="list-item">
                                            <li>Html, Css, Bootstrap</li>
                                            <li>Vue.js</li>
                                            <li>React.js</li>
                                            <li>Tailwind.css</li>
                                            <li>Alpine.js</li>
                                            <li>JS, JQuery</li>
                                        </ul>
                                        <div class="inner-shape inner-shape-bottom-right"></div>
                                    </div>

                                    <!-- Start Service Box Single Item -->
                                    <div class="service-box-single-item swiper-slide">
                                        <div class="inner-shape inner-shape-top-right"></div>
                                        <div class="icon"><img
                                                src="{{asset('front-assets/images/icon/service-icon-2.png')}}" alt="">
                                        </div>
                                        <h4 class="title"><a href="#">Back End Development</a></h4>
                                        <ul class="list-item">
                                            <li>Laravel</li>
                                            <li>MySql, PgSql, SqLite, Firebase/Firestore</li>
                                        </ul>
                                        <div class="inner-shape inner-shape-bottom-right"></div>
                                    </div>
                                    <!-- End Service Box Single Item -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="service-display-dots">
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- End Service Section Wrapper -->
    </div>
    <!-- ...::: End Service Display Section :::... -->

    <!-- ...::: Start Skill Display Section :::... -->
    <div class="skill-display-section section-gap-tb-165 section-bg pos-relative" id="skills">
        <div class="skill-display-section-box">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-xxl-5">
                        <!-- Start Section Content -->
                        <div class="section-content">
                            <span class="section-tag">Special Expertise</span>
                            <h2 class="section-title">My Special Skill Field Here.</h2>
                            <a href="https://www.upwork.com/freelancers/~01ccc827e449d96028" target="_blank"
                               class="btn btn-xl btn-outline-one icon-space-left">
                                Hire Me<i class="icofont-double-right"></i></a>
                        </div>
                        <!-- End Section Content -->
                    </div>

                    <div class="col-xl-6 col-xxl-6 offset-xxl-1">
                        <!-- Start Skill Display Wrapper -->
                        <div class="skill-display-wrapper">
                            <!-- Start Skill Progress Single Item -->
                            <div class="skill-progress-single-item">
                                <span class="tag">Communication</span>
                                <div class="skill-box">
                                    <div class="progress-line" data-width="75">
                                        <span class="skill-percentage">75%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ENd Skill Progress Single Item -->
                            <!-- Start Skill Progress Single Item -->
                            <div class="skill-progress-single-item">
                                <span class="tag">Leadership</span>
                                <div class="skill-box">
                                    <div class="progress-line" data-width="70">
                                        <span class="skill-percentage">70%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ENd Skill Progress Single Item -->
                            <!-- Start Skill Progress Single Item -->
                            <div class="skill-progress-single-item">
                                <span class="tag">Teamwork</span>
                                <div class="skill-box">
                                    <div class="progress-line" data-width="90">
                                        <span class="skill-percentage">90%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ENd Skill Progress Single Item -->
                            <!-- Start Skill Progress Single Item -->
                            <div class="skill-progress-single-item">
                                <span class="tag">Flexibility</span>
                                <div class="skill-box">
                                    <div class="progress-line" data-width="80">
                                        <span class="skill-percentage">80%</span>
                                    </div>
                                </div>
                            </div>
                            <!-- ENd Skill Progress Single Item -->
                        </div>
                        <!-- End Skill Display Wrapper -->
                    </div>
                </div>
            </div>
        </div>
        <div class="skill-display-shape"></div>
    </div>
    <!-- ...::: End Skill Display Section :::... -->

    <!-- ...::: Start Counter Display Section :::... -->
    <div class="counter-display-section section-gap-tb-165 section-bg-2" id="stats">
        <div class="counter-display-wrapper">
            <div class="container">
                <div class="row justify-content-center justify-content-sm-start">
                    <div class="d-block d-md-flex justify-content-md-start col-12 col-sm-4 col-md-4">
                        <!-- Start Counterup Single Item -->
                        <div class="counterup-single-item">
                            <div class="icon">
                                <img src="{{asset('front-assets/images/icon/counterup-icon-1.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h2 class="number"><span class="counter">38</span>+</h2>
                                <span class="text">Happy Clients</span>
                            </div>
                        </div>
                        <!-- End Counterup Single Item -->
                    </div>
                    <div class="d-block d-md-flex justify-content-md-center col-12 col-sm-4 col-md-4">
                        <!-- Start Counterup Single Item -->
                        <div class="counterup-single-item">
                            <div class="icon">
                                <img src="{{asset('front-assets/images/icon/counterup-icon-2.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h2 class="number"><span class="counter">20</span>+</h2>
                                <span class="text">Project Complete</span>
                            </div>
                        </div>
                        <!-- End Counterup Single Item -->
                    </div>
                    <div class="d-block d-md-flex justify-content-md-end col-12 col-sm-4 col-md-4">
                        <!-- Start Counterup Single Item -->
                        <div class="counterup-single-item">
                            <div class="icon">
                                <img src="{{asset('front-assets/images/icon/counterup-icon-3.png')}}" alt="">
                            </div>
                            <div class="content">
                                <h2 class="number"><span class="counter">5</span>+</h2>
                                <span class="text">Years of Experience</span>
                            </div>
                        </div>
                        <!-- End Counterup Single Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ...::: End Counter Display Section :::... -->

    <!-- ...::: Start Project Display Section :::... -->
    <div class="project-display-section section-gap-tb-165" id="portfolio">
        <div class="project-display-box">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-12 d-block d-md-flex justify-content-between">
                        <!-- Start Section Content -->
                        <div class="section-content pos-relative">
                            <span class="section-tag">Awesome Portfolio</span>
                            <h2 class="section-title">My Complete Projects</h2>
                        </div>
                        <!-- End Section Content -->

                        <div class="default-nav-style mt-6 mb-6 mb-md-0 ">
                            <!-- If we need navigation buttons -->
                            <div class="slider-button button-prev"><i class="icofont-double-left"></i></div>
                            <div class="slider-button button-next"><i class="icofont-double-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-display-wrapper">
                <div class="project-display-slider">
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            <!-- Start Project Box Single Item -->
                            <div class="project-box-single-item swiper-slide">
                                <div class="img-box">
                                    <div class="bg-overlay"></div>
                                    <div class="bg-image">
                                        <img src="{{asset('front-assets/images/project/project-slider-img-1.jpg')}}"
                                             alt="">
                                    </div>
                                    <div class="image">
                                        <img src="{{asset('front-assets/images/project/project-slider-img-1.jpg')}}"
                                             alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="project-details.html">Givest - Non Profit PSD
                                            Template</a></h4>

                                    <ul class="catagory-nav-item">
                                        <li><a href="#">Chairty</a></li>
                                        <li><a href="#">Fund Rising</a></li>
                                        <li><a href="#">Non Profit</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Project Box Single Item -->
                            <!-- Start Project Box Single Item -->
                            <div class="project-box-single-item swiper-slide">
                                <div class="img-box">
                                    <div class="bg-overlay"></div>
                                    <div class="bg-image">
                                        <img src="{{asset('front-assets/images/project/project-slider-img-2.jpg')}}"
                                             alt="">
                                    </div>
                                    <div class="image">
                                        <img src="{{asset('front-assets/images/project/project-slider-img-2.jpg')}}"
                                             alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="project-details.html">Musion - Gardening Website
                                            Template</a></h4>

                                    <ul class="catagory-nav-item">
                                        <li><a href="#">Gardeining</a></li>
                                        <li><a href="#">Landscaping</a></li>
                                        <li><a href="#">Greem</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Project Box Single Item -->
                            <!-- Start Project Box Single Item -->
                            <div class="project-box-single-item swiper-slide">
                                <div class="img-box">
                                    <div class="bg-overlay"></div>
                                    <div class="bg-image">
                                        <img src="{{asset('front-assets/images/project/project-slider-img-3.jpg')}}"
                                             alt="">
                                    </div>
                                    <div class="image">
                                        <img src="{{asset('front-assets/images/project/project-slider-img-3.jpg')}}"
                                             alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="project-details.html">SEOLLY - SEO Marketing & Digital
                                            Agency</a></h4>

                                    <ul class="catagory-nav-item">
                                        <li><a href="#">Chairty</a></li>
                                        <li><a href="#">Fund Rising</a></li>
                                        <li><a href="#">Non Profit</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Project Box Single Item -->
                            <!-- Start Project Box Single Item -->
                            <div class="project-box-single-item swiper-slide">
                                <div class="img-box">
                                    <div class="bg-overlay"></div>
                                    <div class="bg-image">
                                        <img src="{{asset('front-assets/images/project/project-slider-img-4.jpg')}}"
                                             alt="">
                                    </div>
                                    <div class="image">
                                        <img src="{{asset('front-assets/images/project/project-slider-img-4.jpg')}}"
                                             alt="">
                                    </div>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="project-details.html">Virtuf - Creative Agency Bootstrap
                                            5 Template</a></h4>

                                    <ul class="catagory-nav-item">
                                        <li><a href="#">Gardeining</a></li>
                                        <li><a href="#">Landscaping</a></li>
                                        <li><a href="#">Greem</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End Project Box Single Item -->
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ...::: End Project Display Section :::... -->

    <!-- ...::: Start Testimonial Display Section :::... -->
    <div class="testimonial-display-section section-gap-tb-165 section-bg" id="testimonials">
        <div class="testimonial-display-box d-flex flex-column align-items-center d-xl-block pos-relative">
            <div class="container overflow-hidden">
                <div class="row">
                    <div class="col d-xl-flex justify-content-xl-end">
                        <!-- Start Section Content -->
                        <div class="section-content pos-relative">
                            <span class="section-tag">Testimonial</span>
                            <h2 class="section-title">Satisfied Clients Say</h2>
                        </div>
                        <!-- End Section Content -->
                    </div>
                </div>

                <div class="testimonial-display-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-display-slider">
                                <!-- Swiper -->
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <!-- Start testimonial Slider Single Item -->
                                        <div class="testimonial-slider-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="content">
                                                <span class="icon">“</span>
                                                <p class="text">
                                                    Super responsive, work in an organized and pedagogical way. It is
                                                    also quick and concise. I highly recommend.
                                                    for my part, I will commission him for the next mission
                                                </p>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4 class="name">Yann Nabis</h4>
                                                        <span class="designation">France</span>
                                                    </div>
                                                    <ul class="review">
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        {{--                                                        <li class="blank"><i class="icofont-star"></i></li>--}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End testimonial Slider Single Item -->

                                        <div class="testimonial-slider-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="content">
                                                <span class="icon">“</span>
                                                <p class="text">
                                                    Great guy and great developer. I will work with him again.
                                                </p>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4 class="name">Nenad Jovanovic</h4>
                                                        <span class="designation">United States</span>
                                                    </div>
                                                    <ul class="review">
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="content">
                                                <span class="icon">“</span>
                                                <p class="text">
                                                    It was great working with Abdullah! I will absolutely work with him
                                                    again once my time allows and projects pick up.
                                                </p>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4 class="name">Steve Damon</h4>
                                                        <span class="designation">United States</span>
                                                    </div>
                                                    <ul class="review">
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="content">
                                                <span class="icon">“</span>
                                                <p class="text">Very responsive and kind and worked with me to
                                                    understand portal requirements and technology. Very nice gentleman.
                                                    Accommodating
                                                    with good communication. Quick turnaround.</p>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4 class="name">Hannah Pastrano</h4>
                                                        <span class="designation">United States</span>
                                                    </div>
                                                    <ul class="review">
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="content">
                                                <span class="icon">“</span>
                                                <p class="text">Great work was done by Abdullah... He is very
                                                    professional and has a deep understanding of web development. Work
                                                    was delivered on time. Will continue to use him for future work!</p>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4 class="name">Haroon Chaudhary</h4>
                                                        <span class="designation">United States</span>
                                                    </div>
                                                    <ul class="review">
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="content">
                                                <span class="icon">“</span>
                                                <p class="text">
                                                    Abdullah is a very talented and honest man. He delivers the project
                                                    on time. I feel proud to work again with him, highly recommended.
                                                </p>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4 class="name">Irene Johns</h4>
                                                        <span class="designation">Australia</span>
                                                    </div>
                                                    <ul class="review">
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="content">
                                                <span class="icon">“</span>
                                                <p class="text">
                                                    He is well skilled developer and his communication skills are good
                                                    too.
                                                </p>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4 class="name">Ahmad</h4>
                                                        <span class="designation">Bangladesh</span>
                                                    </div>
                                                    <ul class="review">
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="testimonial-slider-single-item swiper-slide">
                                            <div class="inner-shape inner-shape-top-right"></div>
                                            <div class="content">
                                                <span class="icon">“</span>
                                                <p class="text">
                                                    Abdullah is easily the best hire I've ever had on UPWORK. I brought
                                                    him for a web application for a chemical company. It was a job that
                                                    2 people had tried and failed to do and he did it perfectly!
                                                </p>
                                                <div class="info">
                                                    <div class="author">
                                                        <h4 class="name">Piyush Sawant</h4>
                                                        <span class="designation">United Arab Emirates</span>
                                                    </div>
                                                    <ul class="review">
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                        <li class="fill"><i class="icofont-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="default-nav-style mt-5 mt-xl-0">
                <!-- If we need navigation buttons -->
                <div class="slider-button button-prev"><i class="icofont-double-left"></i></div>
                <div class="slider-button button-next"><i class="icofont-double-right"></i></div>
            </div>
        </div>
    </div>
    <!-- ...::: End Testimonial Display Section :::... -->
@endsection
