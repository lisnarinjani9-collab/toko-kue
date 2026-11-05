<!DOCTYPE html>
<html lang="id">
{{-- bagian head --}}
@include('pembeli.partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('pembeli.components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
