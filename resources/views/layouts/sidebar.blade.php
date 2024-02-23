<ul class="navbar-nav sidebar sidebar accordion" style="background-color: #EEEFE1" id="accordionSidebar" >
    <div class="sid" style="position: fixed">


        <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-circle" style="color: #1c1a1b"></i>
            </div>
            <div class="sidebar-brand-text mx-3" style="color: #1c1a1b">{{Auth::user()->username}}</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        @if (Auth::user()->role_id == 1) 
            <li class="nav-item active" >
                <a class="nav-link"  href="dashboard"  style="color: #1c1a1b"><i class="fa fa-th-large" aria-hidden="true"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link"  href="a-book"  style="color: #1c1a1b"><i class="fa fa-book" aria-hidden="true"></i><span>Books</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link"  href="a-category"  style="color: #1c1a1b"><i class="fa fa-th-list" aria-hidden="true"></i><span>Category</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link"  href="a-user"  style="color: #1c1a1b" ><i class="fa fa-user" aria-hidden="true"></i><span>Users</span></a>
            </li> 
            <li class="nav-item active">
                <a class="nav-link"  href="a-transaction"  style="color: #1c1a1b" ><i class="fa fa-check-square" aria-hidden="true"></i><span>Transaction</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link"  href="a-rating"  style="color: #1c1a1b"><i class="fa fa-star" aria-hidden="true"></i><span>Rating</span></a>
            </li>

        @elseif (Auth::user()->role_id == 2) 
            <li class="nav-item active ">
                <a class="nav-link"  href="dashpetugas"  style="color: #1c1a1b"><i class="fa fa-th-large" aria-hidden="true"></i><span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link"  href="a-book"  style="color: #1c1a1b"><i class="fa fa-book" aria-hidden="true"></i><span>Books</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link"  href="a-category"  style="color: #1c1a1b"><i class="fa fa-th-list" aria-hidden="true"></i><span>Category</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link"  href="a-transaction"  style="color: #1c1a1b" ><i class="fa fa-check-square" aria-hidden="true"></i><span>Transaction</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link"  href="a-rating"  style="color: #1c1a1b"><i class="fa fa-star" aria-hidden="true"></i><span>Rating</span></a>
            </li>
        @endif
        

        
        <!-- Divider -->

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline" style="margin-left: 2rem">
            <button style="background-color: #EEEFE1" class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </div>

 </ul>