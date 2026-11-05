<!DOCTYPE html>
<html lang="id">
{{-- bagian head --}}
@include('kue.partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('kue.components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
