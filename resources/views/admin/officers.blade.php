@extends('layouts.admin.extend')

@section('content')
    <section class="user-management">
        <div class="header-row">
            <h3>Registered Officers</h3>
            <br>
            <button class="add-user-btn"><a href="#officers-reg"> Add New Officer </a></button>                     </div>
        <br><br>
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>001</td>
                <td>John Doe</td>
                <td>john.doe@example.com</td>
                <td>Officer</td>
                <td><span class="status active">Active</span></td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </td>
            </tr>
            <tr>
                <td>002</td>
                <td>Jane Smith</td>
                <td>jane.smith@example.com</td>
                <td>Supervisor</td>
                <td><span class="status inactive">Inactive</span></td>
                <td>
                    <button class="edit-btn">Edit</button>
                    <button class="delete-btn">Delete</button>
                </td>
            </tr>
            <!-- Additional rows -->
            </tbody>
        </table>
    <!-- Officers Section -->
    <section class="officers-section" id="officers-reg">
        <!-- Add Officer Form -->
        <div class="add-officer-form ">
            <h3>Add New Officer</h3>
            <form id="officer-form" onFormSubmit() autocomplete="off" onSubmit="event.preventDefault()">
                <label for="officer-name">Full Name</label>
                <input type="text" id="officerName" placeholder="Enter officer's name" required>

                <label for="officer-id">Officer ID</label>
                <input type="text" id="officer-id" placeholder="Enter officer's ID" required>

                <label for="rank">Rank</label>
                <select id="rank" name="rank" required>
                    <option value="">Select rank</option>
                    <option value="Inspector">Inspector</option>
                    <option value="Sergeant">Sergeant</option>
                    <option value="Constable">Constable</option>
                    <option value="Commander">Commander</option>
                </select><br><br>

                <label for="officer-email">Email</label>
                <input type="email" id="officer-email" placeholder="Enter officer's email" required>

                <label for="officer-phone">Phone Number</label>
                <input type="tel" id="officer-phone" placeholder="Enter officer's phone number" required>

                <button type="submit" class="add-btn">Add Officer</button>
            </form>
        </div>

        <!-- Officers List -->
        <div class="officers-list">
            <h3>Registered Officers</h3>
            <table id="tbule">
                <thead>
                <tr>
                    <th>Officer ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody id="officers-table-body">
                <!-- Officer rows will be dynamically added here -->
                </tbody>
            </table>
        </div>
    </section>

@endsection
