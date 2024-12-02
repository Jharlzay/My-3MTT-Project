@extends('layouts.admin.extend')

@section('content')
    <section class="user-management">
        <section class="officers-section" id="officers-reg">
            <!-- Add Officer Form -->
            <div class="add-officer-form mx-auto">
                <h3>Add New Officer</h3>
                <form id="officer-form"  autocomplete="off"  method="POST" action="{{ route('admin.officers.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="officer-name">Firstname</label>
                        <input type="text" name="firstname" placeholder="Enter officer's firstname" required>
                        @error('firstname')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="officer-name">Lastname</label>
                        <input type="text" name="lastname" placeholder="Enter officer's lastname" required>
                        @error('lastname')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="officer-id">Officer ID</label>
                        <input type="text" name="identification_number" placeholder="Enter officer's ID" required>
                        @error('officer_id')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="rank">Rank</label>
                        <select id="rank" name="rank" required>
                            <option value="">Select rank</option>
                            <option value="inspector">Inspector</option>
                            <option value="sergeant">Sergeant</option>
                            <option value="constable">Constable</option>
                            <option value="commander">Commander</option>
                        </select><br><br>
                        @error('rank')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="officer-email">Email</label>
                        <input type="email" name="email" placeholder="Enter officer's email" required>
                        @error('email')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="officer-phone">Phone Number</label>
                        <input type="tel" name="phone" placeholder="Enter officer's phone number" required>
                        @error('phone')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="officer-phone">Password</label>
                        <input type="password" name="password" placeholder="Enter password for officer" required>
                        @error('password')
                        <small class="error">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="add-btn">Add Officer</button>
                </form>
            </div>
        </section>
    </section>

@endsection
