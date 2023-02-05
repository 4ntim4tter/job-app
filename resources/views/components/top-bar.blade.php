    @guest
        <div class="row bg-light flex-fill" style="height: 100%; align-items: stretch">
            <h1 class="text-uppercase" style="display: inline; margin: auto;"><span class="text-primary">JOB</span>SITE </h1>
            <div class="m-auto" style="padding-left: 5px; padding-right: 5px; min-height: 100%;">
                <a href="{{ route('jobs.home') }}" class="nav-item nav-link topbarbutton selected-button"
                    style="display: inline; height: 100%;">Home</a>
                <a href="#" class="nav-item nav-link topbarbutton"
                    style="display: inline; min-height: 100%;">Categories</a>
            </div>
            <div class="m-auto" style="padding-left: 5px; padding-right: 5px; height: 100%;">
                <a href="{{ route('login') }}" class="nav-item nav-link topbarbutton "
                    style="display: inline; height: 100%;">Login</a>
                <a href="{{ route('register') }}" class="nav-item nav-link topbarbutton "
                    style="display: inline; height: 100%;">Sign Up</a>
            </div>
        </div>
    @endguest
    @auth
        <div class="row bg-light flex-fill" style="height: 100%; align-items: stretch">
            <h1 class="text-uppercase" style="display: inline; margin: auto;"><span class="text-primary">JOB</span>SITE
            </h1>
            <div class="m-auto" style="padding-left: 5px; padding-right: 5px; min-height: 100%;">
                <a href="{{ route('jobs.home') }}" class="nav-item nav-link topbarbutton selected-button"
                    style="display: inline; height: 100%;">Home</a>
                <a href="#" class="nav-item nav-link topbarbutton"
                    style="display: inline; min-height: 100%;">Categories</a>
            </div>
            <div class="m-auto" style="padding-left: 5px; padding-right: 5px; height: 100%;">
                <a href="{{ route('jobs.dashboard') }}" class="nav-item nav-link topbarbutton "
                    style="display: inline; height: 100%;">Dashboard</a>
                <x-form action="{{ route('logout') }}" method="POST" style="display: inline; height: 100%;">
                    <a href="#" type="submit" onclick="this.closest('form').submit();return false;"
                        class="nav-item nav-link topbarbutton" style="display: inline; height: 100%;">Logout</a>
                </x-form>
            </div>
        </div>
    @endauth
