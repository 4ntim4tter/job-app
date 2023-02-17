@guest('admin')
    @guest('web')
        <div class="row bg-light flex-fill" style="height: 100%; align-items: stretch">
            <h1 class="text-uppercase" style="display: inline; margin: auto;"><span class="text-primary">JOB</span>SITE
            </h1>
            <div class="m-auto" style="padding-left: 5px; padding-right: 5px; min-height: 100%;">
                <a href="{{ route('jobs.home') }}"
                    class="nav-item nav-link topbarbutton @if (request()->routeIs('jobs.home')) selected-button @endif"
                    style="display: inline; height: 100%;">Home</a>
            </div>
            <div class="m-auto" style="padding-left: 5px; padding-right: 5px; height: 100%;">
                <a href="{{ route('login') }}" class="nav-item nav-link topbarbutton @if (request()->routeIs('login')) selected-button @endif"
                    style="display: inline; height: 100%;">Client Login</a>
                <a href="{{ route('admin.form') }}" class="nav-item nav-link topbarbutton @if (request()->routeIs('admin.form')) selected-button @endif"
                    style="display: inline; height: 100%;">Admin Login</a>
                <a href="{{ route('register') }}" class="nav-item nav-link topbarbutton @if (request()->routeIs('register')) selected-button @endif"
                    style="display: inline; height: 100%;">Become an Admin</a>
            </div>
        </div>
    @endguest
@endguest
@auth('web')
    <div class="row bg-light flex-fill" style="height: 100%; align-items: stretch">
        <h1 class="text-uppercase" style="display: inline; margin: auto;"><span class="text-primary">JOB</span>SITE
        </h1>
        <div class="m-auto" style="padding-left: 5px; padding-right: 5px; min-height: 100%;">
            <a href="{{ route('jobs.home') }}" class="nav-item nav-link topbarbutton @if (request()->routeIs('jobs.home')) selected-button @endif"
                style="display: inline; height: 100%;">Home</a>
            <a href="{{ route('company.profile') }}" class="nav-item nav-link topbarbutton @if (request()->routeIs('company.profile')) selected-button @endif"
                style="display: inline; min-height: 100%;">Profile</a>
        </div>
        <div class="m-auto" style="padding-left: 5px; padding-right: 5px; height: 100%;">
            <a href="{{ route('jobs.create') }}" class="nav-item nav-link topbarbutton @if (request()->routeIs('jobs.create')) selected-button @endif"
                style="display: inline; height: 100%;">Post Job</a>
            <a href="{{ route('jobs.dashboard') }}" class="nav-item nav-link topbarbutton @if (request()->routeIs('jobs.dashboard')) selected-button @endif"
                style="display: inline; height: 100%;">Dashboard</a>
            <x-form action="{{ route('logout') }}" method="POST" style="display: inline; height: 100%;">
                <a href="#" type="submit" onclick="this.closest('form').submit();return false;"
                    class="nav-item nav-link topbarbutton @if (request()->routeIs('logout')) selected-button @endif" style="display: inline; height: 100%;">Logout</a>
            </x-form>
        </div>
    </div>
@endauth
@auth('admin')
    <div class="row bg-light flex-fill" style="height: 100%; align-items: stretch">
        <h1 class="text-uppercase" style="display: inline; margin: auto;"><span class="text-primary">JOB</span>SITE
        </h1>
        <div class="m-auto" style="padding-left: 5px; padding-right: 5px; min-height: 100%;">
            <a href="{{ route('jobs.home') }}" class="nav-item nav-link topbarbutton @if (request()->routeIs('jobs.home'))selected-button @endif"
                style="display: inline; height: 100%;">Home</a>
            <a href="#" class="nav-item nav-link topbarbutton @if (request()->routeIs('jobs.profile'))selected-button @endif" style="display: inline; min-height: 100%;">Profile</a>
        </div>
        <div class="m-auto" style="padding-left: 5px; padding-right: 5px; height: 100%;">
            <a href="{{ route('admin.create') }}" class="nav-item nav-link topbarbutton @if (request()->routeIs('admin.create'))selected-button @endif"
                style="display: inline; height: 100%;">Add Client</a>
            <a href="{{ route('admin.dash') }}" class="nav-item nav-link topbarbutton @if (request()->routeIs('admin.dash'))selected-button @endif"
                style="display: inline; height: 100%;">Dashboard</a>
            <x-form action="{{ route('logout') }}" method="POST" style="display: inline; height: 100%;">
                <a href="#" type="submit" onclick="this.closest('form').submit();return false;"
                    class="nav-item nav-link topbarbutton @if (request()->routeIs('admin.logout'))selected-button @endif" style="display: inline; height: 100%;">Logout</a>
            </x-form>
        </div>
    </div>
@endauth
