<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\EventBooking;
use App\Models\Contact;
use App\Mail\BookingConfirmationEmail;

class EventbookingController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventBookings = EventBooking::all();
        return view('eventbookings.index', compact('eventBookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('eventbookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeBooking(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'event_name' => 'required',
        'event_date' => 'required|date',
        'start_time' => 'required',
        'end_time' => 'required',
        'num_attendees' => 'required|integer|min:1',
        'special_requirements' => 'nullable',
    ]);

    $eventBooking = EventBooking::create($validatedData);

    // Send email to the user 
    $this->sendBookingConfirmationEmail($eventBooking);

    // Set a flash message
    session()->flash('success', 'Event booking created successfully. A confirmation email has been sent to you.');

    return redirect()->route('eventbookings.index', $eventBooking)->with('showModal', true);
}

/**
 * Send a booking confirmation email to the user.
 *
 * @param  EventBooking  $eventBooking
 * @return void
 */
protected function sendBookingConfirmationEmail(EventBooking $eventBooking)
{
    // Code to send the email
    Mail::to($eventBooking->email)
        ->send(new BookingConfirmationEmail($eventBooking));
}
//     public function storeContact(Request $request)
//     {
//         $validatedData = $request->validate([
//             'name' => 'required',
//             'email' => 'required|email',
//             'phone_number' => 'required',
//             'message' => 'required',
//         ]);

//         $contact = Contact::create($validatedData);

//         return redirect()->route('eventbookings.index', $contact)->with('success', 'Contact submitted successfully.');
//     }
// }
}
