@extends('layouts.app')

@section('title', 'Make a Reservation')

@section('content')

<div class="container py-5">

    {{-- Page Heading --}}
    <div class="row mb-5">

        <div class="col-lg-8 mx-auto text-center">

            <h1 class="mb-3">
                Make Your Reservation
            </h1>

            <p class="text-muted">
                Plan your next trip with WoOx Travel.
            </p>

        </div>

    </div>


    {{-- Validation Errors --}}
    @if ($errors->any())

        <div class="row mb-4">

            <div class="col-lg-8 mx-auto">

                <div class="alert alert-danger">

                    <h5 class="mb-2">
                        Please fix the following errors:
                    </h5>

                    <ul class="mb-0">

                        @foreach ($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            </div>

        </div>

    @endif


    {{-- Reservation Form --}}
    <div class="row">

        <div class="col-lg-8 mx-auto">

            <div class="card shadow-sm border-0">

                <div class="card-body p-4">

                    <h3 class="mb-4">
                        Trip Details
                    </h3>


                    <form
                        action="{{ route('reservation.store') }}"
                        method="POST"
                    >

                        @csrf


                        {{-- Destination --}}
                        <div class="mb-4">

                            <label
                                for="destination"
                                class="form-label fw-bold"
                            >
                                Destination
                            </label>

                            <input
                                type="text"
                                id="destination"
                                name="destination"
                                class="form-control @error('destination') is-invalid @enderror"
                                value="{{ old('destination') }}"
                                placeholder="Example: Goa"
                                required
                            >

                            @error('destination')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- Check-in --}}
                        <div class="mb-4">

                            <label
                                for="check_in"
                                class="form-label fw-bold"
                            >
                                Check-in Date
                            </label>

                            <input
                                type="date"
                                id="check_in"
                                name="check_in"
                                class="form-control @error('check_in') is-invalid @enderror"
                                value="{{ old('check_in') }}"
                                min="{{ date('Y-m-d') }}"
                                required
                            >

                            @error('check_in')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- Check-out --}}
                        <div class="mb-4">

                            <label
                                for="check_out"
                                class="form-label fw-bold"
                            >
                                Check-out Date
                            </label>

                            <input
                                type="date"
                                id="check_out"
                                name="check_out"
                                class="form-control @error('check_out') is-invalid @enderror"
                                value="{{ old('check_out') }}"
                                required
                            >

                            @error('check_out')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- Guests --}}
                        <div class="mb-4">

                            <label
                                for="guests"
                                class="form-label fw-bold"
                            >
                                Number of Guests
                            </label>

                            <input
                                type="number"
                                id="guests"
                                name="guests"
                                class="form-control @error('guests') is-invalid @enderror"
                                value="{{ old('guests', 1) }}"
                                min="1"
                                max="20"
                                required
                            >

                            @error('guests')

                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>

                            @enderror

                        </div>


                        {{-- Buttons --}}
                        <div class="d-flex gap-2">

                            <button
                                type="submit"
                                class="btn btn-primary"
                            >
                                Make Reservation
                            </button>

                            <a
                                href="{{ route('dashboard') }}"
                                class="btn btn-secondary"
                            >
                                Cancel
                            </a>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection