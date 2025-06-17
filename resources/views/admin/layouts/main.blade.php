



@include('admin.layouts.head')


@include('admin.layouts.sidebar')

@include('admin.layouts.navbar')


@yield('content')
@include('admin.layouts.footer')
      
@include('admin.layouts.scripts')