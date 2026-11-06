<!DOCTYPE html>
<html lang="id">
{{-- bagian head --}}
@include('bahan_baku.partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('bahan_baku.components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
