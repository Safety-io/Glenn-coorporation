
<body>
@include('layout.header')
<section class="home container" id="home">
    <div class="home-text">
        <h1>Find Your next <br>Perfect Place to <br>Live.</h1>
        <a href="#" class="btn">Sign Up</a>
    </div>
</section>

<section class="about container" id="about">
    <div class="about-img">
        <img src="{{ asset('/imgs/home.jpg')}}" alt="#">
    </div>

    <div class="about-text">
        <span>About Us</span>
        <h2>We Provide the best <br>Property for you</h2>
        <p>Lorem ipsum dolor sit consectetur adipisicing elit. Iusto debitis ducimus nequeihf wdjbdwbjdjwebjj
        Lorem ipsum dolor sit consectetur adipisicing elit. Iusto debitis ducimus nequeihf wdjbdwbjdjwebjj
            Lorem ipsum dolor sit consectetur adipisicing elit. Iusto debitis ducimus nequeihf wdjbdwbjdjwebjj
        </p>
        <a class="btn" href="#">Learn More</a>
    </div>
</section>

<section class="sales container" id="sales">

    <div class="box">
        <i class="bx bx-user"></i>
        <h3>make your dream true</h3>
        <p>Lorem ipsum dolor sit consectetur adipisicing elit. Iusto debitis ducimus</p>
    </div>

    <div class="box">
        <i class="bx bx-desktop"></i>
        <h3>Start Your membership</h3>
        <p>Lorem ipsum dolor sit consectetur adipisicing elit. Iusto debitis ducimus</p>
    </div>

    <div class="box">
        <i class="bx bx-home-alt"></i>
        <h3>Enjoy your new home</h3>
        <p>Lorem ipsum dolor sit consectetur adipisicing elit. Iusto debitis ducimus</p>
    </div>
</section>

<section class="properties container" id="properties">
    <div class="heading">
        <span>Recent</span>
        <h2>Our Featured Properties</h2>
        <p>Lorem ipsum dolor sit consectetur adipisicing elit. <br> Iusto debitis ducimus</p>
    </div>
    <div class="properties-container container">
        <div class="box">
            <img src="{{ asset('imgs/home.jpg')}}" alt="#">
            <h3>$12,999</h3>
            <div class="content">
                <div class="text">
                    <h3>The place</h3>
                    <p>Lubumbashi, Congo</p>
                </div>
                <div class="icon">
                    <i class="bx bx-bed"><span>5</span></i>
                    <i class="bx bx-bath"><span>2</span></i>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="../../../public/imgs/home.jpg" alt="#">
            <h3>$12,999</h3>
            <div class="content">
                <div class="text">
                    <h3>The place</h3>
                    <p>Lubumbashi, Congo</p>
                </div>
                <div class="icon">
                    <i class="bx bx-bed"><span>5</span></i>
                    <i class="bx bx-bath"><span>2</span></i>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="../../../public/imgs/home.jpg" alt="#">
            <h3>$12,999</h3>
            <div class="content">
                <div class="text">
                    <h3>The place</h3>
                    <p>Lubumbashi, Congo</p>
                </div>
                <div class="icon">
                    <i class="bx bx-bed"><span>5</span></i>
                    <i class="bx bx-bath"><span>2</span></i>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="../../../public/imgs/home.jpg" alt="#">
            <h3>$12,999</h3>
            <div class="content">
                <div class="text">
                    <h3>The place</h3>
                    <p>Lubumbashi, Congo</p>
                </div>
                <div class="icon">
                    <i class="bx bx-bed"><span>5</span></i>
                    <i class="bx bx-bath"><span>2</span></i>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="../../../public/imgs/home.jpg" alt="#">
            <h3>$12,999</h3>
            <div class="content">
                <div class="text">
                    <h3>The place</h3>
                    <p>Lubumbashi, Congo</p>
                </div>
                <div class="icon">
                    <i class="bx bx-bed"><span>5</span></i>
                    <i class="bx bx-bath"><span>2</span></i>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="../../../public/imgs/home.jpg" alt="#">
            <h3>$12,999</h3>
            <div class="content">
                <div class="text">
                    <h3>The place</h3>
                    <p>Lubumbashi, Congo</p>
                </div>
                <div class="icon">
                    <i class="bx bx-bed"><span>5</span></i>
                    <i class="bx bx-bath"><span>2</span></i>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="newsletter container">
    <h2>Have any question for Us?<br> Let us help you</h2>

    <form action="#">
        <input type="email" name="#" id="email-box" placeholder="youremail@gmail.com" required>
        <input type="submit" value="Send" class="btn">
    </form>
</section>
@include('layout.footer')
</body>