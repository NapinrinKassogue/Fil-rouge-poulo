<link href="{{asset('/csss/styles.css')}}" rel="stylesheet">
<header id="header" class="header fixed-top">
    
      <nav id="navbar" class="navbar">
        <ul><a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('/img/logo.jpg')}}" alt="">
      </a>
      <ul>
           <li class="dropdow">MODIFICATION LES INFORMATIONS DES EMPLOYES</li>
      </ul>
        
      </nav><!--end .navbar -->

    </div>
  </header><!-- End Header -->
<form class="edit" action="{{ route('employes.update', $modifie->id)}}" method="post">
    @csrf
    @method('patch')
<input class="editforme" type="text" name="nom" value="{{$modifie->nom}}"><br><br>
<input class="editforme" type="text" name="prenom" value="{{$modifie->prenom}}"><br><br>
<input class="editforme" type="text" name="telephone" value="{{$modifie->telephone}}"><br><br>
<input class="editforme" type="text" name="adresse" value="{{$modifie->adresse}}"><br><br>
<input class="editforme" type="text" name="email" value="{{$modifie->email}}"><br><br>
<input class="editforme" type="text" name="poste" value="{{$modifie->poste}}"><br><br> 
<input class="modif" type="submit" value="modifier">  
</form>