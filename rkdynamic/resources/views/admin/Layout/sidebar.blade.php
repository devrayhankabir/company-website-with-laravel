<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{route('dashboard')}}">
                <svg
                    class="brand-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid"
                    width="30"
                    height="33"
                    viewBox="0 0 30 33"
                >
                    <g fill="none" fill-rule="evenodd">
                        <path
                            class="logo-fill-blue"
                            fill="#7DBCFF"
                            d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                        />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">Admin Dashboard</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">



                <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                       aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Home Page</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="dashboard"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li  class="active" >
                                <a class="sidenav-item-link" href="{{route('all.sliders')}}">
                                    <span class="nav-text">Sliders</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{route('about.us')}}">
                                    <span class="nav-text">About Us</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Services</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="index.html">
                                    <span class="nav-text">Portfolios</span>

                                </a>
                            </li>

                            <li >
                                <a class="sidenav-item-link" href="{{route('all.brand')}}">
                                    <span class="nav-text">Brands</span>

                                </a>
                            </li>




                        </div>
                    </ul>
                </li>






                            <li  class="has-sub" >
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                                   aria-expanded="false" aria-controls="forms">
                                    <span class="nav-text">Contact Page</span> <b class="caret"></b>
                                </a>
                                <ul  class="collapse"  id="forms">
                                    <div class="sub-menu">

                                        <li >
                                            <a href="{{route('contact.info')}}">Contact Info</a>
                                        </li>

                                        <li >
                                            <a href="input-group.html">Contact Forms</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>




                            <li  class="has-sub" >
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                                   aria-expanded="false" aria-controls="maps">
                                    <span class="nav-text">Maps</span> <b class="caret"></b>
                                </a>
                                <ul  class="collapse"  id="maps">
                                    <div class="sub-menu">

                                        <li >
                                            <a href="google-map.html">Google Map</a>
                                        </li>

                                        <li >
                                            <a href="vector-map.html">Vector Map</a>
                                        </li>

                                    </div>
                                </ul>
                            </li>







            </ul>

        </div>





    </div>
</aside>
