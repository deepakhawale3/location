<!-- resources/views/locations.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">Insert New Location</div>

                <div class="card-body">
                    <form id="locationForm">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="state">State:</label>
                                <select class="form-control" id="state" name="state_name">
                                    <option value="" disabled selected>Select State</option>
                                    <!-- Loop through states and dynamically generate options -->
                                    @foreach ($states as $state)
                                        <option value="{{ $state->name }}">{{ $state->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label for="city">City:</label>
                                <select class="form-control" id="city" name="city_name" disabled>
                                    <option value="" disabled selected>Select City</option>
                                    <!-- Cities will be dynamically loaded here -->
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="locationName">Location Name:</label>
                                <input type="text" class="form-control" id="locationName" name="location_name">
                            </div>
                        </div>
                        <div class="form-row justify-content-center"> 
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>

            <div class="card mt-4">
                <div class="card-header text-center">Locations</div>

                <div class="card-body">
                    
                        
                        <div id="locationList" class="list-group">
                            <!-- List of locations will be populated here -->
                        </div>
                        
                    
                </div>
            </div>
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#state').change(function() {
            var stateName = $(this).val();
            if (stateName) {
                $('#city').prop('disabled', true).html('<option value="">Loading...</option>');
                $.ajax({
                    url: '{{ route('cities.by.state') }}',
                    type: 'GET',
                    data: {state_name: stateName},
                    success: function(response) {
                        var options = '<option value="" disabled selected>Select City</option>';
                        $.each(response.cities, function(index, city) {
                            options += '<option value="' + city.name + '">' + city.name + '</option>';
                        });
                        $('#city').prop('disabled', false).html(options);
                    }
                });
            } else {
                $('#city').prop('disabled', true).html('<option value="">Select City</option>');
            }
        });

        $('#locationForm').submit(function(event) {
        event.preventDefault();

        $.ajax({
            url: '{{ route('store.location') }}',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                // Use SweetAlert to show a success message
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Location saved successfully'
                });
                // Clear the form fields
            $('#locationForm')[0].reset();
                // Fetch and display locations again after successful submission
            fetchLocationsDesc();
            },
            error: function(xhr, status, error) {
                // Handle errors using SweetAlert
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: 'City already exists in locations... Please Select Another City' // Display the error response
                });
            }
        });
    });

    // Function to fetch and display locations in descending order
    function fetchLocationsDesc() {
    $.ajax({
        url: '{{ route("locations.index.desc") }}',
        type: 'GET',
        success: function(response) {
            var locations = response.locations;
            var locationList = $('#locationList');
            locationList.empty(); // Clear existing list

            // Iterate over locations and append to the list
            $.each(locations, function(index, location) {
                // Parse and format created_at timestamp
                var createdAt = new Date(location.created_at);
                var formattedCreatedAt = createdAt.toLocaleString(); // Adjust locale and options as needed

                // Create a card for each location
                var card = $(
                    '<div class="col-md-4 mb-3">' +
                    '<div class="card">' +
                    '<div class="card-body">' +
                    '<p class="card-text">Location ID: ' + location.id + '</p>' +
                    '<p class="card-text">State Name: ' + location.state + '</p>' +
                    '<p class="card-text">City Name: ' + location.city + '</p>' +
                    '<p class="card-text">Location Name: ' + location.location_name + '</p>' +
                    '<p class="card-text">Created At: ' + formattedCreatedAt + '</p>' +
                    '</div>' +
                    '</div>' +
                    '</div>'
                );

                // Append the card to the locationList
                locationList.append(card);
            });

            // Add a row wrapper to ensure cards are displayed side by side in desktop view
            var row = $('<div class="row"></div>');
            row.append(locationList.children('.col-md-4'));
            locationList.empty().append(row);
        }
    });
}



    // Initial fetch of locations in descending order
    fetchLocationsDesc();




    });
</script>
@endsection



