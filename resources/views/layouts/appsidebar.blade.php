<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0"
            href=" https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/analytics.html "
            target="_blank">
            <img src="{{ asset('mod') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Darma Digital Solution</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto max-height-vh-100 h-100" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a href="/data-mahasiswa" class="nav-link text-white" aria-controls="ProfileNav" role="button"
                    aria-expanded="false">
                    <img src="{{ asset('mod') }}/img/team-3.jpg" class="avatar">
                    <?php 
                    $word = ucwords(auth::user()->name);

                    $res = explode(' ', $word);

                    if (count($res) > 2) {
                        $name =  $res[0] . ' ' . $res[1] . ' ' . substr($res[2], 0, 1);
                    } else {
                       $name =  ucwords(auth::user()->name);
                    }

                    ?>
                    <span class="nav-link-text ms-2 ps-1"><?= $name ?></span>
                </a>
                <div class="collapse" id="ProfileNav" style="">

            <li class="nav-item mb-2 mt-0">
                <a class="nav-link text-white" href="/home">
                    <span class="sidenav-mini-icon material-icons"> home </span>
                    <span class="sidenav-normal  ms-3  ps-1"> Home </span>
                </a>
            </li>
            <li class="nav-item mb-2 mt-0">
                <a class="nav-link text-white" href="/myreport">
                    <span class="sidenav-mini-icon material-icons"> analytics </span>
                    <span class="sidenav-normal  ms-3  ps-1"> My Report </span>
                </a>
            </li>
            <li class="nav-item mb-2 mt-0">
                <a class="nav-link text-white " href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <span class="sidenav-mini-icon material-icons"> logout </span>
                    <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    </li>
    </div>
</aside>
