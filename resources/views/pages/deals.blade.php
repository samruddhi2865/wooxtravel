@extends('layouts.app')

@section('title', 'Travel Deals')

@section('content')

<!-- Deals Hero Section -->
<div class="page-heading text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h4>Discover Our Offers</h4>

                <h2>Exclusive Travel Deals</h2>

                <p class="mt-3">
                    Explore exciting destinations, discover new experiences,
                    and find the perfect trip for your next adventure.
                </p>

            </div>
        </div>
    </div>
</div>


<!-- Main Deals Section -->
<div class="container py-5">

    <!-- Section Heading -->
    <div class="row mb-5">

        <div class="col-lg-8 mx-auto text-center">

            <span class="text-primary fw-bold">
                EXPLORE &amp; DISCOVER
            </span>

            <h2 class="mt-2">
                Choose Your Perfect Getaway
            </h2>

            <p class="text-muted mt-3">
                From European adventures to tropical holidays,
                explore our featured travel opportunities and
                start planning your next memorable journey.
            </p>

        </div>

    </div>


    <!-- Deal Cards -->
    <div class="row g-4">


        <!-- European Adventure -->
        <div class="col-lg-4 col-md-6">

            <div class="card border-0 shadow-sm h-100 overflow-hidden">

                <!-- Image -->
                <img
                    src="{{ asset('assets/images/heading-bg.jpg') }}"
                    class="card-img-top"
                    alt="European Adventure"
                    style="height: 220px; object-fit: cover;"
                >

                <div class="card-body p-4 d-flex flex-column">

                    <span class="text-primary fw-bold small">
                        FEATURED DESTINATION
                    </span>

                    <h3 class="h4 mt-2">
                        European Adventure
                    </h3>

                    <p class="text-muted">
                        Explore charming cities, historic landmarks,
                        beautiful landscapes, and unforgettable
                        European experiences.
                    </p>

                    <div class="mt-auto">

                        <div class="d-flex align-items-center mb-3">

                            <i class="fa fa-globe text-primary me-2"></i>

                            <span class="text-muted">
                                Europe
                            </span>

                        </div>

                        @auth

                            <a
                                href="{{ route('reservation') }}"
                                class="btn btn-primary w-100"
                            >
                                Book This Trip
                            </a>

                        @else

                            <a
                                href="{{ route('login') }}"
                                class="btn btn-primary w-100"
                            >
                                Login to Book
                            </a>

                        @endauth

                    </div>

                </div>

            </div>

        </div>


        <!-- Asian Escape -->
        <div class="col-lg-4 col-md-6">

            <div class="card border-0 shadow-sm h-100 overflow-hidden">

                <!-- Image -->
                <img
                    src="{{ asset('assets/images/heading-bg.jpg') }}"
                    class="card-img-top"
                    alt="Asian Escape"
                    style="height: 220px; object-fit: cover;"
                >

                <div class="card-body p-4 d-flex flex-column">

                    <span class="text-primary fw-bold small">
                        POPULAR CHOICE
                    </span>

                    <h3 class="h4 mt-2">
                        Asian Escape
                    </h3>

                    <p class="text-muted">
                        Discover vibrant cultures, delicious food,
                        beautiful landscapes, and amazing destinations
                        across Asia.
                    </p>

                    <div class="mt-auto">

                        <div class="d-flex align-items-center mb-3">

                            <i class="fa fa-globe text-primary me-2"></i>

                            <span class="text-muted">
                                Asia
                            </span>

                        </div>

                        @auth

                            <a
                                href="{{ route('reservation') }}"
                                class="btn btn-primary w-100"
                            >
                                Book This Trip
                            </a>

                        @else

                            <a
                                href="{{ route('login') }}"
                                class="btn btn-primary w-100"
                            >
                                Login to Book
                            </a>

                        @endauth

                    </div>

                </div>

            </div>

        </div>


        <!-- Tropical Holiday -->
        <div class="col-lg-4 col-md-6 mx-auto">

            <div class="card border-0 shadow-sm h-100 overflow-hidden">

                <!-- Image -->
                <img
                    src="{{ asset('assets/images/heading-bg.jpg') }}"
                    class="card-img-top"
                    alt="Tropical Holiday"
                    style="height: 220px; object-fit: cover;"
                >

                <div class="card-body p-4 d-flex flex-column">

                    <span class="text-primary fw-bold small">
                        RELAX &amp; RECHARGE
                    </span>

                    <h3 class="h4 mt-2">
                        Tropical Holiday
                    </h3>

                    <p class="text-muted">
                        Relax on beautiful beaches, enjoy peaceful
                        surroundings, and experience a refreshing
                        tropical getaway.
                    </p>

                    <div class="mt-auto">

                        <div class="d-flex align-items-center mb-3">

                            <i class="fa fa-globe text-primary me-2"></i>

                            <span class="text-muted">
                                Tropical Destinations
                            </span>

                        </div>

                        @auth

                            <a
                                href="{{ route('reservation') }}"
                                class="btn btn-primary w-100"
                            >
                                Book This Trip
                            </a>

                        @else

                            <a
                                href="{{ route('login') }}"
                                class="btn btn-primary w-100"
                            >
                                Login to Book
                            </a>

                        @endauth

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Why Book With Us -->
    <div class="row mt-5 pt-5">

        <div class="col-lg-8 mx-auto text-center">

            <span class="text-primary fw-bold">
                TRAVEL WITH CONFIDENCE
            </span>

            <h2 class="mt-2">
                Plan Your Journey With Ease
            </h2>

            <p class="text-muted mt-3">
                Discover destinations, explore travel opportunities,
                and manage your reservations through a simple
                and convenient experience.
            </p>

        </div>

    </div>


    <!-- Benefits -->
    <div class="row g-4 mt-4">


        <!-- Destination -->
        <div class="col-lg-4 col-md-6">

            <div class="bg-white rounded shadow-sm p-4 text-center h-100">

                <div
                    class="mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 65px; height: 65px;"
                >
                    <i class="fa fa-map-marker fa-lg"></i>
                </div>

                <h4>
                    Amazing Destinations
                </h4>

                <p class="text-muted mb-0">
                    Discover beautiful destinations and
                    find inspiration for your next adventure.
                </p>

            </div>

        </div>


        <!-- Easy Booking -->
        <div class="col-lg-4 col-md-6">

            <div class="bg-white rounded shadow-sm p-4 text-center h-100">

                <div
                    class="mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 65px; height: 65px;"
                >
                    <i class="fa fa-calendar fa-lg"></i>
                </div>

                <h4>
                    Easy Reservations
                </h4>

                <p class="text-muted mb-0">
                    Choose your destination and make
                    your reservation through a simple process.
                </p>

            </div>

        </div>


        <!-- Dashboard -->
        <div class="col-lg-4 col-md-6 mx-auto">

            <div class="bg-white rounded shadow-sm p-4 text-center h-100">

                <div
                    class="mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 65px; height: 65px;"
                >
                    <i class="fa fa-dashboard fa-lg"></i>
                </div>

                <h4>
                    Manage Your Trips
                </h4>

                <p class="text-muted mb-0">
                    Logged-in travelers can view their reservations
                    and upcoming trips from the dashboard.
                </p>

            </div>

        </div>

    </div>


    <!-- Call To Action -->
    <div class="row mt-5 pt-4">

        <div class="col-lg-10 mx-auto">

            <div
                class="bg-primary text-white rounded p-5 text-center shadow-sm"
            >

                <h2 class="text-white">
                    Ready for Your Next Adventure?
                </h2>

                <p class="mt-3 mb-4">
                    Choose a destination and start planning
                    your next unforgettable journey.
                </p>

                @auth

                    <a
                        href="{{ route('reservation') }}"
                        class="btn btn-light"
                    >
                        Make a Reservation
                    </a>

                @else

                    <a
                        href="{{ route('login') }}"
                        class="btn btn-light me-2"
                    >
                        Login
                    </a>

                    <a
                        href="{{ route('register') }}"
                        class="btn btn-outline-light"
                    >
                        Create Account
                    </a>

                @endauth

            </div>

        </div>

    </div>

</div>

@endsection