@component('head')
@endcomponent

<body>
    @component('header')
    @endcomponent
    <script>
        @if (session('success'))
            Swal.fire({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                icon: 'success',
                title: "{{ session('success') }}",

            });
        @endif

        @if (session('error'))
            Swal.fire({
                toast: true,
                position: "bottom-end",
                showConfirmButton: false,
                timer: 3000,
                icon: 'error',
                title: 'Error',
                text: "{{ session('error') }}",
            });
        @endif
    </script>
    @section('content')
    @show
    @component('footer')
    @endcomponent
    @php
        session()->forget(['error','success']); 
    @endphp
</body>
