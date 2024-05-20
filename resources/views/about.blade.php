@extends('layout')
@section('title', 'About Us')
@section('content')
    <section class="bannerGeneric">
        <p class="bannerGeneric__title">THE ULTIMATE LUXURY EXPERIENCE</p>
        <h1 class="bannerGeneric__subtitle">About Us</h1>
        <div class="bannerGeneric__nav">
            <a href="index.php" id="homeBtn">Home</a>
            <p>|</p>
            <a href="about.php" id="currentBtn">About Us</a>
        </div>
    </section>

    <section class="aboutintro">
        <iframe class="aboutintro__video"
            src="https://www.youtube.com/embed/H1CIBqDeWQ0?controls=0&mute=1&showinfo=0&rel=0&autoplay=1&loop=1&playlist=H1CIBqDeWQ0"></iframe>
        <p class="aboutintro__par">Hello. Our hotel has been present for over 20 years. We make the best for all our
            customers.</p>
        <div class="aboutintro__featuresContainer">
            <div class="aboutintro__featuresContainer__item">
                <img src="./assets/about/breakfast.png" alt="">
                <p>BREAKFAST</p>
            </div>
            <div class="aboutintro__featuresContainer__item gold">
                <img src="./assets/about/plane.png" alt="">
                <p>AIRPORT PICKUP</p>
            </div>
            <div class="aboutintro__featuresContainer__item">
                <img src="./assets/about/guide.png" alt="">
                <p>CITY GUIDE</p>
            </div>
            <div class="aboutintro__featuresContainer__item" id="bbq">
                <img src="./assets/about/bbq.png" alt="">
                <p>BBQ PARTY</p>
            </div>
            <div class="aboutintro__featuresContainer__item">
                <img src="./assets/about/luxury.png" alt="">
                <p>LUXURY ROOM</p>
            </div>
        </div>
    </section>

    <section class="restaurant">
        <img class="restaurant__img" src="./assets/about/restaurant.jpg" alt="">
        <div class="restaurant__container">
            <h1 class="restaurant__container__title">RESTAURANT</h1>
            <h2 class="restaurant__container__subtitle">Get Restaurant Facilities & Many Other More</h2>
            <p class="restaurant__container__par">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip.</p>
            <button class="restaurant__container__btn">TAKE A TOUR</button>
        </div>
    </section>

    <section class="facilities dark">
        <h1 class="facilities__title">FACILITIES</h1>
        <h2 class="facilities__subtitle">Core Features</h2>
        <div id="facilities__slider" class="swiper facilities__slider">
            <div class="swiper-wrapper facilities__slider__container">

                <div class="swiper-slide facilities__slider__container__item darkLight"
                    style="background-image: url(./assets/about/01.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature1.png">
                    <h1 class="facilities__slider__container__item__title">Have High Rating</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="swiper-slide facilities__slider__container__item darkLight"
                    style="background-image: url(./assets/about/02.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature2.png">
                    <h1 class="facilities__slider__container__item__title">Quiet Hours</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="swiper-slide facilities__slider__container__item darkLight"
                    style="background-image: url(./assets/about/03.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature3.png">
                    <h1 class="facilities__slider__container__item__title">Best Locations</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="swiper-slide facilities__slider__container__item darkLight"
                    style="background-image: url(./assets/about/04.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature4.png">
                    <h1 class="facilities__slider__container__item__title">Free Cancellation</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="swiper-slide facilities__slider__container__item darkLight"
                    style="background-image: url(./assets/about/05.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature5.png">
                    <h1 class="facilities__slider__container__item__title">Payment Options</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="swiper-slide facilities__slider__container__item darkLight"
                    style="background-image: url(./assets/about/06.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature6.png">
                    <h1 class="facilities__slider__container__item__title">Special Offers</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>

    <section class="counter">
        <h1 class="counter__title"> COUNTER</h1>
        <h2 class="counter__subtitle">Some Fun Facts</h2>
        <div class="counter__facts">
            <div class="counter__facts__item">
                <img src="./assets/about/fact1.png" alt="">
                <div class="counter__facts__item__description">
                    <p class="counter__facts__item__description__num">8000</p>
                    <p class="counter__facts__item__description__par">Happy Users</p>
                </div>
                <img src="./assets/about/arrow.png" alt="">
            </div>
            <div class="counter__facts__item">
                <img src="./assets/about/fact2.png" alt="">
                <div class="counter__facts__item__description">
                    <p class="counter__facts__item__description__num">10M</p>
                    <p class="counter__facts__item__description__par">Reviews & Appriciate</p>
                </div>
                <img src="./assets/about/arrow.png" alt="">
            </div>
            <div class="counter__facts__item">
                <img src="./assets/about/fact3.png" alt="">
                <div class="counter__facts__item__description">
                    <p class="counter__facts__item__description__num">100</p>
                    <p class="counter__facts__item__description__par">Country Coverage</p>
                </div>
                <img src="./assets/about/arrow.png" alt="">
            </div>
        </div>


        <div class="swiper counter__slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img id="counterImg" src="./assets/about/counter1.jpg" alt=""></div>
                <div class="swiper-slide"><img id="counterImg" src="./assets/about/counter2.jpg" alt=""></div>

            </div>
            <div class="swiper-pagination"></div>

        </div>
    </section>
@endsection
<script src="./js/swiper.js" type="module"></script>
