@extends('layout')
@section('title', 'Rooms')
@section('content')
    <section class="bannerGeneric">
        <p class="bannerGeneric__title">THE ULTIMATE LUXURY EXPERIENCE</p>
        <h1 class="bannerGeneric__subtitle">Ultimate Room</h1>
        <div class="bannerGeneric__nav">
            <a href="{{ route('index') }}" id="homeBtn">Home</a>
            <p>|</p>
            <a href="{{ route('rooms') }}" id="currentBtn">Rooms</a>
        </div>
    </section>

    <section class="roomsGrid">
        <div class="swiper roomsGrid__slider">
            <div class="swiper-wrapper ">
                @foreach ($rooms as $room)
                    <div class="swiper-slide popularList__slider__wrapper__slide">
                        <img src="{{ $room['photos'][0]['photo'] }}" alt="">
                        <div id="amenities_frame">
                            @foreach ($room['amenity'] as $amenity)
                                <img src="{{ $amenity->getAmenitiesIcon() }}" id="roomsComplement">
                            @endforeach
                        </div>
                        <h1 class="popularList__slider__wrapper__slide__title">{{ $room['room_type'] }}</h1>
                        <p class="popularList__slider__wrapper__slide__par">{{ $room['description'] }}</p>
                        <span class="popularList__slider__wrapper__slide__price">${{ $room->discountPrice() }}/Night</span>
                        <a href="{{ route('room_details', ['room' => $room['id']]) }}">Book Now</a>
                    </div>
                @endforeach


            </div>

            <div class="swiper-pagination"></div>
    </section>
@endsection
<script src={{ asset('./js/swiper.js') }} type="module"></script>
