<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReservationController extends Controller
{
    /**
     * Show the reservation form.
     */
    public function create(): View
    {
        return view('pages.reservation');
    }

    /**
     * Save a reservation.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'destination' => [
                'required',
                'string',
                'max:255',
            ],

            'check_in' => [
                'required',
                'date',
                'after_or_equal:today',
            ],

            'check_out' => [
                'required',
                'date',
                'after:check_in',
            ],

            'guests' => [
                'required',
                'integer',
                'min:1',
                'max:20',
            ],
        ]);

        Reservation::create([
            'user_id' => auth()->id(),
            'destination' => $validated['destination'],
            'check_in' => $validated['check_in'],
            'check_out' => $validated['check_out'],
            'guests' => $validated['guests'],
            'status' => 'confirmed',
        ]);

        return redirect()
            ->route('dashboard')
            ->with(
                'success',
                'Your reservation has been created successfully!'
            );
    }
}