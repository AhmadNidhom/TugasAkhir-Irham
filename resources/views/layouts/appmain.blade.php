@include('layouts.appheader')

@if (Auth::user()->isAdmin==1)
@include('layouts.appsidebarlapang')
    
@else
@include('layouts.appsidebar')
    
@endif

@include('layouts.appnavbar')
@yield('content')
@include('layouts.appfooter')
