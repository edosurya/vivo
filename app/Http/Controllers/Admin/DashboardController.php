<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Reservation;
use App\Models\ContactUs;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index(): View
    {
        $reservation_total = Reservation::all()->count();
        $reservation_pending = Reservation::where('status',Reservation::PENDING_STATUS)->count();
        $reservation_approved = Reservation::where('status',Reservation::APPROVED_STATUS)->count();
        $reservation_confirmed = Reservation::where('is_confirmed', true)->count();
        $reservation_rejected = Reservation::where('status',Reservation::REJECTED_STATUS)->count();
        $reservation_waiting = Reservation::where('status',Reservation::WAITING_STATUS)->count();
        $reservation_reallocated = Reservation::where('status',Reservation::REALLOCATED_STATUS)->count();
        $contact_us_total = ContactUs::all()->count();

        return view('admin.dashboard.index',compact('reservation_total','reservation_pending',
        'reservation_confirmed',
        'reservation_approved', 'reservation_rejected', 'reservation_waiting','reservation_reallocated','contact_us_total'));
       
    }

   
}
