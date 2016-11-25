<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>smkn 13 bandung</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('css/materialize.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('css/style.min.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<div class="navbar-fixed">
    <nav class="light-blue darken-2" role="navigation">
        <div class="nav-wrapper container">
          <a id="logo-container" href="#" class="brand-logo center">SMKN 13 BANDUNG</a>
          <ul class="right hide-on-med-and-down">
            
          </ul>

          <ul id="nav-mobile" class="side-nav">
            <li><a href="#">Navbar Link</a></li>
          </ul>
          <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br><br><br><br><br>
        <div class="row center">
          <a href="/absenguru" id="download-button" class="btn-large waves-effect waves-lightred accent-4 pink darken-1">Mulai</a>
        </div>
        <br><br>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('images/background1.jpg')}}" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Respon Sistem Cepat  </h5>

            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet quis accusamus ipsam quidem adipisci necessitatibus id? Consequatur culpa amet optio delectus, facilis non ducimus beatae laborum maiores incidunt. Beatae, fugiat.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Mudah Digunakan</h5>

            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci at ea, ullam consectetur alias natus quod, vero id harum consequuntur neque delectus error, mollitia officia! Perferendis explicabo, consequatur in accusantium!</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Pengaturan Mudah Dipahami</h5>

            <p class="light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, eligendi fuga perferendis, maxime aut inventore dolorem, molestiae temporibus eveniet at odio ea explicabo est mollitia suscipit nesciunt, nostrum earum velit?</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="parallax"><img src="{{ asset('images/background2.jpg')}}"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>

  <div class="parallax-container valign-wrapper">
    <div class="parallax"><img src="{{ asset('images/background3.jpg')}}"></div>
  </div>

   <!-- START FOOTER <-->
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

  <!--  Scripts-->
  <script src="{{ asset('js/plugins/jquery-1.11.2.min.js')}}"></script>
  <script src="{{ asset('js/materialize.min.js')}}"></script>
  <script src="{{ asset('js/init.js')}}"></script>

  </body>
</html>