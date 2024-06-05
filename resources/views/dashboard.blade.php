<x-app-layout>
    @section('content')
        <section class="bannerGeneric">
            <p class="bannerGeneric__title">THE ULTIMATE LUXURY EXPERIENCE</p>
            <h1 class="bannerGeneric__subtitle">Dashboard</h1>
            <div class="bannerGeneric__nav">
                <a href="{{ route('index') }}" id="homeBtn">Home</a>
                <p>|</p>
                <div>
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button
                                class="inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150 "
                                style="color: #BEAD8E;">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </section>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12" style="padding: 0.5rem">
            <div class="px-10 max-w-7xl mx-auto sm:px-6 lg:px-8 ">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        Welcome to your Dashboard {{ Auth::user()->name }}! Here you can edit, review or place new orders !
                    </div>
                </div>
                <div>
                    <button class="orderBtn" x-data=""
                        x-on:click.prevent="$dispatch('open-modal', {name: 'place-user-order', data: {}})">New
                        Order</button>



                </div>
            </div>
            <div id="center-div">
                <table>
                    <tr>
                        <th>Order Type</th>
                        <th>Description</th>
                        <th>Room Number</th>
                        <th>Options</th>
                    </tr>
                    @if (count($order) > 0)
                        @foreach ($order as $order)
                            <tr>
                                <td>{{ $order->type }}</td>
                                <td>{{ $order->description }}</td>
                                <td>Room {{ $order->room->room_number }}</td>
                                <td><x-secondary-button x-data=""
                                        x-on:click.prevent="$dispatch('open-modal',{
                                        name:'confirm-order-deletion', 
                                        data: {
                                            id: {{ $order->id }}
                                        }})">
                                        <i class="fa-solid fa-delete-left"></i>
                                    </x-secondary-button>
                                    <x-secondary-button x-data=""
                                        x-on:click.prevent="$dispatch('open-modal',{
                                        name:'confirm-order-edit',
                                        data: {
                                            id: {{ $order->id }},
                                            type: '{{ $order->type }}',
                                            description: '{{ $order->description }}'
                                        }})">
                                        <i class="fa-solid fa-pen"></i>
                                    </x-secondary-button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td>Food</td>
                            <td>Noodles with pork</td>
                            <td>13</td>
                        </tr>
                        <tr>
                            <td>Food</td>
                            <td>Pizza Margarita</td>
                            <td>11</td>
                        </tr>
                        <tr>
                            <td>Other</td>
                            <td>Champagne</td>
                            <td>7</td>
                        </tr>
                    @endif


                </table>
            </div>
        </div>
        {{-- new order modal --}}
        <x-modal name="place-user-order" :show="$errors->userDeletion->isNotEmpty()" focusable>
            <form method="post" action="{{ route('order.store') }}" class="p-6">
                @csrf
                <h1>- New Order -</h1>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Please fill all the options in order to place a new order:') }}
                </h2>

                <div>
                    <x-input-label for="room_id" :value="__('Room Number')" />
                    <select name="room_id" id="room" class="w-full">
                        @foreach ($rooms as $room)
                            <option value="{{ $room->id }}">Room {{ $room->room_number }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('room_id')" />
                </div>

                <div>
                    <x-input-label for="type" :value="__('Order Type')" />
                    <select name="type" id="type" class="w-full">
                        @foreach ($type as $order_type)
                            <option value="{{ $order_type }}">{{ $order_type }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('type')" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea name="description" id="description" cols="30" rows="5" class="w-full"></textarea>
                    <x-input-error :messages="$errors->get('description')" />
                </div>

                <div class="mt-6 flex">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-primary-button class="ms-3" style="background-color:#BEAD8E; color: white;">
                        {{ __('Place New Order') }}
                    </x-primary-button>
                </div>

            </form>
        </x-modal>
        {{-- end order modal --}}
        {{-- delete order modal --}}
        <x-modal name="confirm-order-deletion" focusable>
            <form method="post" action="{{ route('order.destroy') }}" class="p-6">
                @csrf
                @method('delete')

                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Are you sure you want to delete this order?') }}
                </h2>

                <div class="mt-6 flex">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-danger-button class="ms-3">
                        {{ __('Delete Order') }}
                    </x-danger-button>
                </div>
                <input type="hidden" name="id" x-bind:value="data.id">
            </form>
        </x-modal>
        {{-- end delete modal --}}
        {{-- edit order modal --}}
        <x-modal name="confirm-order-edit" focusable>
            <form method="post" action="{{ route('order.update') }}" class="p-6">
                @method('patch')
                @csrf
                <h1>- Edit Order -</h1>
                <h2 class="text-lg font-medium text-gray-900">
                    {{ __('Please fill all the options in order to update the order:') }}
                </h2>

                <div>
                    <x-input-label for="type" :value="__('Order Type')" />
                    <select x-bind:value="data.type" name="type" id="type" class="w-full">
                        @foreach ($type as $order_type)
                            <option value="{{ $order_type }}">{{ $order_type }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('type')" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <textarea x-bind:value="data.description" name="description" id="description" cols="30" rows="5"
                        class="w-full"></textarea>
                    <x-input-error :messages="$errors->get('description')" />
                </div>

                <div class="mt-6 flex">
                    <x-secondary-button x-on:click="$dispatch('close')">
                        {{ __('Cancel') }}
                    </x-secondary-button>

                    <x-primary-button class="ms-3" style="background-color:#BEAD8E; color: white;">
                        {{ __('Edit Order') }}
                    </x-primary-button>
                </div>
                <input type="hidden" name="id" x-bind:value="data.id">
            </form>
        </x-modal>
        {{-- end edit modal --}}
    @endsection
</x-app-layout>
