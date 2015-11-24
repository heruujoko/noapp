@if($active == 'dashboard')
    <li class="active">
        <a href="{{ URL::to('/home') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/users"><i class="fa fa-users"></i> <span class="nav-label">Users</span></a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/oss"><i class="fa fa-wrench"></i> <span class="nav-label">On Site Support</span> </a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/fpl"><i class="fa fa-book"></i> <span class="nav-label">Form Pengadaan</span></a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/import"><i class="fa fa-book"></i> <span class="nav-label">Import Data</span></a>
    </li>
@elseif($active == 'oss')
    <li class="">
        <a href="{{ URL::to('/home') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/users"><i class="fa fa-users"></i> <span class="nav-label">Users</span></a>
    </li>
    <li class="active">
        <a href="{{ URL::to('/') }}/oss"><i class="fa fa-wrench"></i> <span class="nav-label">On Site Support</span> </a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/fpl"><i class="fa fa-book"></i> <span class="nav-label">Form Pengadaan</span></a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/import"><i class="fa fa-book"></i> <span class="nav-label">Import Data</span></a>
    </li>
@elseif($active == 'fpl')
    <li class="">
        <a href="{{ URL::to('/home') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/users"><i class="fa fa-users"></i> <span class="nav-label">Users</span></a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/oss"><i class="fa fa-wrench"></i> <span class="nav-label">On Site Support</span> </a>
    </li>
    <li class="active">
        <a href="{{ URL::to('/') }}/fpl"><i class="fa fa-book"></i> <span class="nav-label">Form Pengadaan</span></a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/import"><i class="fa fa-book"></i> <span class="nav-label">Import Data</span></a>
    </li>
@elseif($active == 'users')
    <li class="">
        <a href="{{ URL::to('/home') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
    </li>
    <li class="active">
        <a href="{{ URL::to('/') }}/users"><i class="fa fa-users"></i> <span class="nav-label">Users</span></a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/oss"><i class="fa fa-wrench"></i> <span class="nav-label">On Site Support</span> </a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/fpl"><i class="fa fa-book"></i> <span class="nav-label">Form Pengadaan</span></a>
    </li> 
    <li class="">
        <a href="{{ URL::to('/') }}/import"><i class="fa fa-book"></i> <span class="nav-label">Import Data</span></a>
    </li>          
@elseif($active == 'import')
    <li class="">
        <a href="{{ URL::to('/home') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span> </a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/users"><i class="fa fa-users"></i> <span class="nav-label">Users</span></a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/oss"><i class="fa fa-wrench"></i> <span class="nav-label">On Site Support</span> </a>
    </li>
    <li class="">
        <a href="{{ URL::to('/') }}/fpl"><i class="fa fa-book"></i> <span class="nav-label">Form Pengadaan</span></a>
    </li>
    <li class="active">
        <a href="{{ URL::to('/') }}/import"><i class="fa fa-book"></i> <span class="nav-label">Import Data</span></a>
    </li>    
@endif