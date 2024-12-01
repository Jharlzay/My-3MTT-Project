@extends('layouts.admin.extend')

@section('content')
    <!-- Vehicle Management Table -->
    <section class="vehicle-management">
        <div class="header-row">
            <h3>Registered Vehicles</h3>
            <button class="add-vehicle-btn"><a href="register.html"> Add New Vehicle</a></button>
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
            <tr>
                <td>001</td>
                <td>AB123CD</td>
                <td>John Doe</td>
                <td>Sedan</td>
                <td><span class="status active">Active</span></td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </td>
            </tr>
            <tr>
                <td>002</td>
                <td>EF456GH</td>
                <td>Jane Smith</td>
                <td>Truck</td>
                <td><span class="status flagged">Flagged</span></td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </td>
            </tr>
            <!-- More rows -->
            </tbody>
        </table>
    </section>
@endsection
