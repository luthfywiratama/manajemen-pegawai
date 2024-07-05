 <meta charset="utf-8">
 <title>@yield('title')</title>
 <meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
 <meta name="description" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta property="og:title" content="">
 <meta property="og:type" content="">
 <meta property="og:url" content="">
 <meta property="og:image" content="">

 <!-- Favicon -->
 <!-- Template CSS -->
 @stack('prepend-style')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
 <link href="{{ asset('admin/assets/css/vendors/font-awesome.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('admin/assets/css/vendors/material-icon-round.css') }}" rel="stylesheet" type="text/css" />
 <link href="{{ asset('admin/assets/css/main.css') }}" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
 <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
 <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
 @stack('addon-style')
