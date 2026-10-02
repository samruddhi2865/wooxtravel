@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container py-5">

    {{-- Success Message --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}

            <button
                type="button"
                class="btn-close"
                data-bs-dismiss="alert"
            ></button>
        </div>
    @endif


    {{-- Welcome Section --}}
    <div class="bg-white p-4 rounded shadow-sm mb-4">

        <h2 class="h3 mb-2">
            Welcome, {{ Auth::user()->name }}!
        </h2>

        <p class="text-muted mb-0">
            Manage your reservations and bookings from your dashboard.
        </p>

    </div>


    {{-- Dashboard Cards --}}
    <div class="row g-4 mb-5">

        {{-- Total Reservations --}}
        <div class="col-md-4">

            <div class="bg-white p-4 rounded shadow-sm h-100">

                <h5 class="text-muted">
                    Total Reservations
                </h5>

                <p class="display-6 fw-bold mb-0">
                    {{ $totalReservations }}
                </p>

            </div>

        </div>


        {{-- Upcoming Trips --}}
        <div class="col-md-4">

            <div class="bg-white p-4 rounded shadow-sm h-100">

                <h5 class="text-muted">
                    Upcoming Trips
                </h5>

                <p class="display-6 fw-bold mb-0">
                    {{ $upcomingTrips }}
                </p>

            </div>

        </div>


        {{-- Completed Trips --}}
        <div class="col-md-4">

            <div class="bg-white p-4 rounded shadow-sm h-100">

                <h5 class="text-muted">
                    Completed Trips
                </h5>

                <p class="display-6 fw-bold mb-0">
                    {{ $completedTrips }}
                </p>

            </div>

        </div>

    </div>


    {{-- Book New Trip --}}
    <div class="bg-white p-4 rounded shadow-sm mb-5">

        <h2 class="h4 mb-2">
            Book a New Trip
        </h2>

        <p class="text-muted mb-4">
            Plan your next journey and make a reservation.
        </p>

        <a
            href="{{ route('reservation') }}"
            class="btn btn-primary"
        >
            Book a Trip
        </a>

    </div>


    {{-- My Reservations --}}
    <div class="bg-white rounded shadow-sm">

        <div class="p-4 border-bottom">

            <h2 class="h4 mb-0">
                My Reservations
            </h2>

        </div>


        @if ($reservations->count() > 0)

            <div class="table-responsive">

                <table class="table table-hover mb-0">

                    <thead>
                        <tr>

                            <th class="px-4 py-3">
                                Destination
                            </th>

                            <th class="py-3">
                                Check-in
                            </th>

                            <th class="py-3">
                                Check-out
                            </th>

                            <th class="py-3">
                                Guests
                            </th>

                            <th class="py-3">
                                Status
                            </th>

                        </tr>
                    </thead>


                    <tbody>

                        @foreach ($reservations as $reservation)

                            <tr>

                                <td class="px-4 py-3 fw-bold">
                                    {{ $reservation->destination }}
                                </td>

                                <td class="py-3">
                                    {{ $reservation->check_in->format('d M Y') }}
                                </td>

                                <td class="py-3">
                                    {{ $reservation->check_out->format('d M Y') }}
                                </td>

                                <td class="py-3">
                                    {{ $reservation->guests }}
                                </td>

                                <td class="py-3">

                                    @if ($reservation->status === 'confirmed')

                                        <span class="badge bg-success">
                                            Confirmed
                                        </span>

                                    @else

                                        <span class="badge bg-secondary">
                                            {{ ucfirst($reservation->status) }}
                                        </span>

                                    @endif

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            <div class="p-5 text-center">

                <p class="text-muted mb-4">
                    You don't have any reservations yet.
                </p>

                <a
                    href="{{ route('reservation') }}"
                    class="btn btn-primary"
                >
                    Make Your First Booking
                </a>

            </div>

        @endif

    </div>

</div>

@endsection