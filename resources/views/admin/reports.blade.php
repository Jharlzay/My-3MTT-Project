@extends('layouts.admin.extend')

@section('content')
    <!-- Reports Section -->
    <section class="analytics">
        <!-- Graphs Section -->
        <div class="charts-container">
            <div class="chart">
                <h4>Vehicle Activity Overview</h4>
                <canvas id="activityChart"></canvas>
            </div>
            <div class="chart">
                <h4>Flagged Vehicles Breakdown</h4>
                <canvas id="flaggedChart"></canvas>
            </div>
        </div>

        <!-- Data Table -->
        <div class="table-container">
            <h4>Detailed Reports</h4>
            <table>
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Vehicle Plate</th>
                    <th>Activity</th>
                    <th>Status</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2024-11-10</td>
                    <td>ABC123XYZ</td>
                    <td>Entry</td>
                    <td>Flagged</td>
                    <td><button class="details-btn">View</button></td>
                </tr>
                <tr>
                    <td>2024-11-09</td>
                    <td>EFG456LMN</td>
                    <td>Exit</td>
                    <td>Clear</td>
                    <td><button class="details-btn">View</button></td>
                </tr>
                <!-- More rows can be added dynamically -->
                </tbody>
            </table>
        </div>

        <!-- Export Button -->
        <div class="export-section">
            <button class="export-btn">Export All Data</button>
        </div>
    </section>
@endsection
