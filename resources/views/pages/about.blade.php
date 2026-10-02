@extends('layouts.app')

@section('title', 'About Us')

@section('content')

<!-- About Hero Section -->
<div class="page-heading text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Discover More About Us</h4>
                <h2>About WoOx Travel</h2>

                <p class="mt-3">
                    Your journey begins with discovering amazing destinations,
                    unforgettable experiences, and exciting travel opportunities.
                </p>
            </div>
        </div>
    </div>
</div>


<!-- About Content -->
<div class="container py-5">

    <div class="row align-items-center g-5">

        <!-- Left Content -->
        <div class="col-lg-6">

            <div class="mb-4">

                <span class="text-primary fw-bold">
                    ABOUT WO OX TRAVEL
                </span>

                <h2 class="mt-2">
                    Explore the World With Us
                </h2>

            </div>

            <p class="text-muted">
                WoOx Travel is designed to make your travel planning
                simple, convenient, and enjoyable. Discover beautiful
                destinations, explore exciting travel opportunities,
                and plan your next unforgettable journey.
            </p>

            <p class="text-muted">
                Whether you are looking for an adventurous escape,
                a relaxing holiday, or a cultural experience, our
                platform helps you explore destinations and make
                your travel plans with ease.
            </p>

            <div class="mt-4">

                <a
                    href="{{ route('deals') }}"
                    class="btn btn-primary me-2"
                >
                    Explore Deals
                </a>

                @auth

                    <a
                        href="{{ route('reservation') }}"
                        class="btn btn-outline-primary"
                    >
                        Make a Reservation
                    </a>

                @else

                    <a
                        href="{{ route('login') }}"
                        class="btn btn-outline-primary"
                    >
                        Login to Book
                    </a>

                @endauth

            </div>

        </div>


        <!-- Right Feature Card -->
        <div class="col-lg-6">

            <div class="bg-white rounded shadow-sm p-4">

                <div class="mb-4">

                    <h3 class="mb-2">
                        Why Choose WoOx Travel?
                    </h3>

                    <p class="text-muted">
                        Everything you need to plan your next trip
                        in one simple place.
                    </p>

                </div>


                <!-- Feature 1 -->
                <div class="d-flex mb-4">

                    <div
                        class="flex-shrink-0 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 50px; height: 50px;"
                    >
                        <i class="fa fa-globe"></i>
                    </div>

                    <div class="ms-3">

                        <h5 class="mb-1">
                            Discover Destinations
                        </h5>

                        <p class="text-muted mb-0">
                            Explore beautiful destinations and
                            discover new places around the world.
                        </p>

                    </div>

                </div>


                <!-- Feature 2 -->
                <div class="d-flex mb-4">

                    <div
                        class="flex-shrink-0 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 50px; height: 50px;"
                    >
                        <i class="fa fa-tags"></i>
                    </div>

                    <div class="ms-3">

                        <h5 class="mb-1">
                            Exciting Travel Deals
                        </h5>

                        <p class="text-muted mb-0">
                            Find exciting travel opportunities
                            and choose the destination that
                            suits your plans.
                        </p>

                    </div>

                </div>


                <!-- Feature 3 -->
                <div class="d-flex">

                    <div
                        class="flex-shrink-0 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                        style="width: 50px; height: 50px;"
                    >
                        <i class="fa fa-calendar"></i>
                    </div>

                    <div class="ms-3">

                        <h5 class="mb-1">
                            Easy Reservations
                        </h5>

                        <p class="text-muted mb-0">
                            Plan your trip and make a reservation
                            through a simple and convenient process.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>


    <!-- Travel Experience Section -->
    <div class="row mt-5 pt-5">

        <div class="col-lg-12 text-center">

            <span class="text-primary fw-bold">
                YOUR JOURNEY STARTS HERE
            </span>

            <h2 class="mt-2">
                Plan Your Next Adventure
            </h2>

            <p class="text-muted mt-3 mx-auto" style="max-width: 750px;">
                From discovering new destinations to making your
                reservation, WoOx Travel brings the essential
                parts of your travel planning experience together.
            </p>

        </div>

    </div>


    <!-- Three Information Cards -->
    <div class="row g-4 mt-4">

        <!-- Destination -->
        <div class="col-lg-4 col-md-6">

            <div class="bg-white rounded shadow-sm p-4 h-100 text-center">

                <div
                    class="mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 65px; height: 65px;"
                >
                    <i class="fa fa-map-marker fa-lg"></i>
                </div>

                <h4>
                    Beautiful Destinations
                </h4>

                <p class="text-muted mb-0">
                    Discover places that inspire you and
                    create memories that last a lifetime.
                </p>

            </div>

        </div>


        <!-- Travel Deals -->
        <div class="col-lg-4 col-md-6">

            <div class="bg-white rounded shadow-sm p-4 h-100 text-center">

                <div
                    class="mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 65px; height: 65px;"
                >
                    <i class="fa fa-plane fa-lg"></i>
                </div>

                <h4>
                    Travel Opportunities
                </h4>

                <p class="text-muted mb-0">
                    Explore different travel options and
                    find exciting opportunities for your next trip.
                </p>

            </div>

        </div>


        <!-- Easy Booking -->
        <div class="col-lg-4 col-md-6 mx-auto">

            <div class="bg-white rounded shadow-sm p-4 h-100 text-center">

                <div
                    class="mx-auto mb-3 bg-primary text-white rounded-circle d-flex align-items-center justify-content-center"
                    style="width: 65px; height: 65px;"
                >
                    <i class="fa fa-check fa-lg"></i>
                </div>

                <h4>
                    Simple Booking
                </h4>

                <p class="text-muted mb-0">
                    Make your travel reservation easily and
                    manage your upcoming trips from your dashboard.
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
                    Ready to Start Your Journey?
                </h2>

                <p class="mt-3 mb-4">
                    Explore our travel deals and plan your next
                    unforgettable adventure.
                </p>

                <a
                    href="{{ route('deals') }}"
                    class="btn btn-light me-2"
                >
                    Explore Deals
                </a>

                @auth

                    <a
                        href="{{ route('reservation') }}"
                        class="btn btn-outline-light"
                    >
                        Book Your Trip
                    </a>

                @else

                    <a
                        href="{{ route('login') }}"
                        class="btn btn-outline-light"
                    >
                        Login & Book
                    </a>

                @endauth

            </div>

        </div>

    </div>

</div>

@endsection