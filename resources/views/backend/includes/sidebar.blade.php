<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->

                <li class="sidebar-item selected">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('home')}}" aria-expanded="false">
                        <i class="me-3 far fa-clock fa-fw" aria-hidden="true"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a></li>
                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('user.profile')}}" aria-expanded="false">
                        <i class="me-3 fa fa-user" aria-hidden="true"></i>
                        <span class="hide-menu">My Profile</span></a></li>

                <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('changePasswordGet')}}" aria-expanded="false">
                        <i class="me-3 fa fa-lock" aria-hidden="true"></i>
                        <span class="hide-menu">Change Password</span></a></li>



                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="me-3 far fa-newspaper fa-fw" aria-hidden="true"></i>
                 <span class="hide-menu">Post </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('news.index')}}" class="sidebar-link"><i class="mdi mdi-view-quilt"></i><span class="hide-menu"> All Posts </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('news.create')}}" class="sidebar-link"><i class="fa fa-plus"></i><span class="hide-menu">Add New Post </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('category.index')}}" class="sidebar-link"><i class="fa fa-tags"></i><span class="hide-menu"> Categories </span></a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="me-3 fas fa-copy fa-fw" aria-hidden="true"></i>
                        <span class="hide-menu">Pages </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('page.index')}}" class="sidebar-link"><i class="mdi mdi-view-quilt"></i><span class="hide-menu"> All Pages </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('page.create')}}" class="sidebar-link"><i class="fa fa-plus"></i><span class="hide-menu">Add Page  </span></a>
                        </li>
                    </ul>
                </li>


                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="me-3 fa fa-bullhorn" aria-hidden="true"></i>
                        <span class="hide-menu">Advertisement </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('placement.index')}}" class="sidebar-link"><i class="mdi mdi-view-quilt"></i><span class="hide-menu"> Placements </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('advertisement.create')}}" class="sidebar-link"><i class="fa fa-plus"></i><span class="hide-menu">Add Unit  </span></a>
                        </li>
                    </ul>
                </li>







                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="me-3 fa fa-users fa-fw" aria-hidden="true"></i>
                        <span class="hide-menu">Users </span></a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('user.index')}}" class="sidebar-link"><i class="mdi mdi-view-quilt"></i><span class="hide-menu"> All Users </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('user.create')}}" class="sidebar-link"><i class="fa fa-plus"></i><span class="hide-menu">Add New Users </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('role.index')}}" class="sidebar-link"><i class="mdi mdi-view-day"></i><span class="hide-menu"> Roles </span></a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('permission.index')}}" class="sidebar-link"><i class="mdi mdi-view-day"></i><span class="hide-menu"> Permission </span></a>
                        </li>

                        <li class="sidebar-item">
                            <a href="{{route('module.index')}}" class="sidebar-link"><i class="mdi mdi-view-day"></i><span class="hide-menu"> Module </span></a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('setting.index')}}" aria-expanded="false">
                        <i class="me-3 fa fa-info-circle" aria-hidden="true"></i>
                        <span class="hide-menu">Settings</span></a></li>


                <li class="sidebar-item"><a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('logout') }}" aria-expanded="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link"><i class="me-3 fas fa-sign-out-alt"></i><span>Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
