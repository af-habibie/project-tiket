<header id="header">
    <div class="container">
        <div class="column">
            <div class="logo">
                <a href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" width="150" alt="eNews" /></a>
            </div>
            <div class="search">
                <form action="" method="post">
                    <input type="text" value="Search." onblur="if(this.value=='') this.value='Search.';" onfocus="if(this.value=='Search.') this.value='';" class="ft"/>
                    <input type="submit" value="" class="fs">
                </form>
            </div>
            <nav id="nav">
                <ul class="sf-menu">
                    <li class="current"><a href="{{ url('/') }}">Home.</a></li>
                    <li>
                        <a href="#">Pages.</a>
                        <ul>
                            <li><i class="icon-right-open"></i><a href="leftsidebar.html">Left Sidebar.</a></li>
                            <li><i class="icon-right-open"></i><a href="reviews.html">Reviews.</a></li>
                            <li><i class="icon-right-open"></i><a href="single.html">Single News.</a></li>
                            <li><i class="icon-right-open"></i><a href="features.html">Features.</a></li>
                            <li><i class="icon-right-open"></i><a href="contact.html">Contact.</a></li>
                        </ul>
                    </li>
                    @if (count($categories) > 0)
                        @foreach ($categories as $item)
                            <li><a href="{{ route('news.category', $item->slug) }}">{{ $item->title }}</a></li>
                        @endforeach
                    @endif
                    <li class="current">
                        @guest
                            <a href="{{ route('login') }}" target="_blank">
                                <i class="fas fa-sign-in-alt"></i> &nbsp;&nbsp;Login
                            </a>
                        @endguest
                        @auth
                            @if (Auth::user()->is_admin == 0)
                                <a href="#">
                                    <i class="fas fa-user-alt"></i> &nbsp;&nbsp;{{ Auth::user()->name }}</a>
                                <ul>
                                    <li>
                                        <i class="icon-right-open"></i>
                                        <a href="{{ route('contributor.home') }}" target="_blank">Dashboard</a>
                                    </li>
                                    <li>
                                        <i class="icon-right-open"></i>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                                @endif
                                @if (Auth::user()->is_admin == 2)
                                <a href="#">
                                    <i class="fas fa-user-alt"></i> &nbsp;&nbsp;{{ Auth::user()->name }}</a>
                                <ul>
                                    <li>
                                        <i class="icon-right-open"></i>
                                        <a href="" target="_blank">My Comment</a>
                                    </li>
                                    <li>
                                        <i class="icon-right-open"></i>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>
                                </ul>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            @endif
                        @endauth
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>