@extends('layouts.admin.extend')

@section('content')
    <!-- Settings Section -->
    <section class="settings-section">
        <form id="settings-form">
            <!-- General Settings -->
            <div class="settings-group">
                <h4>General Settings</h4>
                <label for="system-name">System Name</label>
                <input type="text" id="system-name" value="VMIS" placeholder="Enter system name">

                <label for="admin-email">Admin Email</label>
                <input type="email" id="admin-email" value="admin@vmis.com" placeholder="Enter admin email">

                <label for="theme-color">Theme Color</label>
                <input type="color" id="theme-color" value="#2c3e50">
            </div>

            <!-- Security Settings -->
            <div class="settings-group">
                <h4>Security Settings</h4>
                <label for="password-length">Minimum Password Length</label>
                <input type="number" id="password-length" value="8" min="4" max="16">

                <label>
                    <input type="checkbox" id="two-factor-auth" checked>
                    Enable Two-Factor Authentication
                </label>

                <label>
                    <input type="checkbox" id="session-timeout" checked>
                    Enable Session Timeout
                </label>
            </div>

            <!-- Notifications -->
            <div class="settings-group">
                <h4>Notifications</h4>
                <label>
                    <input type="checkbox" id="email-notifications" checked>
                    Enable Email Notifications
                </label>

                <label>
                    <input type="checkbox" id="sms-notifications">
                    Enable SMS Notifications
                </label>
            </div>

            <!-- Submit Button -->
            <div class="settings-actions">
                <button type="submit" class="save-btn">Save Changes</button>
            </div>
        </form>
    </section>
@endsection
