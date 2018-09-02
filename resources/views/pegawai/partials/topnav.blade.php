<div class="topbar">
    <div class="logo">
        <h1>
            <a href="#" title="">
                <img src="{{ asset('back/images/logo1.png') }}" alt="" />
            </a>
        </h1>
    </div>
    <div class="topbar-data">
        <div class="usr-act">
            <i style="">{{ Auth::user()->name }}</i>
            <span>
                <img src="{{ asset('back/images/resource/topbar-usr1.png') }}" width="40" />
                <i class="sts away"></i>
            </span>
            <div class="usr-inf">
                <div class="usr-thmb brd-rd50">
                    <img class="brd-rd50" src="{{ asset('back/images/resource/topbar-usr1.png') }}" width="100" />
                    <i class="sts away"></i>
                </div>
                <h5>
                    <a href="#" title="">{{ Auth::user()->name }}</a>
                </h5>
                <i>{{ Auth::user()->email }}</i>
                <br>
                <div class="usr-ft">
                        <a class="btn-danger" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         <i class="fa fa-sign-out"></i> Keluar</a>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </div>
            </div>
        </div>
    </div>
    <div class="topbar-bottom-colors">
        <i style="background-color: #2c3e50;"></i>
        <i style="background-color: #9857b2;"></i>
        <i style="background-color: #2c81ba;"></i>
        <i style="background-color: #5dc12e;"></i>
        <i style="background-color: #feb506;"></i>
        <i style="background-color: #e17c21;"></i>
        <i style="background-color: #bc382a;"></i>
    </div>
</div>
