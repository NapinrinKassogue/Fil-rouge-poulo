<link href="{{asset('/css/style.css')}}" rel="stylesheet">
 <link href="{{asset('/csss/styles.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<header id="header" class="header fixed-top">
    
      <nav id="navbar" class="navbar">
        <ul><a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('/img/logo.jpg')}}" alt="">
      </a>
      <ul>
           <li class="dropdow">LISTE DES TOUS LES EMPLOYES</li>
      </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<table class="table-responsive">
    <a href="{{ route('employes.employesCreate')}}"><button class="ajoute">Ajouter</button></a>
    <thead>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Telephone</th>
        <th>Adresse</th>
        <th>Email</th>
        <th>Poste</th>
        <th>UserId</th>
        <th>Action</th>
    </thead>
    <tbody>
    
        @foreach($listeEmployes as $employes)
        <tr>
            <td>{{$employes->nom}}</td>
            <td>{{$employes->prenom}}</td>
            <td>{{$employes->telephone}}</td>
            <td>{{$employes->adresse}}</td>
            <td>{{$employes->email}}</td>
            <td>{{$employes->poste}}</td>
            <td>{{$employes->userId}}</td>
            <td>
             <form action="{{ route('employes.destroy', $employes->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="icosupp" type="submit"><i class="bi bi-trash"></i></button>
                 <a class="icomod" href="{{ route('employes.edit', $employes->id)}}"><i class="bi bi-pencil-square"></i></a>
                 <a class="icovoir" href="{{ route('employes.show', $employes->id)}}"><i class="bi bi-eye"></i></a></td>
             </form>
            </td>
           
        </tr>
        @endforeach
    </tbody>
</table>
<div>
  <a href="{{ URL::previous() }}" class="btn btn-default"><BUtton class="listeretour">Retour</BUtton></a>
</div>
