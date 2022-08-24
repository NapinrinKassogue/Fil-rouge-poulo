
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard_Admin</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/img/favicon.png" rel="icon">
  <link href="asset/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('/csss/styles.css')}}" rel="stylesheet">

 
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    
      <nav id="navbar" class="navbar">
        <ul><a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('/img/logo.jpg')}}" alt="">
      </a>

         <ul class="">
              <li class="dropdown"><a href="#"><span>EMPLOYES</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li class="deroul"><a href="{{ route('administrateurs.listeEmployes')}}">Tous les employés</a></li>
                  <li class="deroul" ><a href="#">Liste des actifs </a></li>
                  <li class="deroul"><a href="#">Liste des inactifs</a></li>
                </ul>
               
            </ul>
          <li><a class="nav-link scrollto" href="#">Tableau Récaptulatif</a></li>
          <li><a class="nav-link scrollto" href="#">Services</a></li>
          <li><div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div><li>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
  
  <main id="main">
    
<img class="accueil" src="{{asset ('/img/accueil.jpg')}}" alt="">
  <div class="carousel">
    <script language="JavaScript">
        
        //PLF-/
        var position=0;
        var msg="BIENVENUE AU BUREAU BIENVENUE AU BUREAU BIENVENUE AU BUREAU ";
        var msg="     "+msg;
        var longue=msg.length;
        var fois=(40/msg.length)+1;
        for(i=0;i<=fois;i++) msg+=msg;
        function textdefil() {
        document.form1.deftext.value=msg.substring(position,position+70);
        position++;
        if(position == longue) position=0;
        setTimeout("textdefil()",200);
        }
        window.onload = textdefil;
        //-->
        </script>
        <form name="form1">
        <div align="center">
        <input type="text" name="deftext" size=100 style="text-align:center;  color: red; text-decoration:none; opacity:90%; 
        height: 60px; font-size: 40px; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; width: 1124px; border:none">
        
        </div>
        </form>
              
  </div>
  
        
    
     
  </main><!-- End #main -->



    

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('/js/main.js')}}"></script>

</body>

</html>


<h1>Bienvenue dans le Dashboard d'administrateur</h1>
