
<div class="container mt-5">
<div class="card">
  <div class="card-header">
    <h5>Tous les Pointages</h5>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Heure_arrivee</th>
      <th scope="col">Heure_depart</th>
      <th scope="col">Employé</th>

      <th scope="col">Etat</th>
    </tr>
  </thead>
  <tbody>
    @foreach($touspointages as $welcome)
    <tr>     
      <td>{{$welcome->created_at}}</td>
      <td>{{$welcome->updated_at}}</td>
      <td>{{$welcome->user->name}}</td>

      <td>{{$welcome->presence}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- Button trigger modal -->






