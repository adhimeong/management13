<!DOCTYPE html>
<html lang="en">
<head>

  <title>SMKN 13 Bandung</title>
  <!-- CORE CSS-->
  <link href="{{ asset('css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ asset('css/style.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- Custome CSS-->    
  <link href="{{ asset('css/custom.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="{{ asset('css/prism.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
  <link href="{{ asset('css/perfect-scrollbar.css')}}" type="text/css" rel="stylesheet" media="screen,projection">

</head>

<body>

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START HEADER -->
  <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar light-blue darken-2">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li ><a href="/"><div class="logo-wrapper" ><span class="brand-logo" style="font-style: bold; font-size: 22px;">SMKN 13 BANDUNG</span></div></a></li>
                    </ul>
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="mdi-action-search"></i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Cari"/>
                    </div>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
  </header>
  <!-- END HEADER -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">

      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">

            <li class="user-details blue lighten-1">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="{{ asset('images/avatar.jpg ')}}" alt="" class="circle responsive-img valign profile-image">
                </div>
                <div class="col col s8 m8 l8">
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                        </li>
                        <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                        </li>
                    </ul>
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Adhi Ismail Hasan<i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal">Administrator</p>
                </div>
            </div>
            </li>

            <li class="bold"><a href="/absenguru" class="waves-effect waves-cyan"><i class="mdi-action-alarm"></i> Absensi Guru</a>
            </li>
            <li class="bold"><a href="/jadwalpel" class="waves-effect waves-cyan"><i class="mdi-action-event"></i> Jadwal Pelajaran</a>
            </li>
            <li class="bold"><a href="/perijinan" class="waves-effect waves-cyan"><i class="mdi-hardware-security"></i> Perijinan & Tugas Dinas</a>
            </li>
            <li class="bold"><a href="/jabatan" class="waves-effect waves-cyan"><i class="mdi-notification-play-install"></i> Jabatan</a>
            </li>

            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover"><p class="ultra-small margin more-text">PENGATURAN</p></li>
            <li class="bold"><a href="/guru" class="waves-effect waves-cyan"><i class="mdi-maps-local-library"></i>Staf & Guru</a>
            </li>
            <li class="bold"><a href="/matpel" class="waves-effect waves-cyan"><i class="mdi-image-edit"></i> Mata Pelajaran</a>
            </li>
            <li class="bold"><a href="/jurusan" class="waves-effect waves-cyan"><i class="mdi-maps-directions"></i> Jurusan</a>
            </li>
            <li class="bold"><a href="/kelas" class="waves-effect waves-cyan"><i class="mdi-maps-directions-walk"></i> Rombel</a>
            </li>
            <li class="bold"><a href="/jampel" class="waves-effect waves-cyan"><i class="mdi-social-notifications"></i> Jam Pelajaran</a>
            </li>

            <li class="li-hover"><div class="divider"></div></li>
            <li class="li-hover"><p class="ultra-small margin more-text">AKUN</p></li>
            <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a></li>
            <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a></li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only light-blue darken-1"><i class="mdi-navigation-menu"></i></a>
        </aside>
      <!-- END LEFT SIDEBAR NAV-->

      <!-- //////////////////////////////////////////////////////////////////////////// -->

      <!-- START CONTENT -->
      <section id="content">       

        <!--start container-->
        <div class="container">
          <div class="section">

            @yield('content')

          </div>
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->

      <!-- //////////////////////////////////////////////////////////////////////////// -->
    </div>
    <!-- END WRAPPER -->

  </div>
  <!-- END MAIN -->

  <!-- //////////////////////////////////////////////////////////////////////////// -->

  <!-- START FOOTER <--><br><br><br><br><br><br><br><br><br><br><br><br>
  <footer class="page-footer light-blue darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h6 class="white-text">SMKN 13 BANDUNG</h6>
          <p class="grey-text text-lighten-4">Sekolah Menengah Kejuruan Negeri 13 Bandung adalah sekolah tingkat menengah yang mendidik siswanya untuk memiliki keahlian di bidang Analisis Kimia, Teknik Komputer Jaringan dan Rekayasa Perangkat Lunak.</p>
        </div>
        <div class="col l3 s12">
          <h6 class="white-text">Alamat</h6>
          <p class="grey-text text-lighten-4">Jl. Soekarno Hatta No.Km.10, Jatisari, Buahbatu, Kota Bandung, Jawa Barat 40286</p>
        </div>
        <div class="col l3 s12">
          <h6 class="white-text">Kontak</h6>
          <ul>
            <li><p class="grey-text text-lighten-4">(022) 7318960</p></li>
            <li><p class="grey-text text-lighten-4">admin@smkn-13bdg.sch.id</p></li>
            <li><p class="grey-text text-lighten-4">https://smkn-13bdg.sch.id</p></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://facebook/adhimeong">adhimeong</a>
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->

    <!-- ================================================
    Scripts
    ================================================ -->
    
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('js/plugins/jquery-1.11.2.min.js')}}"></script>     
    <!--materialize js-->
    <script type="text/javascript" src="{{ asset('js/materialize.min.js')}}"></script>   
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{{ asset('js/plugins.min.js')}}"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="{{ asset('js/custom-script.js')}}"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="{{ asset('js/perfect-scrollbar.min.js')}}"></script>
</body>
</html>