<div class="sidebar" data-color="orange" data-image="{{asset('backend/img/sidebar-5.jpg')}}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="https://www.creative-tim.com/" class="simple-text logo-mini">
                DOF
            </a>
            <a href="https://www.creative-tim.com/" class="simple-text logo-normal">
                DEN OF GEEKS
            </a>
        </div>
        <div class="user">
            <div class="photo">
                <img src="../assets/img/default-avatar.png" />
            </div>
            <div class="info ">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>{{Auth()->user()->name}}
                                <b class="caret"></b>
                            </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a class="profile-dropdown" href="#pablo">
                                <span class="sidebar-mini">MP</span>
                                <span class="sidebar-normal">My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="profile-dropdown" href="#pablo">
                                <span class="sidebar-mini">EP</span>
                                <span class="sidebar-normal">Edit Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="profile-dropdown" href="#pablo">
                                <span class="sidebar-mini">S</span>
                                <span class="sidebar-normal">Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="/">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                    <i class="nc-icon nc-single-copy-04"></i>
                    <p>
                        Blog
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="componentsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('posts.index')}}">
                                <span class="sidebar-mini">AP</span>
                                <span class="sidebar-normal">ALL Posts</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{route('posts.create')}}">
                                <span class="sidebar-mini">CP</span>
                                <span class="sidebar-normal">Create Post</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                    <i class="nc-icon nc-notes"></i>
                    <p>
                        Category
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="formsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="forms/regular.html">
                                <span class="sidebar-mini">AC</span>
                                <span class="sidebar-normal">All Categories</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="forms/extended.html">
                                <span class="sidebar-mini">CC</span>
                                <span class="sidebar-normal">Create Category</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
                    <i class="nc-icon nc-tag-content"></i>
                    <p>
                        Tag
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="tablesExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="tables/regular.html">
                                <span class="sidebar-mini">AT</span>
                                <span class="sidebar-normal">All Tags</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="tables/extended.html">
                                <span class="sidebar-mini">CT</span>
                                <span class="sidebar-normal">Create Tag</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
                    <i class="nc-icon nc-single-02"></i>
                    <p>
                        User
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse " id="mapsExamples">
                    <ul class="nav">
                        <li class="nav-item ">
                            <a class="nav-link" href="maps/google.html">
                                <span class="sidebar-mini">AU</span>
                                <span class="sidebar-normal">All Users</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="maps/vector.html">
                                <span class="sidebar-mini">CU</span>
                                <span class="sidebar-normal">Create User</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>

        </ul>
    </div>
</div>
