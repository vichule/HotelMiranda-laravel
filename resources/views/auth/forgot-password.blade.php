<x-guest-layout>
    @section('content')
        <section class="bannerGeneric">
            <p class="bannerGeneric__title">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="bannerGeneric__subtitle">Password</h1>
            <div class="bannerGeneric__nav">
                <a href="{{ route('index') }}" id="homeBtn">Home</a>
                <p>|</p>
                <a href="{{ route('login') }}" id="currentBtn">Login</a>
            </div>
        </section>
        <div id="center-div">
            <div class="mb-4 text-gray-600 text-xl">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
        
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
        
            <form method="POST" action="{{ route('password.email') }}"  >
                @csrf
        
                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button style="background-color:#BEAD8E;" >
                        {{ __('Email Password Reset Link') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    
    @endsection
</x-guest-layout>
