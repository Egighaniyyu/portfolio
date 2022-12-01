@extends('layout.master')

@section('title' , 'Home')

@push('top-page-scripts')
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

<!-- splide css -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

<!-- iconify -->
<script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
@endpush

@section('content')
<!-- jumbotron -->
<section id="jumbotron">
    <div class="container">
        <div class="text-header text-center">
            <h1>Turning your idea to</h1>
            <h1><span><img src="assets/images/img-pattern-header.png" alt="img pattern" class="img-header"></span>
                cool product</h1>
            <h5>Hi, I am Egi Ghaniyyu, ui ux designer, has an internship experience in start-up and several
                freelance projects, and right now I am looking forward to collaborate with you!</h5>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image: url('assets/images/bg-card-skill.png');">
                    <div class="skill">
                        <div class="cat-skill gradient-blue">
                            Design
                        </div>
                        <p>UI Designer</p>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('assets/images/bg-card-skill.png');">
                    <div class="skill">
                        <div class="cat-skill gradient-red">
                            Research
                        </div>
                        <p>UX Research</p>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url('assets/images/bg-card-skill.png');">
                    <div class="skill">
                        <div class="cat-skill gradient-green">
                            Coding
                        </div>
                        <p>Web Design</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- quote -->
<section id="quote">
    <div class="content-swipe">
        <img src="assets/images/slide-right-4865791-4082883.gif" alt="swipe" width="32px" height="32px">
        <p>Swipe</p>
    </div>
    <div class="container">
        <h1>Make amazing <span><img src="assets/images/img-pattern-qoute1.png" alt="qoute" class="img-quote"></span>
        </h1>
        <h1>Ideas <span><img src="assets/images/img-pattern-qoute2.png" alt="qoute" class="img-quote"> for
                you</span></h1>
    </div>
</section>

<!-- project -->
<section id="project">
    <div class="container sec-header-project">
        <div class="row d-flex align-items-center">
            <div class="col col-md-6">
                <img src="assets/images/img-pattern-product.png" alt="pattern-produt" class="img-project">
                <h3 class="text-title">Selected project</h3>
            </div>
            <div class="col col-md-6">
                <h2 class="title">Products build to solve problems</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-4 col-sm-12 col-12">
            <a href="#"><img src="assets/images/banner-project.png" class="banner-project" alt="banner-project"></a>
        </div>
        <div class="col col-md-4 col-sm-12 col-12">
            <a href="#"><img src="assets/images/banner-project2.png" class="banner-project" alt="banner-project"></a>
        </div>
        <div class="col col-md-4 col-sm-12 col-12">
            <a href="#"><img src="assets/images/banner-project.png" class="banner-project" alt="banner-project"></a>
        </div>
    </div>
</section>

<!-- testimonials -->
<section id="testimonial">
    <div class="container sec-header-testimonial">
        <div class="row d-flex align-items-center">
            <div class="col col-md-6">
                <img src="assets/images/img-pattern-testimonial.png" alt="pattern-testimonial" class="img-project">
                <h3 class="text-title">Testimonials</h3>
            </div>
            <div class="col col-md-6">
                <h2 class="title">Client kind <br>word</h2>
            </div>
        </div>
    </div>
    <div class="splide" role="group" aria-label="testimonials">
        <div class="splide__track">
            <ul class="splide__list" style="padding-top: 32px !important;">
                <li class="splide__slide">
                    <div class="card-testimonial">
                        <img src="assets/images/user-testimonial.png" alt="user" class="img-testimonial">
                        <p>"Wow is all i can say! egi did an absolute fenominal job from start to finish! He
                            captured and created
                            exactly what I wanted and exceeded my expectation. Highly recommend egi! "</p>
                        <h5>John Doe</h5>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card-testimonial">
                        <img src="assets/images/user-testimonial.png" alt="user" class="img-testimonial">
                        <p>"Wow is all i can say! egi did an absolute fenominal job from start to finish! He
                            captured and created
                            exactly what I wanted and exceeded my expectation. Highly recommend egi! "</p>
                        <h5>John Doe</h5>
                    </div>
                </li>
                <li class="splide__slide">
                    <div class="card-testimonial">
                        <img src="assets/images/user-testimonial.png" alt="user" class="img-testimonial">
                        <p>"Wow is all i can say! egi did an absolute fenominal job from start to finish! He
                            captured and created
                            exactly what I wanted and exceeded my expectation. Highly recommend egi! "</p>
                        <h5>John Doe</h5>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
@endsection

@push('page-scripts')
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        effect: "cards",
        grabCursor: true,
    });
</script>

<!-- splide js -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js">
</script>

<!-- initialize splide -->
<script>
    const splide = new Splide('.splide', {
        type: 'loop',
        drag: 'free',
        arrows: false,
        pagination: false,
        focus: 'center',
        perPage: 3,
        autoScroll: {
            speed: 1,
        },
    });

    splide.mount(window.splide.Extensions);
</script>
@endpush