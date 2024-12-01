@extends('layouts.extend')

@section('content')
    <!-- ======LOGIN section===== -->
    <section>
        <div id="maincontainer">
            <div id="container">
                <div id="img">
                    <img src="{{ asset('image/Police_Van-removebg-preview.png') }}" alt="admin's pics">
                </div>
                <div id="header">
                    <h2>LOGIN NOW</h2>
                </div>
                <div id="inputs">
                    <input type="text" id="firstinput" placeholder="Security ID Number" required><br>
                    <input type="password" id="secondinput" placeholder="password" require d>
                </div>
                <div id="empty">
                    <input type="text" id="firstempty" disabled>
                    <input type="text" id="secondempty" disabled>
                </div>
                <div id="btn">
                    <button><a href="{{ asset('user-officer/userDashboard.html') }}" style=" text-decoration: none; color: white">login</a></button>
                </div>
            </div>
            <p style="color: rgba(0, 0, 0, 0.9); font-weight:bolder"><a href="#">forgotten password?</a></p>
        </div>
    </section>
@endsection
