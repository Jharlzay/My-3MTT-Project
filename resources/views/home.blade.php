@extends('layouts.extend')

@section('content')
    <section class="hero-section">
        <div class="hero-content">
            <h1>Welcome to VMIS Officer Search Page</h1>
            <p>
                The Vehicle Monitoring and Identification System (VMIS) provides officers
                with an efficient platform to search for and manage vehicle-related data
                effortlessly. Monitor activity, retrieve vehicle details, and ensure
                community safety with ease.
            </p>
            <div class="hero-buttons">
                <a href="{{ route('auth.officer') }}"><button id="login-btn">Officer Login</button></a>
                <a href="{{ route('auth.admin') }}"><button id="how-it-works-btn">Admin Login</button></a>
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('image/Police Van 2.jpeg') }}" alt="Officer Hero" width="600px"/>
        </div>
    </section>
@endsection
