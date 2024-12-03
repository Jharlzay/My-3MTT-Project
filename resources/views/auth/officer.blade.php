@extends('layouts.extend')

@section('content')
    <!-- ======LOGIN section===== -->
    <section>
        <div id="maincontainer">
            <div id="container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div id="img">
                        <img src="{{ asset('image/Police_Van-removebg-preview.png') }}" alt="admin's pics">
                    </div>
                    <div id="header">
                        <h2>LOGIN NOW</h2>
                    </div>
                    <div id="inputs">
                        <input type="text" id="firstinput" placeholder="Security ID Number" required name="identity"><br>
                        <input type="password" id="secondinput" placeholder="password" required name="password">
                    </div>
                    <div id="empty">
                        <input type="text" id="firstempty" disabled>
                        <input type="text" id="secondempty" disabled>
                    </div>
                    <div id="btn">
                        <button type="submit">login</button>
                    </div>
                </form>

            </div>
            <p style="color: rgba(0, 0, 0, 0.9); font-weight:bolder"><a href="#">forgotten password?</a></p>
        </div>
    </section>
@endsection
