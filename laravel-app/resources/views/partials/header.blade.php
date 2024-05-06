<header
      class="sticky top-0 z-50 w-full bg-primary-grey-100 shadow-md lg:px-10"
    >
      @if(auth()->check() and false) {{--&& auth()->user()->isAdmin()--}}
        @include('partials.nav-admin')  <!-- Navigation for admin -->
      @else
        @include('partials.nav')  <!-- Navigation for regular users/guests -->
      @endif
</header>
