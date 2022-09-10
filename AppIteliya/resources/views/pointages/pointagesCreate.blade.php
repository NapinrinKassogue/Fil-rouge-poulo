

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
                
  
        <h5 class="modal-title" id="exampleModalLabel">Pointer ici </h5>

        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('pointages.pointagesarrivee')}}">
            <select name="presence" id="">
                <!-- <option value="">
                    <h6>pointe !</h6>
                </option> -->
                <option value="Present">
                    <h6>Present</h6>
                </option>
            </select>
        
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary">Pointer</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="container mt-5">
<div class="card">
  <div class="card-header">
    <h5>Pointages du Jour <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Pointer
 </button></h5>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Heure_arrivee</th>
      <th scope="col">Heure_depart</th>
      <th scope="col">Employé</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($pointer as $welcome)
    <tr>     
      <td>{{$welcome->id}}</td>
      <td>{{$welcome->created_at}}</td>
      <td>{{$welcome->updated_at}}</td>
      <td>{{$welcome->user->name}}</td>
      <td><a href="{{route('pointages.editer', $welcome->id)}}" class="btn btn-danger" >pointer_heure_depart</button></td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- Button trigger modal -->






