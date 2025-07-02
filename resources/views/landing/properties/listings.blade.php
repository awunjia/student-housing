@extends('landing.layouts.app')

@section('content')

    <div class="row">

        <!-- Hero Section -->
        <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight"
            style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="overlay-2"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                    <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                        <h1 class="mb-3 bread">Listings</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('landing.index') }}">Home <i
                                        class="ion-ios-arrow-forward"></i></a></span> <span>Listings <i
                                    class="ion-ios-arrow-forward"></i></span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Filter Section -->
        <section class="ftco-section ftco-no-pb">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-wrap-1 ftco-animate">
                            <form action="#" class="search-property-1">
                                <div class="row">
                                    <div class="col-lg align-items-end">
                                        <div class="form-group">
                                            <label for="#">Apartment Location</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="location" id="location" class="form-control">
                                                        <option value="" selected disabled>All Cities</option>
                                                        @foreach ($locations as $location)
                                                            <option value="{{ $location->slug }}">{{ $location->name }}
                                                            </option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg align-items-end">
                                        <div class="form-group">
                                            <label for="#">Apartment Type</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="type" id="type" class="form-control">
                                                        <option value="" selected disabled>All Types</option>
                                                        <option value="shared_apartments">Shared Apartments</option>
                                                        <option value="studios">Studios</option>
                                                        <option value="two_room_apartment">Two Room Apartment</option>
                                                        <option value="three_room_apartment">Three Room Apartment</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg align-items-end">
                                        <div class="form-group">
                                            <label for="#">Min Price</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="min" id="min" class="form-control">
                                                        <option value="" selected disabled>None</option>
                                                        <option value="250">€250</option>
                                                        <option value="300">€300</option>
                                                        <option value="350">€350</option>
                                                        <option value="400">€400</option>
                                                        <option value="450">€450</option>
                                                        <option value="500">€500</option>
                                                        <option value="550">€550</option>
                                                        <option value="600">€600</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg align-items-end">
                                        <div class="form-group">
                                            <label for="#">Max Price</label>
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                    <select name="max" id="max" class="form-control">
                                                        <option value="" selected disabled>None</option>
                                                        <option value="300">€300</option>
                                                        <option value="350">€350</option>
                                                        <option value="400">€400</option>
                                                        <option value="450">€450</option>
                                                        <option value="500">€500</option>
                                                        <option value="550">€550</option>
                                                        <option value="600">€600</option>
                                                        <option value="700">€700</option>
                                                        <option value="800">€800</option>
                                                        <option value="900">€900</option>
                                                        <option value="900">€1000</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg align-self-end">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <input type="submit" value="Search Property"
                                                    class="form-control btn btn-primary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Listing Section -->
        <section class="ftco-section goto-here">
            <div class="container">
                <div class="row">
                    @foreach ($properties as $property)
                        <div class="col-md-4">
                            <div class="property-wrap ftco-animate">
                                <div class="img d-flex align-items-center justify-content-center"
                                    style="background-image: url(images/work-1.jpg);">
                                    <a href="properties-single.html"
                                        class="icon d-flex align-items-center justify-content-center btn-custom">
                                        <span class="ion-ios-link"></span>
                                    </a>
                                    <div class="list-agent d-flex align-items-center">
                                        <a href="#" class="agent-info d-flex align-items-center">
                                            <div class="img-2 rounded-circle"
                                                style="background-image: url(images/person_1.jpg);">
                                            </div>
                                            <h3 class="mb-0 ml-2">Ben Ford</h3>
                                        </a>
                                        <div class="tooltip-wrap d-flex">
                                            <a href="#" class="icon-2 d-flex align-items-center justify-content-center"
                                                data-toggle="tooltip" data-placement="top" title="Bookmark">
                                                <span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
                                            </a>
                                            <a href="#" class="icon-2 d-flex align-items-center justify-content-center"
                                                data-toggle="tooltip" data-placement="top" title="Compare">
                                                <span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="text">
                                    <p class="price mb-3"><span class="orig-price">{{ number_format($property->price, 2) }}
                                            €/kk</span></p>
                                    <h3 class="mb-0"><a href="properties-single.html">{{ $property->title }}</a></h3>
                                    <span class="location d-inline-block mb-3"><i
                                            class="ion-ios-pin mr-2"></i>{{ $property->zipcode }} {{ $property->city }},
                                        {{ $property->address }}</span>
                                    <p>{{ $property->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination Section -->
                <div class="row mt-5">
                    <div class="col text-center">
                        {{ $properties->links('pagination::bootstrap-5') }}
                    </div>
                </div>

            </div>
        </section>
@endsection