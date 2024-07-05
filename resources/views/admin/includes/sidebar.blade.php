  <aside class="navbar-aside" id="offcanvas_aside">
      <div class="aside-top">
          <div>
              <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i>
              </button>
          </div>
      </div>
      <nav>
          <ul class="menu-aside">
              <li class="menu-item {{ request()->is('/pegawai') ? 'active' : '' }}">
                  <a class="menu-link" href="{{ route('pegawai.index') }}"> <i class="icon material-icons md-home"></i>
                      <span class="text">Manajemen Pegawai</span>
                  </a>
              </li>
          </ul>
      </nav>
  </aside>
