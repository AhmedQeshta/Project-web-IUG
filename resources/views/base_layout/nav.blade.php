<div class="page-sidebar navbar-collapse collapse">
      <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <li class="sidebar-toggler-wrapper hide">
            <div class="sidebar-toggler">
                <span></span>
            </div>
        </li>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
        <li class="sidebar-search-wrapper">
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
            <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
            <form class="sidebar-search  " action="page_general_search_3.html" method="POST">
                <a href="javascript:;" class="remove">
                    <i class="icon-close"></i>
                </a>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                            <a href="javascript:;" class="btn submit">
                                                <i class="icon-magnifier"></i>
                                            </a>
                                        </span>
                </div>
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        <li class="nav-item start ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-home"></i>
                <span class="title">Dashboard</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item start ">
                    <a href="index.html" class="nav-link ">
                        <i class="icon-bar-chart"></i>
                        <span class="title">Dashboard 1</span>
                    </a>
                </li>
            </ul>
            {{--view the user look page --}}
        </li>
        <li class="heading">
            <h3 class="uppercase">Features</h3>
        </li>
        {{--<li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-diamond"></i>
                <span class="title">UI Features</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="ui_metronic_grid.html" class="nav-link ">
                        <span class="title">Metronic Grid System</span>
                    </a>

                </li>
            </ul>
        </li>--}}
        <li class="nav-item">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class ="fa fa-user"></i>
                <span class="title">Users</span>
                <span class="arrow"></span>

            </a>
            <ul class ="sub-menu">
                <li class="nav-item">
                <a href="javascript:;" class="nav-link ">
                    <span class="title">All Users</span>
                </a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;" class="nav-link ">
                        <span class="title">Create user</span>
                    </a>
                </li>
            </ul>
        </li>
          <li class="nav-item">
              <a href="javascript:;" class="nav-link nav-toggle">
                  <i class ="fa fa-plane"></i>
                  <span class="title">Posts</span>
                  <span class="arrow"></span>

              </a>
              <ul class ="sub-menu">
                  <li class="nav-item">
                      <a href="{{url('admin/posts/')}}" class="nav-link ">
                          <span class="title">All Posts</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{url('admin/posts/create')}}" class="nav-link ">
                          <span class="title">Create Post</span>
                      </a>
                  </li>
              </ul>
          </li>

        <li class="nav-item  ">
            <a href="javascript:;" class="nav-link nav-toggle">
                <i class="icon-settings"></i>
                <span class="title">System</span>
                <span class="arrow"></span>
            </a>
            <ul class="sub-menu">
                <li class="nav-item  ">
                    <a href="page_cookie_consent_1.html" class="nav-link ">
                        <span class="title">Cookie Consent 1</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_cookie_consent_2.html" class="nav-link ">
                        <span class="title">Cookie Consent 2</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_coming_soon.html" class="nav-link " target="_blank">
                        <span class="title">Coming Soon</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_404_1.html" class="nav-link ">
                        <span class="title">404 Page 1</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_404_2.html" class="nav-link " target="_blank">
                        <span class="title">404 Page 2</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_404_3.html" class="nav-link " target="_blank">
                        <span class="title">404 Page 3</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_500_1.html" class="nav-link ">
                        <span class="title">500 Page 1</span>
                    </a>
                </li>
                <li class="nav-item  ">
                    <a href="page_system_500_2.html" class="nav-link " target="_blank">
                        <span class="title">500 Page 2</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- END SIDEBAR MENU -->
    <!-- END SIDEBAR MENU -->
</div>
