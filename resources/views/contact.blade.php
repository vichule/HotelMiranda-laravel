@extends('layout')
@section('title', 'Contact')
@section('content')
    <section class="bannerGeneric">
        <p class="bannerGeneric__title">THE ULTIMATE LUXURY EXPERIENCE</p>
        <h1 class="bannerGeneric__subtitle">New Details</h1>
        <div class="bannerGeneric__nav">
            <a href="index.php" id="homeBtn">Home</a>
            <p>|</p>
            <a href="contact.php" id="currentBtn">Blog</a>
        </div>
    </section>

    <section class="contactIntro">

        <div class="contactIntro__information">
            <div class="footerContainer__main__contact__item back01">
                <img class="footerContainer__main__contact__item__img" src="./assets/footer/address-icon.png"
                    alt="">
                <div class="footerContainer__main__contact__item__description">
                    <h1 class="footerContainer__main__contact__item__description__title">Hotel Address</h1>
                    <p class="footerContainer__main__contact__item__description__par">Madrid, Spain.</p>
                </div>
            </div>
            <div class="footerContainer__main__contact__item back02">
                <img class="footerContainer__main__contact__item__img" src="./assets/footer/phone-icon.png" alt="">
                <div class="footerContainer__main__contact__item__description">
                    <h1 class="footerContainer__main__contact__item__description__title">Phone Number</h1>
                    <p class="footerContainer__main__contact__item__description__par">999999999</p>
                </div>
            </div>
            <div class="footerContainer__main__contact__item back03">
                <img class="footerContainer__main__contact__item__img" src="./assets/footer/email-icon.png" alt="">
                <div class="footerContainer__main__contact__item__description">
                    <h1 class="footerContainer__main__contact__item__description__title">Email</h1>
                    <p class="footerContainer__main__contact__item__description__par">fakeemail1@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="contactIntro__google-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.1328875022737!2d-3.717276088381854!3d40.428056271318695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4229fc15efcb09%3A0xb0036150b0cd3867!2sOXYGEN%20Academy%20%7C%20Full%20Stack%20Bootcamps!5e0!3m2!1ses!2ses!4v1709047244567!5m2!1ses!2ses"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="contactForm">
        <form class="contactForm__form" method="POST">
            <ul>
                <div class="contactForm__form__inputContainer">
                    <li>
                        <input type="text" name="first_name" class="field-style field-full"
                            placeholder="Your first name" />
                    </li>
                    <li>
                        <input type="text" name="last_name" class="field-style field-full"
                            placeholder="Your last name" />
                    </li>


                </div>

                <div class="contactForm__form__inputContainer">
                    <li>
                        <input type="email" name="email" class="field-style field-full"
                            placeholder="Enter email address" />
                    </li>
                    <li>
                        <input type="text" name="phone" class="field-style field-full"
                            placeholder="Add phone number" />
                    </li>
                </div>
                <div class="contactForm__form__inputContainer">

                    <li>
                        <input type="text" name="subject" class="field-style field-full" placeholder="Enter subject" />
                    </li>
                </div>
                <li>
                    <textarea name="message" class="field-style" placeholder="Enter message"></textarea>
                </li>
                <li>
                    <input type="submit" value="SEND" class="contactBtn" />
                </li>
            </ul>
        </form>
    </section>
@endsection
