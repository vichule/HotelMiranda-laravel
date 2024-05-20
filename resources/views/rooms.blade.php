@extends('layout')
@section('title', 'Rooms')
@section('content')
    <section class="bannerGeneric">
        <p class="bannerGeneric__title">THE ULTIMATE LUXURY EXPERIENCE</p>
        <h1 class="bannerGeneric__subtitle">Ultimate Room</h1>
        <div class="bannerGeneric__nav">
            <a href="index.php" id="homeBtn">Home</a>
            <p>|</p>
            <a href="rooms.php" id="currentBtn">Rooms</a>
        </div>
    </section>

    <section class="roomsGrid">
        <div class="swiper roomsGrid__slider">
            <div class="swiper-wrapper ">
                @foreach ($rooms as $room)
                    <div class="swiper-slide popularList__slider__wrapper__slide">
                        <img src="{{ json_decode($room['photo_url'])[0] }}" alt="">
                        <div id="amenities_frame">
                            @foreach (json_decode($room['amenity_name']) as $amenity)
                                <img src="{{ getAmenities($amenity) }}" id="roomsComplement">
                            @endforeach
                        </div>
                        <h1 class="popularList__slider__wrapper__slide__title">{{ $room['room_type'] }}</h1>
                        <p class="popularList__slider__wrapper__slide__par">{{ $room['description'] }}</p>
                        <span
                            class="popularList__slider__wrapper__slide__price">${{ discountPrice($room['discount'], $room['price']) }}/Night</span>
                        <a href="room_details.php?id={{ $room['room_id'] }}">Book Now</a>
                    </div>
                @endforeach


            </div>

            <div class="swiper-pagination"></div>
    </section>
@endsection
<script src="./js/swiper.js" type="module"></script>
