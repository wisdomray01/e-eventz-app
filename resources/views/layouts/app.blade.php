<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleganza Event Center Booking</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>

<body>


    <div class="container my-5">
        <!-- Your event booking content goes here -->

        <!-- Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Success</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{ session('success') }}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')

    <footer>
        <div class="container">
            <p>&copy; <a href="#">Eleganza Events</a> <span id="currentYear"></span></p>
        </div>
    </footer>



    <script src="{{ asset('assets/js/jsdel.js') }}"></script>
    <script>
        document.getElementById("currentYear").textContent = new Date().getFullYear();
    </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if (session('showModal'))
            var myModal = new bootstrap.Modal(document.getElementById('successModal'), {
                keyboard: false
            });
            myModal.show();
        @endif
    });
</script>

</body>

</html>
