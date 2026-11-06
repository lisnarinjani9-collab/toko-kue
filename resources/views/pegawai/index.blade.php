<!DOCTYPE html>
<html lang="id">
{{-- bagian head --}}
@include('pegawai.partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('pegawai.components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
