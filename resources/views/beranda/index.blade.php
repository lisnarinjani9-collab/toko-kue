<!DOCTYPE html>
<html lang="id">
{{-- bagian head --}}
@include('beranda.partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('beranda.components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
