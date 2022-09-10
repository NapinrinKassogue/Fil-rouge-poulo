<link href="{{asset('/css/style.css')}}" rel="stylesheet">
 <link href="{{asset('/csss/styles.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<header id="header" class="header fixed-top">
    
      <nav id="navbar" class="navbar">
        <ul><a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('/img/logo.jpg')}}" alt="">
      </a>
      <ul>
           <li class="dropdow">Justifications des Absences</li>
      </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <div class="card">
  <div class="card-body">
    <table class="table-responsive">
    <thead>
        <th>Nom_Expedit</th>
        <th>Date_Debut</th>
        <th>Date_Fin</th>
        <th>Fichier</th>
        <th>Motif</th>
        <th>Id_Employés</th>
        <!-- <th>Action</th> -->
    </thead>
    <tbody>
    
        @foreach($justifier as $justifiers)
        <tr>
          
            <td>{{$justifiers->user->name}}</td>
            <td>{{$justifiers->datedebut}}</td>
            <td>{{$justifiers->datefin}}</td>
            <td>{{$justifiers->fichier}}</td>
            <td>{{$justifiers->motif}}</td>
            <td>{{$justifiers->user->id}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
  </div>
</div>

<div>
  <a href="{{ URL::previous() }}" class="btn btn-default"><BUtton class="listeretour">Retour</BUtton></a>
</div>
 