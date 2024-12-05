@extends('layouts.extend')

@section('content')
    <header class="header">
        <h1>VMIS Officer Dashboard</h1>
    </header>

    <!-- Vehicle Search Section -->
    <section class="section" id="vehicle-search">
        <div  id="vehicleSearchContainer">
            <h2>Vehicle Search</h2>


            <div class="search-box">
                <div id="imageVmis">
                    <img src="./image/Moto.png" alt="moto">
                </div>
                <form method="GET" action="{{ route('vehicle.search') }}">
                    <input type="text" placeholder="Enter Plate Number" id="plate-input" name="plate_number">
                    <button id="search-btn">Search</button>
                </form>

                <br><br>

            </div>
        </div>
        <br><br>
        @if(isset($vehicle))
        <!-- Let the Vehicle details display here -->
        <div id="vehicle-detail-display">
            <div id="image-details">

                <div id="vehicle-image">
                    <h2>Vehicle's Image</h2>
                    <input type="display" id="vehicle-image-display" readonly>
                </div>

                <div id="drivers-image">
                    <h2>Driver's Image</h2>
                    <input type="display" id="drivers-image-display" readonly>
                </div>
            </div>

            <div id="other-details">

                <div class="plate-number">
                    <input type="text" id="plate-number" value="{{ $vehicle->plate_number }}" readonly>
                    <h2>Plate Number</h2>
                </div>

                <div class="vehicle-details">
                    <input type="text" id="vehicle-details" value="{{ $vehicle->model }}" readonly>
                    <h2>Vehicle Name</h2>
                </div>

                <div class="fname">
                    <input type="text" id="fname" value="{{ $vehicle->owner->firstname }}" readonly>
                    <h2>First Name</h2>
                </div>

                <div class="lname">
                    <input type="text" id="lname" value="{{ $vehicle->owner->lastname }}" readonly>
                    <h2>Last Name</h2>
                </div>

                <div class="contact-num">
                    <input type="text" id="contact-num" value="{{ $vehicle->owner->phone }}"readonly>
                    <h2>Contact</h2>
                </div>

                <div class="licence-num">

                    <input type="text" id="licence-num" value="{{ $vehicle->owner->drivers_license_number }}" readonly>
                    <h2>Licence Number</h2>
                </div>

                <div class="email-address">

                    <input type="email" id="email-address" value="{{ $vehicle->owner->email }}" readonly>
                    <h2>email</h2>
                </div>

            </div>
        </div>
        @endif
    </section>


    @if(isset($vehicle))
        <!-- Flag Plate Number Section -->
        <section class="section" id="flag-plate">
            <h2>Flag Plate Number</h2>
            <form method="POST" action="{{ route('vehicle.flag') }}">
                @csrf
                <div class="flag-box">
                    <input type="text" placeholder="Enter Plate Number to Flag" id="flag-input" name="plate_number" value="{{ $vehicle->plate_number }}" readonly>
                    <select id="flag-reason" name="reason">
                        <option value="" disabled selected>Select a reason</option>
                        <option value="stolen">Stolen</option>
                        <option value="under-investigation">Under Investigation</option>
                        <option value="suspicious">Suspicious Activity</option>
                    </select>
                    @error('reason')
                    <small class="error">{{ $message }}</small>
                    @enderror
                    <button id="flag-btn" type="submit">Flag</button>
                </div>
            </form>

        </section>
    @endif
@endsection
