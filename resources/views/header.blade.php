<header>

    <div class="header__container">
        <p id="headerPar">We Make Your Feel Comfortable</p>
        <div class="header__container__item1">
            <button class="header__button">
                <img src="./assets/header/menu.png" id="menuClosed">
                <img src="./assets/header/menu2.png" id="menuOpened" class="hidden">
            </button>
            <a href="index.php" class="header__logo"></a>
        </div>

        <ul class="header__container__navbar hidden">
            <a href="{{ route('about') }}">
                <li>About Us</li>
            </a>
            <a href="{{ route('rooms') }}">
                <li>Rooms</li>
            </a>
            <a href="{{ route('offers') }}">
                <li>Offers</li>
            </a>
            <a href="{{ route('contact') }}">
                <li>Contact</li>
            </a>
        </ul>

        <div class="header__container__item2">
            <button class="header__button"><img src="./assets/header/profile.png"></button>
            <button class="header__button"><img src="./assets/header/search.png"></button>
        </div>

    </div>
    <ul class="header__mobile-menu hidden">
        <a href="{{ route('about') }}">
            <li>About Us</li>
        </a>
        <a href="{{ route('rooms') }}">
            <li>Rooms</li>
        </a>
        <a href="{{ route('offers') }}">
            <li>Offers</li>
        </a>
        <a href="{{ route('contact') }}">
            <li>Contact</li>
        </a>
    </ul>
</header>
