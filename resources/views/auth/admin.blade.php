@extends('layouts.extend')

@section('content')
    <section class="hero-section">
        <div class="hero-content">
            <h1>Welcome to VMIS Admin Officer Page</h1>
            <p>
                The Vehicle Monitoring and Identification System (VMIS) provides officers
                with an efficient platform to search for and manage vehicle-related data
                effortlessly. Monitor activity, retrieve vehicle details, and ensure
                community safety with ease.
            </p>
            <div class="hero-buttons">
                <button id="how-it-works-btn"><a href="#how-it-works"> How it Works</a></button>
            </div>

            <br><br>

            <div class="hero-content">
                <br>

                <div>
                    <labeL for="adminLogin">Admin Login</labeL><br><br>
                </div>
                @if(count($errors))
                    <small class='error mb-2'>*{{ $errors->first() }} </small>
                @endif
                <form method="post" action="{{ route('login') }}">
                    @csrf
                    <div class="hero-buttons">
                        <input type="text" name="identity" value="0983742" hidden />
                        <input type="password" name="password" placeholder="Enter password">
                        <br><br>
                        <button id="login-btn" type="submit">Login</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="hero-image">
            <img src="/image/Police Van 2.jpeg" alt="Officer Hero" width="600px"/>
        </div>
    </section>
@endsection
