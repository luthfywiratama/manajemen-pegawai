<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('admin.includes.head')
</head>

<body>
    <div class="screen-overlay"></div>
    @include('admin.includes.sidebar')
    <main class="main-wrap">
        @include('admin.includes.header')
        <section class="content-main">
            @if (session()->has('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Success</strong> {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @yield('content')
        </section>
        @include('admin.includes.footer')
    </main>
    @yield('modal')
    @include('admin.includes.modal_delete')

    @stack('prepend-script')
    @include('admin.includes.scripts')
    @stack('addon-script')

</body>

</html>
