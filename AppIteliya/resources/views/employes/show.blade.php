<link href="{{asset('/csss/styles.css')}}" rel="stylesheet">
<header id="header" class="header fixed-top">
    
      <nav id="navbar" class="navbar">
        <ul><a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('/img/logo.jpg')}}" alt="">
      </a>
      <ul>
           <li class="dropdow">LES DETAILS DE CHAQUES SUR LES EMPLOYES</li>
      </ul>
        
      </nav><!--end .navbar -->

    </div>
  </header><!-- End Header -->
  <div class="details">
    {{$voir->nom}}<br>
    {{$voir->prenom}}<br>
    {{$voir->telephone}}<br>
    {{$voir->adresse}}<br>
    {{$voir->email}}<br>
    {{$voir->poste}}<br><br> 
</div>
<div>
  <a href="{{ URL::previous() }}" class="btn btn-default"><BUtton class="listeretour">Retour</BUtton></a>
</div>
