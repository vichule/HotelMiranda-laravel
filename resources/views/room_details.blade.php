@extends('layout')
@section('title', 'Room Details')
@section('content')
    <section class="bannerGeneric">
        <p class="bannerGeneric__title">THE ULTIMATE LUXURY EXPERIENCE</p>
        <h1 class="bannerGeneric__subtitle">Ultimate Room</h1>
        <div class="bannerGeneric__nav">
            <a href="index.php" id="homeBtn">Home</a>
            <p>|</p>
            <a href="room_details.php?id={{ $room['room_id'] }}" id="currentBtn">Room Details</a>
        </div>
    </section>

    <section class="details">
        <div class="details-container">
            <div class="details-container__item">
                <div class="details-container__item__text">
                    <h1>Room Number {{ $room['room_number'] }}</h1>
                    <div id="titleDiv">
                        <h4>{{ $room['room_type'] }}</h4>
                        <p>${{ discountPrice($room['discount'], $room['price']) }}/Night</p>
                    </div>
                </div>
                <div class="details-container__image">
                    <img src="{{ json_decode($room['photo_url'])[0] }}" alt="">
                </div>
            </div>
            <div class="details-container__item">

                <form action="" class="details-container__form" method="POST">
                    <h2>Check Availability</h2>
                    {{-- <input type="hidden" name="room_id" id="room_id" value="{{ $room['id'] }}"> --}}
                    <ul>
                        <li>
                            <label for="checkin" class="">Check In</label>
                            <input type="date" id="check_in" name="check_in" min="2024-03-01" max="2028-12-31"
                                class="" />
                        </li>
                        <li>
                            <label for="checkout" class="">Check Out</label>
                            <input type="date" id="check_out" name="check_out" min="2024-03-25" max="2028-12-31"
                                class="" />
                        </li>
                        <li>
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name">
                        </li>
                        <li>
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="last_name">
                        </li>
                        <li>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </li>
                        <li>
                            <label for="phone">Phone</label>
                            <input type="tel" name="phone" id="phone">
                        </li>
                        <li>
                            <label for="message">Special Message</label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </li>
                        <li>
                            <input type="submit" value="BOOK ROOM" class="checkBtn" />
                        </li>
                    </ul>
                </form>
            </div>
        </div>

        <p id="introPar">{{ $room['description'] }}</p>
    </section>

    <section class="amenities">
        <h4>Amenities</h4>
        <div class="amenities-list">
            <ul>
                @foreach (json_decode($room['amenity_name']) as $amenity)
                    <li><img src="{{ getAmenities($amenity) }}">{{ $amenity }}</li>
                @endforeach

            </ul>

        </div>
        <div class="amenities-profile">
            <div class="amenities-profile__checkmark">&#10003;</div>
            <img src="./assets/detailsroom/image2.jpeg" alt="">
            <h4>Javier Cab.D.</h4>
            <h2>FOUNDER, QUX CO.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore.</p>
        </div>
        <div class="amenities-cancellation">
            <h4>Cancellation</h4>
            <p>Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat
                metus nec,
                luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.</p>
        </div>
    </section>

    <section class="relatedRooms">
        <h4>Related Rooms</h4>
        <div class="swiper relatedRooms-slider">
            <div class="swiper-wrapper relatedRooms-slider-wrapper">
                @foreach ($related as $room)
                    <div class="swiper-slide relatedRooms-slider__slide">
                        <img id="roomsImg" src="{{ json_decode($room['photo_url'])[0] }}" alt="">
                        <div id="amenities_frame">
                            @foreach (json_decode($room['amenity_name']) as $amenity)
                                <img src="{{ getAmenities($amenity) }}" id="roomsComplement">
                            @endforeach
                        </div>
                        <h1 class="relatedRooms-slider__slide__title">{{ $room['room_type'] }}</h1>
                        <p class="relatedRooms-slider__slide__par">{{ $room['description'] }}</p>
                        <span
                            class="relatedRooms-slider__slide__price">${{ discountPrice($room['discount'], $room['price']) }}/Night</span>
                        <a href="room_details.php?id={{ $room['room_id'] }}">Book Now</a>
                    </div>
                @endforeach
            </div>

            <div class="relatedRooms-slider__backArrow" id="backArrowRelated">&#10094;</div>
            <div class="relatedRooms-slider__forwardArrow" id="forwardArrowRelated">&#10095;</div>

        </div>
    </section>
@endsection
<script src="./js/swiper.js" type="module"></script>
