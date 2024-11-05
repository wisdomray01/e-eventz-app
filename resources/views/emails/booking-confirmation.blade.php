<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Booking Confirmation</title>
    <style>
        /* Add your custom email styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            margin-top: 0;
        }
        p {
            color: #666;
            line-height: 1.5;
        }
        .event-details {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Event Booking Confirmation</h1>
        <p>Dear {{ $eventBooking->name }},</p>
        <p>Thank you for booking an event with us. Here are the details of your booking:</p>
        <div class="event-details">
            <p><strong>Event Name:</strong> {{ $eventBooking->event_name }}</p>
            <p><strong>Event Date:</strong> {{ $eventBooking->event_date }}</p>
            <p><strong>Start Time:</strong> {{ $eventBooking->start_time }}</p>
            <p><strong>End Time:</strong> {{ $eventBooking->end_time }}</p>
            <p><strong>Number of Attendees:</strong> {{ $eventBooking->num_attendees }}</p>
            @if ($eventBooking->special_requirements)
                <p><strong>Special Requests:</strong> {{ $eventBooking->special_requirements }}</p>
            @endif
        </div>
        <p>If you have any questions or need to make changes to your booking, please don't hesitate to contact us.</p>
        <p>Thank you for choosing our services. We look forward to hosting your event.</p>
        <p>Best regards,<br>
        The Event Booking Team</p>
    </div>
</body>
</html>
