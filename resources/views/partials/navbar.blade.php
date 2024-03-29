<nav class="navbar navbar-dark bg-info justify-content-between">
    <a class="navbar-brand" href="/todos">
       <x-application-logo />
    </a>

    @auth
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                class="underline text-sm text-white"
                onclick="event.preventDefault();
                    this.closest('form').submit();">
                        {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    @else
        <a class="underline text-sm text-white" href="{{ route('login') }}">
            {{ __('Log in') }}
        </a>
    @endauth
</nav>
