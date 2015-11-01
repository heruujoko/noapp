@if($active == 'dashboard')
    <li class="active">
        <a href="{{ URL::to('/home') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/oss"><i class="fa fa-wrench"></i> <span class="nav-label">On Site Support</span> </a>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Form Pengadaan</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Penawaran Harga</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Surat Tugas</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Surat Tugas Perjalanan Dinas</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-clipboard"></i> <span class="nav-label">Verivication Sheet</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-check-circle"></i> <span class="nav-label">Surat Tugas</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
@elseif($active == 'oss')
    <li class="">
        <a href="{{ URL::to('/home') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
    </li>
    <li class="active">
        <a href="{{ URL::to('/') }}/oss"><i class="fa fa-wrench"></i> <span class="nav-label">On Site Support</span> </a>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Form Pengadaan</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Penawaran Harga</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Surat Tugas</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Surat Tugas Perjalanan Dinas</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-clipboard"></i> <span class="nav-label">Verivication Sheet</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
    <li class="">
        <a href="#"><i class="fa fa-check-circle"></i> <span class="nav-label">Surat Tugas</span> <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li class=""><a href="index.html">All</a></li>
            <li class=""><a href="index.html">New</a></li>
        </ul>
    </li>
@endif