<link href="{{asset('/css/style.css')}}" rel="stylesheet">
 <link href="{{asset('/csss/styles.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

<header id="header" class="header fixed-top">
    
      <nav id="navbar" class="navbar">
        <ul><a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('/img/logo.jpg')}}" alt="">
      </a>
      <ul>
           <li class="dropdow">LISTE DES PERMISSIONS</li>
      </ul>
        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<table class="table-responsive">
    <thead>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Motif</th>
        <th>UserId</th>
        <!-- <th>Action</th> -->
    </thead>
    <tbody>
    
        @foreach($lespermissions as $permissions)
        <tr>
            <td>{{$permissions->nom}}</td>
            <td>{{$permissions->prenom}}</td>
            <td>{{$permissions->email}}</td>
            <td>{{$permissions->motif}}</td>
            <td>{{$permissions->userId}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div>
  <a href="{{ URL::previous() }}" class="btn btn-default"><BUtton class="listeretour">Retour</BUtton></a>
</div>
