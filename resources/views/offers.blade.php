@extends('layout')
@section('title', 'Offers')
@section('content')
    <section class="bannerGeneric">
        <p class="bannerGeneric__title">THE ULTIMATE LUXURY EXPERIENCE</p>
        <h1 class="bannerGeneric__subtitle">Our Offers</h1>
        <div class="bannerGeneric__nav">
            <a href="{{ route('index') }}" id="homeBtn">Home</a>
            <p>|</p>
            <a href="{{ route('offers') }}" id="currentBtn">Offers</a>
        </div>
    </section>

    <section class="offermain">
        @foreach ($rooms as $room)
            <div class="offermain__item">
                <a href="{{ route('room_details', ['room' => $room['id']]) }}"><img
                        src="{{ $room['photos'][0]['photo'] }}" alt=""></a>
                <div class="offermain__item-card">
                    <div class="offermain__item__container1">
                        <div class="offermain__item__container1__titles">
                            <h1>Room Number {{ $room['room_number'] }}</h1>
                            <a href="{{ route('room_details', ['room' => $room['id']]) }}">{{ $room['room_type'] }}</a>
                        </div>
                        <div class="offermain__item__container1__prices">
                            <p>${{ $room['price'] }}/Night</p>
                            <p>${{ $room->discountPrice() }}/Night</p>
                        </div>
                    </div>
                    <div class="offermain__item__container2">
                        <div class="offermain__item__container2__description">
                            <p>{{ $room['description'] }}</p>
                            <a href="{{ route('room_details', ['room' => $room['id']]) }}" class="button">BOOK NOW</a>
                        </div>
                        <div class="offermain__item__container2__list">
                            <ul>
                                @foreach ($room['amenity'] as $amenity)
                                    <li><img src="{{ $amenity->getAmenitiesIcon() }}">{{ $amenity['name'] }}</li>
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
                        <img id="roomsImg" src="{{ $room['photos'][0]['photo'] }}" alt="">
                        <div id="amenities_frame">
                            @foreach ($room['amenity'] as $amenity)
                                <img src="{{ $amenity->getAmenitiesIcon() }}" id="roomsComplement">
                            @endforeach
                        </div>
                        <h1 class="popularList__slider__wrapper__slide__title">{{ $room['room_type'] }}</h1>
                        <p class="popularList__slider__wrapper__slide__par">{{ $room['description'] }}</p>
                        <span class="popularList__slider__wrapper__slide__price">${{ $room['price'] }}/Night</span>
                        <a href="{{ route('room_details', ['room' => $room['id']]) }}">Book Now</a>
                    </div>
                @endforeach
            </div>

            <div class="popularList__slider__backArrow">&#10094;</div>
            <div class="popularList__slider__forwardArrow">&#10095;</div>

        </div>

    </section>
@endsection
<script src={{ asset('./js/swiper.js') }} type="module"></script>
