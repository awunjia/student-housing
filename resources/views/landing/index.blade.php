@extends('landing.layouts.app')

@section('content')

<!-- Hero Section -->
<div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="overlay-2"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
            <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
                <div class="text text-center w-100">
                    <h1 class="mb-4 fw-bold">Find Student Housing <br>For Convinient Studies</h1>
                    <p><a href="#" class="btn btn-primary py-3 px-4">Search Housing</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="mouse">
        <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
        </a>
    </div>
</div>

<!-- Welcome Section -->
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center">
                <h2 class="mb-4">Welcome to StudentHousing</h2>
                <p class="lead">
                    Discover your perfect home with our comprehensive listings, tailored services, and seamless booking
                    options. The Student Housing in Finalan offers different kind of apartments
                    depending on the student's life situation. We offer shared apartments, studios, two-room and
                    three-room apartments on a close distance to the schools. We offer high quality student housing –
                    easily, reliably and affordably.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Get Started Section -->
<section class="ftco-section ftco-fullwidth">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Services</span>
                <h2 class="mb-2">Get Started</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid px-0">
        <div class="row d-md-flex text-wrapper align-items-stretch">
            <div class="one-half mb-md-0 mb-4 img d-flex align-self-stretch"
                style="background-image: url('images/about.jpg');"></div>
            <div class="one-half half-text d-flex justify-content-end align-items-center">
                <div class="text-inner pl-md-5">
                    <div class="row d-flex">

                        <!-- Step 1: Browse Apartments -->
                        <div class="col-md-12 d-flex align-self-stretch ftco-animate mb-4">
                            <div class="media block-6 services-wrap d-flex">
                                <div class="icon d-flex justify-content-center align-items-center fs-2 text-white">
                                    <i class="bi bi-building"></i>
                                </div>
                                <div class="media-body pl-4 ms-3">
                                    <h3>Browse Apartments</h3>
                                    <p>Choose from a vast selection of apartments that suit your needs and location.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 2: Apply Online -->
                        <div class="col-md-12 d-flex align-self-stretch ftco-animate mb-4">
                            <div class="media block-6 services-wrap d-flex">
                                <div class="icon d-flex justify-content-center align-items-center fs-2 text-white">
                                    <i class="bi bi-file-earmark-text"></i>
                                </div>
                                <div class="media-body pl-4 ms-3">
                                    <h3>Apply Online</h3>
                                    <p>Submit your application easily through our secure online platform.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: Make Payment -->
                        <div class="col-md-12 d-flex align-self-stretch ftco-animate mb-4">
                            <div class="media block-6 services-wrap d-flex">
                                <div class="icon d-flex justify-content-center align-items-center fs-2 text-white">
                                    <i class="bi bi-credit-card"></i>
                                </div>
                                <div class="media-body pl-4 ms-3">
                                    <h3>Make Payment</h3>
                                    <p>Pay your rent or deposits quickly and securely with online banking.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Step 4: Book Laundry -->
                        <div class="col-md-12 d-flex align-self-stretch ftco-animate mb-4">
                            <div class="media block-6 services-wrap d-flex">
                                <div class="icon d-flex justify-content-center align-items-center fs-2 text-white">
                                    <i class="bi bi-calendar-check"></i>
                                </div>
                                <div class="media-body pl-4 ms-3">
                                    <h3>Book Facilities</h3>
                                    <p>Reserve laundry facilities, sauna or event halls conveniently at your preferred
                                        time.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="ftco-counter ftco-section img" id="section-counter">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="305">0</strong>
                        <span>Area <br>Population</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="1090">0</strong>
                        <span>Total <br>Properties</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="209">0</strong>
                        <span>Average <br>House</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="67">0</strong>
                        <span>Total <br>Branches</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Apartments Section -->
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Find Apartments</span>
                <h2 class="mb-2">Find Apartments Near You</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end"
                    style="background-image: url(images/listing-1.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span
                                class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end"
                    style="background-image: url(images/listing-2.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span
                                class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end"
                    style="background-image: url(images/listing-3.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span
                                class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end"
                    style="background-image: url(images/listing-4.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span
                                class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end"
                    style="background-image: url(images/listing-5.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span
                                class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="listing-wrap img rounded d-flex align-items-end"
                    style="background-image: url(images/listing-6.jpg);">
                    <div class="location">
                        <span class="rounded">New York, USA</span>
                    </div>
                    <div class="text">
                        <h3><a href="#">100 Property Listing</a></h3>
                        <a href="#" class="btn-link">See All Listing <span
                                class="ion-ios-arrow-round-forward"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">News</span>
                <h2>Latest News</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_1.jpg');">
                        </a>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">October 17, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_2.jpg');">
                        </a>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">October 17, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_3.jpg');">
                        </a>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">October 17, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url('images/image_4.jpg');">
                        </a>
                        <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        <div class="meta mb-3">
                            <div><a href="#">October 17, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-3">Happy Clients</h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia
                                    and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function () {
        $('.news-carousel').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            dots: false,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 4 }
            }
        });
    });
</script>