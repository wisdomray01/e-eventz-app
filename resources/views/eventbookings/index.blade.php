@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" id="ev-title">
                    <div class="event">
                        <h1>E-EVENT BOOKING FORM</h1>
                    </div>
                </div>
                <div class="card p-4">
                    {{-- <h1 class="text-center mb-4">Event Booking</h1> --}}
                    <form method="post" action="{{ route('eventbookings.store') }}">
                        @csrf
                        @method('post')

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="event_name" class="form-label">Event Name</label>
                                    <input type="text" class="form-control" id="event_name" name="event_name" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="event_date" class="form-label">Event Date</label>
                                    <input type="date" class="form-control" id="event_date" name="event_date" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="start_time" class="form-label">Start Time</label>
                                    <input type="time" class="form-control" id="start_time" name="start_time" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="end_time" class="form-label">End Time</label>
                                    <input type="time" class="form-control" id="end_time" name="end_time" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="num_attendees" class="form-label">Number of Attendees</label>
                                    <input type="number" class="form-control" id="num_attendees" name="num_attendees"
                                        min="1" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="special_requirements" class="form-label">Special Requests
                                        (optional)</label>
                                    <textarea class="form-control" id="special_requirements" name="special_requirements" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-warning">Submit Booking</button>
                        </div>
                    </form>



                </div>

                <hr style="height:3px;border-width:0;color:gray;background-color:gray">
                <div class="card">
                    <div class="row g-0 mt-3">
                        <div class="col-md-6">
                            <h2 class="card-title p-3">Our Address</h2>
                            <address class="card-text p-3">
                                123 Main Street<br>
                                Anytown, USA 12345<br>
                                Phone: (123) 456-7890<br>
                                Email: info@eventsbookingapp.com
                            </address>
                        </div>
                        <div class="col-md-6">
                            <div class="map-container">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.5422092789793!2d-74.00369868467428!3d40.71455224379132!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a23e28c1191%3A0x49f75d3281df052a!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1618327342037!5m2!1sen!2sus"
                                    frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                                    tabindex="0"></iframe>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
