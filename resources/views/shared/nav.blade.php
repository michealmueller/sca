<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Star Citizen Armada</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div>
            <ul class="nav navbar-nav navbar-right">

                <li>
                    <a href="/about">About</a>
                </li>
                @if(Auth::check())
                <li>
                    <a href="/team-registration">Register Your Team</a>
                </li>
                <li class="dropdown">
                    <a href="/createtournament">Create a Tournament </a>
                </li>
                    <li><a href="/profile">Hello, <b>{{ $user->username }}</b></a></li>
                @else
                    <li><a href="/register">Register</a></li>
                @endif
                <li>
                    @if(!Auth::check())
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <b class="caret"></b></a>
                            <form class="dropdown-menu " method="post" action="{{ route('login') }}">

                                {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email" class="sr-only">Email Address</label>
                                <input type="text" id="email" class="form-control" name="email" placeholder="E-Mail" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password" class="sr-only">Password</label>
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                                <button class="btn btn-sm btn-block btn-default " type="submit">Sign in</button>
                            </form>
                    @else
                        <a href="{{ route('logout') }}">Logout</a>
                    @endif
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>