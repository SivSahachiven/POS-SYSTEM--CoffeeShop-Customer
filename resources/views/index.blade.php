@extends('front_master')
@section('content')
    <div class="row">
        <div class="col-1 p-0">
            @include('partials.sidebar')
        </div>
        <div class="col-11 p-0">
            @include('partials.navbar')
            @include('partials.customer')
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Attach click event listener to all delete buttons
            const deleteButtons = document.querySelectorAll('.deleteButton');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent the default form submission

                    const customerId = e.currentTarget.getAttribute('data-id');

                    // Display SweetAlert2 confirmation dialog
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // If user confirms deletion, submit the form
                            const deleteForm = document.querySelector(
                                `#deleteForm_${customerId}`);
                            deleteForm.submit(); // Submit the form for deletion
                        }
                    });
                });
            });
        });
    </script>
@endsection
