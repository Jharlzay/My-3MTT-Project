@extends('layouts.admin.extend')

@section('content')
    <section class="vehicleReg">
        <header>
            <h1 style="text-align: center; text-transform: uppercase;">Driver Data Collection Form</h1>
        </header>

        <form id="driver-data-form" method="POST" action="{{ route('admin.vehicles.store') }}" enctype="multipart/form-data">
            @csrf
            <h3>Driver Information</h3>
            <div class="form-grid">
                <div class="form-item">
                    <label for="driver-name">Firstname:</label>
                    <input type="text" id="driver-name" name="firstname" placeholder="John Doe" required>
                    @error('firstname')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-item">
                    <label for="driver-name">Lastname</label>
                    <input type="text" id="driver-name" name="lastname" placeholder="John Doe" required>
                    @error('lastname')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-item">
                    <label for="nin">National Identification Number (NIN):</label>
                    <input type="text" id="nin" name="nin" placeholder="1234567890" required>
                    @error('nin')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-item">
                    <label for="license-number">Driver's License Number:</label>
                    <input type="text" id="license-number" name="license_number" placeholder="DL-1234" required>
                    @error('license_number')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-item">
                    <label for="phone-number">Phone Number:</label>
                    <input type="tel" id="phone-number" name="phone" placeholder="+123456789" required>
                    @error('phone')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-item">
                    <label for="driver-photo">Upload Passport Photo:</label>
                    <input type="file" id="driver-photo" name="passport" accept="image/*" required>
                    @error('driver_photo')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>
            </div>


            <h3>Car Information</h3>
            <div class="form-grid">
                <div class="form-item">
                    <label for="plate-number">Car Plate Number:</label>
                    <input type="text" id="plate-number" name="plate_number" placeholder="ABC-1234" required>
                    @error('plate_number')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-item">
                    <label for="car-model">Car Model:</label>
                    <input type="text" id="car-model" name="model" placeholder="Toyota Camry" required>
                    @error('model')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-item">

                    <label for="car-color">Car Color:</label>
                    <input type="text" id="car-color" name="color" placeholder="Black" required>
                    @error('color')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-item">
                    <label for="car-year">Year of Manufacture:</label>
                    <input type="number" id="car-year" name="manufacture_year" placeholder="2019" required>
                    @error('year')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-item">
                    <label for="car-photo">Upload Car Photo:</label>
                    <input type="file" id="car-photo" name="vehicle_photo[]"  accept="image/*" multiple required>
                    @error('vehicle_photo')
                    <small class="error">{{ $message }}</small>
                    @enderror
                </div>

            </div>

            <button type="submit" class="btn">Submit Data</button>
        </form>
        </div>
    </section>
@endsection
