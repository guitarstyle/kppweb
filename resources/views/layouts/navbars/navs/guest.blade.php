<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
    <div class="container px-4">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('argon') }}/img/logo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset('argon') }}/img/logo.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main"
                            aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="nav nav-pills ml-auto">
                <li class="nav-item active">
                    <a class="nav-link nav-link-icon" href="{{ url('/') }}"><i class="fas fa-home"> </i><span class="nav-link-inner--text"> หน้าหลัก </span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-newspaper"></i> ข่าวสาร/ประชาสัมพันธ์ </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">ข่าวสาร</a>
                        <a class="dropdown-item" href="#">จดหมายข่าว</a>
                        <a class="dropdown-item" href="#">ประกาศ</a>
                        <a class="dropdown-item" href="#">สื่อ / มีเดีย </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-hands-helping"></i> มุมบริการประชาชน </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">ข้อมูลการให้บริการ</a>
                        <a class="dropdown-item" href="#">แบบฟอร์ม/เอกสาร</a>
                        <a class="dropdown-item" href="#">ห้องสมุด พมจ.</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">ศูนย์ข้อมูลทางสังคม</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-broadcast-tower"></i> เกี่ยวกับเรา </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">ประวัติสำนักงาน</a>
                        <a class="dropdown-item" href="#">วิสัยทัศน์และพันธกิจ</a>
                        <a class="dropdown-item" href="#">โครงสร้างหน่วยงาน</a>
                        <a class="dropdown-item" href="#">ทำเนียบบุคลากร</a>
                        <a class="dropdown-item" href="#">ทำเนียบผู้บริหาร</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-users-cog"></i> ระบบงาน </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('register') }}">ลงทะเบียน</a>
                        <a class="dropdown-item" href="{{ route('login') }}">เข้าสู่ระบบ</a>
                    </div>
                </li>
            </ul>

            {{--
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('home') }}">
                        <i class="ni ni-planet"></i>
                        <span class="nav-link-inner--text">{{ __('Dashboard') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('register') }}">
                        <i class="ni ni-circle-08"></i>
                        <span class="nav-link-inner--text">{{ __('Register') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('login') }}">
                        <i class="ni ni-key-25"></i>
                        <span class="nav-link-inner--text">{{ __('Login') }}</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="{{ route('profile.edit') }}">
                        <i class="ni ni-single-02"></i>
                        <span class="nav-link-inner--text">{{ __('Profile') }}</span>
                    </a>
                </li>
            </ul> --}}
        </div>
    </div>
</nav>
