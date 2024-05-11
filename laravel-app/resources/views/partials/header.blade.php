<header class="sticky top-0 z-50 w-full bg-primary-grey-100 shadow-md lg:px-10">
  <!-- request()->is('admin*') checks if the current URL includes a segment that starts with admin. -->
  @if (auth()->check() && Auth::user()->isAdministrator() && request()->is("admin*"))
    @include("partials.nav-admin") <!-- Navigation for admin -->
  @else
    @include("partials.nav") <!-- Navigation for regular users/guests -->
  @endif
</header>
