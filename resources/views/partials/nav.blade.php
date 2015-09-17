<nav class="red lighten-1" role="navigation">
    @if(Auth::check())
    <!-- Dropdown Structure -->
    <ul id="account" class="dropdown-content">
        <li><a href="#!">Profile</a></li>
        <li><a class="modal-trigger" href="#settings">Settings</a></li>
        <li class="divider"></li>
        <li><a href="/auth/logout">Logout</a></li>
    </ul>
    @endif
    <div class="nav-wrapper container">
        <a id="logo-container" href="/" class="brand-logo">
            {{Config::get('template.brand')}}
        </a>
        <ul class="right hide-on-med-and-down">
            @if(Auth::guest())
            <li><a href="/auth/register"><i class="material-icons left">person_add</i>Sign up</a></li>
            <li><a href="/auth/login"><i class="material-icons left">person</i>Sign in</a></li>
            @endif
            @if(Auth::check())
            <li><a href="/dashboard"><i class="material-icons left">dashboard</i>Dashboard</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="account"><i class="material-icons">account_circle</i></a></li>
            @endif
        </ul>
        <ul id="nav-mobile" class="side-nav">
            @if(Auth::guest())
            <li><a href="/auth/register">Sign up</a></li>
            <li><a href="/auth/login">Sign in</a></li>
            @endif
            @if(Auth::check())
            <li><a href="/dashboard">Dashboard</a></li>
            <li class="divider"></li>
            <li><a href="#!">Profile</a></li>
            <li><a class="modal-trigger" href="#settings">Settings</a></li>
            <li class="divider"></li>
            <li><a href="/auth/logout">Logout</a></li>
            @endif
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>