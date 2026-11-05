<!DOCTYPE html>
<html lang="id">
{{-- bagian head --}}
@include('partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
