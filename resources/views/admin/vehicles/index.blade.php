@extends('layouts.admin.extend')

@section('content')
    <!-- Vehicle Management Table -->
    <section class="vehicle-management">
        <div class="header-row">
            <h3>Registered Vehicles</h3>
            <button class="add-vehicle-btn"><a href="{{ route('admin.vehicles.create') }}"> Add New Vehicle</a></button>
        </div>

        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Plate Number</th>
                <th>Owner Name</th>
                <th>Vehicle Type</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @php
            $i = 0;
            @endphp
            @foreach($vehicles as $vehicle)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $vehicle->plate_number }}AB123CD</td>
                <td>{{ $vehicle->owner->firstname . " " . $vehicle->owner->lastname }}</td>
                <td>{{ $vehicle->model }}</td>
                <td><span class="status active">{{ $vehicle->flagged !== null ? 'Flagged' : 'Active' }}</span></td>
{{--                <td>--}}
{{--                    <button class="edit-btn">Edit</button>--}}
{{--                    <button class="delete-btn">Delete</button>--}}
{{--                </td>--}}
            </tr>
            @endforeach
            <!-- More rows -->
            </tbody>
        </table>
    </section>
@endsection
