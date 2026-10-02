<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display dashboard.
     */
    public function index(): View
    {
        $user = auth()->user();

        $totalReservations = Reservation::where(
            'user_id',
            $user->id
        )->count();

        $upcomingTrips = Reservation::where(
            'user_id',
            $user->id
        )
            ->whereDate('check_in', '>=', today())
            ->where('status', 'confirmed')
            ->count();

        $completedTrips = Reservation::where(
            'user_id',
            $user->id
        )
            ->whereDate('check_out', '<', today())
            ->count();

        $reservations = Reservation::where(
            'user_id',
            $user->id
        )
            ->orderBy('check_in', 'asc')
            ->get();

        return view('dashboard', compact(
            'totalReservations',
            'upcomingTrips',
            'completedTrips',
            'reservations'
        ));
    }
}