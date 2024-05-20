@extends('layout')
@section('title', 'Home')
@section('content')
    <section class="banner">
        <p class="banner__title">THE ULTIMATE LUXURY EXPERIENCE</p>
        <h1 class="banner__subtitle">The Perfect Base For You</h1>
        <a href="about.php"><button class="banner__indexBtn1">TAKE A TOUR</button></a>


        <a href="contact.php"><button class="banner__indexBtn2">LEARN MORE</button></a>
    </section>
    <section class="dateCheck">
        <form id="datecheckform" class="dateCheck__container" action="rooms.php">
            <div>
                <label for="arrival" class="dateCheck__container__label">Arrival Date</label>
                <input type="date" id="arrival" name="arrival" min="2024-03-01" max="2028-12-31"
                    class="dateCheck__container__input1" />
            </div>
            <div>
                <label for="departure" class="dateCheck__container__label">Departure Date</label>
                <input type="date" id="departure" name="departure" min="2024-03-25" max="2028-12-31"
                    class="dateCheck__container__input2" />
            </div>
            <button class="dateCheck__container__checkBtn">CHECK AVAILABILITY</button>
        </form>

    </section>
    <section class="homeAbout">
        <div class="homeAbout__firstContainer">
            <h1 class="homeAbout__firstContainer__title">ABOUT US</h1>
            <h2 class="homeAbout__firstContainer__subtitle">Discover Our Undergound.</h2>
            <p class="homeAbout__firstContainer__par">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            <a href="rooms.php"><button class="homeAbout__firstContainer__btn">BOOK NOW</button></a>
        </div>

        <div class="homeAbout__secondContainer">
            <div class="homeAbout__secondContainer__card1">
                <img src="./assets/home/team.jpg" alt="" class="homeAbout__secondContainer__card1__pic">
                <div class="homeAbout__secondContainer__card1__teamContainer"
                    style="background-image: url('./assets/home/backTeam.png')">
                    <img src="./assets/home/teamImg.png" alt=""
                        class="homeAbout__secondContainer__card1__teamContainer__img">
                    <h1 class="homeAbout__secondContainer__card1__teamContainer__title">Strong Team</h1>
                    <p class="homeAbout__secondContainer__card1__teamContainer__par">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>

            <div class="homeAbout__secondContainer__card2">
                <img src="./assets/home/luxury_room.jpg" alt="" class="homeAbout__secondContainer__card2__pic">
                <div class="homeAbout__secondContainer__card2__roomContainer">
                    <img src="./assets/home/teamLuxury.png" alt=""
                        class="homeAbout__secondContainer__card2__roomContainer__img">
                    <h1 class="homeAbout__secondContainer__card2__roomContainer__title">Luxury Room</h1>
                    <p class="homeAbout__secondContainer__card2__roomContainer__par">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>

    </section>
    <section class="homerooms">
        <h1 class="homerooms__title">ROOMS</h1>
        <h2 class="homerooms__subtitle">Hand Picked Rooms</h2>
        {{-- <img src="./assets/home/frame_rooms.jpg" alt="" class="homerooms__complements"> --}}
        <div class="swiper homerooms__slider">
            <div class="swiper-wrapper homerooms__slider__container">
                @foreach ($rooms as $room)
                    <div class="swiper-slide homerooms__slider__container_item">
                        <div class="homerooms__framediv">
                            @foreach (json_decode($room['amenity_name']) as $amenity)
                                <img src="{{ getAmenities($amenity) }}" class="homerooms__complements">
                            @endforeach
                        </div>
                        <img id="roomsImg" src="{{ json_decode($room['photo_url'])[0] }}" alt="">
                        <div class="homerooms__slider__descriptions">
                            <div class="homerooms__slider__descriptions__item" id="description1">
                                <div>
                                    <h1 class="homerooms__slider__descriptions__item__title">{{ $room['room_type'] }}</h1>
                                    <p class="homerooms__slider__descriptions__item__par">{{ $room['description'] }}</p>

                                </div>
                                <div>
                                    <span
                                        class="homerooms__slider__descriptions__item__price">${{ discountPrice($room['discount'], $room['price']) }}/Night</span>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="homerooms-backArrow" id="backArrow">&#10094;</div>
            <div class="homerooms-forwardArrow" id="forwardArrow">&#10095;</div>

        </div>
    </section>
    <section class="intro">
        <div class="intro__container1">
            <h1 class="intro__container1__title">INTRO VIDEO</h1>
            <h2 class="intro__container1__subtitle">Meet With Our Luxury Place.</h2>
            <p class="intro__container1__par">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
            <button class="intro__container1__btn">BOOK NOW</button>
        </div>
        <div class="intro__container2">
            <iframe class="intro__container2__video"
                src="https://www.youtube.com/embed/H1CIBqDeWQ0?controls=0&mute=1&showinfo=0&rel=0&autoplay=1&loop=1&playlist=H1CIBqDeWQ0"></iframe>
        </div>
    </section>
    <section class="facilities">
        <h1 class="facilities__title">FACILITIES</h1>
        <h2 class="facilities__subtitle">Core Features</h2>
        <div id="facilities__slider" class="swiper facilities__slider">
            <div class="swiper-wrapper facilities__slider__container">

                <div class="swiper-slide facilities__slider__container__item"
                    style="background-image: url(./assets/home/01.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature1.png">
                    <h1 class="facilities__slider__container__item__title">Have High Rating</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="swiper-slide facilities__slider__container__item"
                    style="background-image: url(./assets/home/02.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature2.png">
                    <h1 class="facilities__slider__container__item__title">Quiet Hours</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="swiper-slide facilities__slider__container__item"
                    style="background-image: url(./assets/home/03.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature3.png">
                    <h1 class="facilities__slider__container__item__title">Best Locations</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="swiper-slide facilities__slider__container__item"
                    style="background-image: url(./assets/home/04.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature4.png">
                    <h1 class="facilities__slider__container__item__title">Free Cancellation</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="swiper-slide facilities__slider__container__item"
                    style="background-image: url(./assets/home/05.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature5.png">
                    <h1 class="facilities__slider__container__item__title">Payment Options</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>
                <div class="swiper-slide facilities__slider__container__item"
                    style="background-image: url(./assets/home/06.png);">
                    <img class="facilities__slider__container__item__img" src="./assets/home/feature6.png">
                    <h1 class="facilities__slider__container__item__title">Special Offers</h1>
                    <p class="facilities__slider__container__item__par">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
                </div>

            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>
    <section class="menu" style="background-image: url(./assets/home/menuIcon2.png);">
        <h1 class="menu__title">MENU</h1>
        <h2 class="menu__subtitle">Our Foods Menu</h2>


        <div class="swiper menu__sliderMenu">
            <div class="swiper-wrapper">
                <div class="swiper-slide menu__sliderMenu-slide">
                    <div class="menu__sliderMenu-slide-item" style="background-image: url(/assets/home/arrowHover.png);">
                        <div class="menu__sliderMenu-slide-item__img"><img class=""
                                src="./assets/home/bacon-egg.jpg" alt=""></div>
                        <div class="menu__sliderMenu-slide-item__text">
                            <h4>Eggs & Bacon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__sliderMenu-slide-item" style="background-image: url(/assets/home/arrowHover.png);">
                        <div class="menu__sliderMenu-slide-item__img"><img
                                src="https://c.pxhere.com/photos/2b/37/coffe_drink_cup_young_morning_breakfast_lifestyle_happy-1039445.jpg!d">
                        </div>
                        <div class="menu__sliderMenu-slide-item__text">
                            <h4>Tea or Coffee</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__sliderMenu-slide-item" style="background-image: url(/assets/home/arrowHover.png);">
                        <div class="menu__sliderMenu-slide-item__img"><img
                                src="https://c.pxhere.com/photos/d7/79/porridge_muesli_breakfast_vegan_oatmeal_chia_cocoa_nibs_orange-1277718.jpg!d"
                                alt=""></div>
                        <div class="menu__sliderMenu-slide-item__text">
                            <h4>Chia Oatmeal</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide menu__sliderMenu-slide">
                    <div class="menu__sliderMenu-slide-item" style="background-image: url(/assets/home/arrowHover.png);">
                        <div class="menu__sliderMenu-slide-item__img"><img
                                src="https://c.pxhere.com/photos/1e/e0/breakfast_vegan_healthy_eat_tasty_of_course_well_being_happy-553245.jpg!d"
                                alt=""></div>
                        <div class="menu__sliderMenu-slide-item__text">
                            <h4>Fruit Parfait</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__sliderMenu-slide-item" style="background-image: url(/assets/home/arrowHover.png);">
                        <div class="menu__sliderMenu-slide-item__img"><img class=""
                                src="./assets/home/marmalade.jpg" alt=""></div>
                        <div class="menu__sliderMenu-slide-item__text">
                            <h4>Marmalade Selection</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__sliderMenu-slide-item" style="background-image: url(/assets/home/arrowHover.png);">
                        <div class="menu__sliderMenu-slide-item__img"><img
                                src="https://c.pxhere.com/photos/6e/eb/k_seplatte_cheese_party_buffet_cheese_plate_hearty_breakfast_food-751711.jpg!d"
                                alt=""></div>
                        <div class="menu__sliderMenu-slide-item__text">
                            <h4>Cheese Plate</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide menu__sliderMenu-slide">
                    <div class="menu__sliderMenu-slide-item" style="background-image: url(/assets/home/arrowHover.png);">
                        <div class="menu__sliderMenu-slide-item__img"><img class=""
                                src="./assets/home/bacon-egg.jpg" alt=""></div>
                        <div class="menu__sliderMenu-slide-item__text">
                            <h4>Eggs & Bacon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__sliderMenu-slide-item" style="background-image: url(/assets/home/arrowHover.png);">
                        <div class="menu__sliderMenu-slide-item__img"><img
                                src="https://c.pxhere.com/photos/39/a8/coffee_cafe_mug_decorative_drink_beverage_latte_cappuccino-847370.jpg!d"
                                alt="coffee cup"></div>
                        <div class="menu__sliderMenu-slide-item__text">
                            <h4>Tea or Coffee</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__sliderMenu-slide-item" style="background-image: url(/assets/home/arrowHover.png);">
                        <div class="menu__sliderMenu-slide-item__img"><img
                                src="https://c.pxhere.com/photos/d7/79/porridge_muesli_breakfast_vegan_oatmeal_chia_cocoa_nibs_orange-1277718.jpg!d"
                                alt=""></div>
                        <div class="menu__sliderMenu-slide-item__text">
                            <h4>Chia Oatmeal</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu__sliderMenu__backArrow" id="backArrow">&#10094;</div>
            <div class="menu__sliderMenu__forwardArrow" id="forwardArrow">&#10095;</div>

        </div>

        <div class="menu__sliderPics swiper">
            <div class="menu__sliderPics__container swiper-wrapper">
                <div class="menu__sliderPics__container__item swiper-slide">
                    <img class="menu__sliderPics__container__item__img" id="imgCarousel"
                        src="./assets/home/restaurantMeal.jpg">
                </div>

                <div class="menu__sliderPics__container__item swiper-slide ">
                    <img class="menu__sliderPics__container__item__img" id="imgCarousel" src="./assets/home/kitchen.jpg">
                </div>

                <div class="menu__sliderPics__container__item swiper-slide ">
                    <img class="menu__sliderPics__container__item__img" id="imgCarousel"
                        src="https://c.pxhere.com/photos/d9/af/coffee_coffee_beans_drink_caffeine_beverage_brown_espresso_beans-635680.jpg!d">
                </div>
            </div>
            <div class="swiper-pagination "></div>
        </div>
    </section>
    <section class="stats">
        <div class="stats__item">
            <img class="stats__item__img" src="./assets/home/stats1.png" alt="">
            <h2 class="stats__item__num">84k+</h2>
            <p class="stats__item__par">Projects are completed</p>
        </div>
        <div class="stats__item">
            <img class="stats__item__img" src="./assets/home/stats2.png" alt="">
            <h2 class="stats__item__num">10M+</h2>
            <p class="stats__item__par">Active Backers Around World</p>
        </div>
        <div class="stats__item">
            <img class="stats__item__img" src="./assets/home/stats3.png" alt="">
            <h2 class="stats__item__num">02k+</h2>
            <p class="stats__item__par">Categories Served</p>
        </div>
        <div class="stats__item">
            <img class="stats__item__img" src="./assets/home/stats4.png" alt="">
            <h2 class="stats__item__num">100M+</h2>
            <p class="stats__item__par">Idea Raised Funds</p>
        </div>

    </section>
@endsection
<script src="./js/swiper.js" type="module"></script>
