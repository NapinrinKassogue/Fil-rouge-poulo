<link href="{{asset('/css/style.css')}}" rel="stylesheet">
 <link href="{{asset('/csss/styles.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<header id="header" class="header fixed-top">
    
      <nav id="navbar" class="navbarjust">
        <ul><a href="index.html" class="logo d-flex align-items-center mt-2">
        <img src="{{ asset('/img/logo.jpg')}}" alt="">
      </a>
      <ul class="navbarjust">
           <li class="dropdow mb-5">Liste des Permissions</li>
      </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    </div>
  </header><!-- End Header -->
  <div class="container">
 <div class="card">
   <div class="card-header">
      <h5>Listes de justifications des Absences</h5>
   </div>
<table class="table-responsive">
    <thead>
        <th>Nom</th>
        <th>Date_Debut</th>
        <th>Date_Fin</th>
        <th>Motif</th>
        <th>Id_employes</th>
        <!-- <th>Action</th> -->
    </thead>
    <tbody>
    
        @foreach($lespermissions as $permissions)
        <tr>
            <td>{{$permissions->user->name}}</td>
            <td>{{$permissions->datedebut}}</td>
            <td>{{$permissions->datefin}}</td>
            <td>{{$permissions->motif}}</td>
            <td>{{$permissions->user->id}}</td>
        </tr>
        @endforeach
     </tbody>
 </table>
</div>
</div>
<div>
<div>
  <a href="{{ URL::previous() }}" class="btn btn-default float-end"><BUtton class="listeretour">Retour</BUtton></a>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- Button trigger modal -->
