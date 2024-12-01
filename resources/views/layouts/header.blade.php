<section class="navBar" style="background-color: #10222E">
    <div class="navIcon">

        <div class="navLogo">
            <a href="/index.html"><img src="{{ asset('image/Preview.png') }}" alt="VMIS Logo" width="80px"></a>
        </div>
        <h2 class="vmis-text">Vehicle Montoring</h2>
        <div id="navLinks">
            <ul>
                <li><a href="index.html"><i class="fa-solid fa-house"></i> Home</a></li>
                <li><a href="admin/home.html"><i class="fa-solid fa-lock"></i> Admin</a></li>
                <li><a href="#"><i class="fa-solid fa-headset"></i> Distress Call</a></li>
                <li><a href="user-officer/chat.html"><i class="fa-brands fa-rocketchat"></i> Chat</a></li>
            </ul>
        </div>
    </div>
</section>
<section class="imageSlider">

    <img class="mySlides" src="{{ asset('image/Police_badge-removebg-preview.png') }}">
    <img class="mySlides" src="{{ asset('image/road_Safety_badge-removebg-preview.png') }}">
    <img class="mySlides" src="{{ asset('image/Police Van 2.jpeg') }}">
    <img class="mySlides" src="{{ asset('image/ROAD SAFETY ROAD SEARCH.jpeg') }}">

</section>
<section>
    <div class="searchBar">

        <!-- The search bar can be used to search for recently flagged plate number
             under investigation and numbers that escaped traffic. Also it can help an
             officer easily get contacts for distress calls e.g commisioners contact/other agency contacts e.g road safety -->
        <input id="searchBar" type="text" placeholder="enter your search" name="searchBar"/>
        <button type="submit" id="search-Btn"><i class="fa-solid fa-magnifying-glass"></i> Search </button>
    </div>
</section>
