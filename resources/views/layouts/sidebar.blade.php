  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="{{url ('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">BalochSazz</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{url ('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ (!empty(Auth::user()->fullname)) ? Auth::user()->fullname : 'no name' }}</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                  <li class="nav-item">
                      <a href="{{url ('admin/dashboard')}}" class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                              Dashboard
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{url ('admin/users')}}" class="nav-link  {{ request()->is('admin/users' , 'admin/user-edit*' , 'admin/users-delete*') ? 'active' : '' }} ">
                          <i class="nav-icon fas fa-users"></i>
                          <p>
                              Users
                          </p>
                      </a>
                  </li>


                  <li class="nav-item">
                      <a href="{{url ('admin/category')}}" class="nav-link {{ request()->is('admin/category','admin/category_add','admin/category-edit*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tree"></i>
                          <p>
                              Category
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{url ('admin/artists')}}" class="nav-link {{ request()->is('admin/artists','admin/artists_add','admin/artists-edit*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-music"></i>
                          <p>
                              Artists
                          </p>
                      </a>
                  </li>

                  <!-- albums -->


                  <li class="nav-item">
                      <a href="{{url ('admin/albums')}}" class="nav-link {{ request()->is('admin/albums','admin/albums','admin/albums-edit*') ? 'active' : '' }}">
                          <i class="nav-icon material-icons">&#xe019;</i>
                          <p>
                              Albums
                          </p>
                      </a>
                  </li>
                  <!-- end albums  -->

                  <!-- books -->


                  <li class="nav-item">
                      <a href="{{url ('admin/books')}}" class="nav-link {{ request()->is('admin/books','admin/books','admin/books-edit*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-book"></i>
                          <p>
                              books
                          </p>
                      </a>
                  </li>
                  <!-- end books  -->


                  <!-- book_author -->


                  <li class="nav-item">
                      <a href="{{url ('admin/book_author')}}" class="nav-link {{ request()->is('admin/book_author','admin/book_author_add','admin/book_author-edit*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tree"></i>
                          <p>
                              Book Author
                          </p>
                      </a>
                  </li>
                  <!-- end book_author  -->


                  <!-- news -->


                  <li class="nav-item">
                      <a href="{{url ('admin/news')}}" class="nav-link {{ request()->is('admin/news','admin/news_add','admin/news-edit*') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-newspaper"></i>
                          <p>
                              News
                          </p>
                      </a>
                  </li>
                  <!-- end news  -->
                  <!-- Notifications -->

                  <li class="nav-item">
                      <a href="{{url ('admin/notifications')}}" class="nav-link {{ request()->is('admin/notifications','admin/notifications_add','admin/notifications-edit*') ? 'active' : '' }}">

                          <i class="nav-icon  fas fa-bell" style="font-size:auto;color:yellow"></i>
                          <p>
                              Notifications
                          </p>
                      </a>
                  </li>
                  <!-- end Notifications  -->


                  <!-- Notifications -->

                  <li class="nav-item">
                      <a href="{{url ('admin/slider')}}" class="nav-link {{ request()->is('admin/slider','admin/slider_add','admin/slider-edit*') ? 'active' : '' }}">
                          <i  class='fas'>&#xf1de;</i>
                          <p>
                              Sliders
                          </p>
                      </a>
                  </li>
                  <!-- end Notifications  -->


                  <!-- tracks -->

                  <li class="nav-item">
                      <a href="{{url ('admin/tracks')}}" class="nav-link {{ request()->is('admin/tracks','admin/tracks_add','admin/tracks-edit*') ? 'active' : '' }}">
                          <i class="nav-icon material-icons" style="font-size:auto;color:red">&#xe3a1;</i>
                          <p>
                              Tracks
                          </p>
                      </a>
                  </li>
                  <!-- end tracks  -->



                  <!-- logout -->
                  <li class=" nav-item">
                      <a href="{{url ('admin/logout')}}" class="nav-link">
                          <i class="nav-icon far ion-log-out text-info"></i>
                          <p>Logout</p>
                      </a>
                  </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>