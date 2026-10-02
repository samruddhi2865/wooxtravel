@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container py-5">

```
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
                0
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
                0
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
                0
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


    <div class="p-4">

        <p class="text-muted text-center py-4">
            You don't have any reservations yet.
        </p>

        <div class="text-center">

            <a
                href="{{ route('reservation') }}"
                class="btn btn-primary"
            >
                Make Your First Booking
            </a>

        </div>

    </div>

</div>
```

</div>

@endsection
