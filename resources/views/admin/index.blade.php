@extends('layouts.admin.extend')

@section('content')
    <!-- Dashboard Cards -->
    <section class="dashboard-metrics">
        <div class="card">
            <h3>Total Registered Vehicles</h3>
            <p>{{ number_format($totalVehicles) }}</p>
        </div>
        <div class="card">
            <h3>Registered Officers</h3>
            <p>{{ number_format($totalOfficers) }}</p>
        </div>
        <div class="card">
            <h3>Plate Number Queries</h3>
            <p>{{ number_format($totalVehicleQuery) }}</p>
        </div>
        <div class="card">
            <h3>Flagged Vehicles</h3>
            <p>{{ number_format($flaggedVehicles) }}</p>
        </div>
    </section>

    <!-- Table Section -->
    <section class="data-table">
        <h3>Recent Vehicle Queries</h3>
        <table>
            <thead>
            <tr>
                <th>Officer ID</th>
                <th>Plate Number</th>
                <th>Status</th>
                <th>Date Queried</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vehicleQueries as $vehicleQuery)
            <tr>
                <td>{{ $vehicleQuery->officer->identification_number }}</td>
                <td>{{ $vehicleQuery->vehicle->plate_number }}</td>
                <td>{{ $vehicleQuery->vehicle->flagged !== null ? 'Flagged' : 'Active' }}</td>
                <td>{{  \Carbon\Carbon::parse($vehicleQuery->vehicle->created_at)->format('Y-m-d')}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </section>
@endsection
