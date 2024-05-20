@extends('layout')
@section('title', 'Offers')
@section('content')
    <section class="bannerGeneric">
        <p class="bannerGeneric__title">THE ULTIMATE LUXURY EXPERIENCE</p>
        <h1 class="bannerGeneric__subtitle">Our Offers</h1>
        <div class="bannerGeneric__nav">
            <a href="index.php" id="homeBtn">Home</a>
            <p>|</p>
            <a href="offers.php" id="currentBtn">Offers</a>
        </div>
    </section>

    <section class="offermain">
        @foreach ($rooms as $room)
            <div class="offermain__item">
                <a href="room_details.php?id={{ $room['room_id'] }}"><img src="{{ json_decode($room['photo_url'])[0] }}"
                        alt=""></a>
                <div class="offermain__item-card">
                    <div class="offermain__item__container1">
                        <div class="offermain__item__container1__titles">
                            <h1>Room Number {{ $room['room_number'] }}</h1>
                            <a href="room_details.php?id={{ $room['room_id'] }}">{{ $room['room_type'] }}</a>
                        </div>
                        <div class="offermain__item__container1__prices">
                            <p>${{ $room['price'] }}/Night</p>
                            <p>${{ discountPrice($room['discount'], $room['price']) }}/Night</p>
                        </div>
                    </div>
                    <div class="offermain__item__container2">
                        <div class="offermain__item__container2__description">
                            <p>{{ $room['description'] }}</p>
                            <a href="room_details.php?id={{ $room['room_id'] }}" class="button">BOOK NOW</a>
                        </div>
                        <div class="offermain__item__container2__list">
                            <ul>
                                @foreach (json_decode($room['amenity_name']) as $amenity)
                                    <li><img src="{{ getAmenities($amenity) }}">{{ $amenity }}</li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>

    <section class="popularList">
        <h1 class="popularList__title">POPULAR LIST</h1>
        <h3 class="popularList__subtitle">Popular Rooms</h3>
        <div class="swiper popularList__slider">
            <div class="swiper-wrapper popularList__slider__wrapper">
                @foreach ($popular as $room)
                    <div class="swiper-slide popularList__slider__wrapper__slide">
                        <img id="roomsImg" src="{{ json_decode($room['photo_url'])[0] }}" alt="">
                        <div id="amenities_frame">
                            @foreach (json_decode($room['amenity_name']) as $amenity)
                                <img src="{{ getAmenities($amenity) }}" id="roomsComplement">
                            @endforeach
                        </div>
                        <h1 class="popularList__slider__wrapper__slide__title">{{ $room['room_type'] }}</h1>
                        <p class="popularList__slider__wrapper__slide__par">{{ $room['description'] }}</p>
                        <span class="popularList__slider__wrapper__slide__price">${{ $room['price'] }}/Night</span>
                        <a href="room_details.php?id={{ $room['room_id'] }}">Book Now</a>
                    </div>
                @endforeach
            </div>

            <div class="popularList__slider__backArrow">&#10094;</div>
            <div class="popularList__slider__forwardArrow">&#10095;</div>

        </div>

    </section>
@endsection
<script src="./js/swiper.js" type="module"></script>
