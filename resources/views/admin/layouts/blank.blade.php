<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('admin.includes.head')
</head>

<body>
    <main>
        @yield('content')
    </main>

    @stack('prepend-script')
    @include('admin.includes.scripts')
    @stack('addon-script')

</body>

</html>
