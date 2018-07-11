<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                    <h1><a href="{{route('admin.index')}}"><img src="{{URL::asset('images/js.png')}}"style="width:200px;height:50px;padding-left:-20px;padding-bottom:10px" alt="IMG-LOGO"></a></h1>
                </div>
            </div>

            <div class="col-md-2 pull-right">
                <div class="navbar navbar-inverse" role="banner">
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                            <a href="{{url('/')}}" class="dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}
                                          </a>
                                <ul class="dropdown-menu animated fadeInUp">
                                    <li><a href="{{url('/')}}">Front End</a></li>
                                    <li><a href="{{url('/')}}">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>