

<div class="container mt-5">
<div class="card">
  <div class="card-header">
    <h5>Pointer votre depart        
    </h5>
  </div>
  <div class="card-body">

        <!-- new form -->
        <form action="{{route('pointages.departupdate', $welcome->id)}}" method="POST">
                @csrf
                @method('PATCH')
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Votre Depart</label>
                <select class="form-control" name="presence">
                    <option value="Pointé" class="form-control" id="exampleInputPassword1">
                        <h6>Je rentre</h6>
                    </option>
                </select>
            </div>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- End form -->
  </div>
</div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<!-- Button trigger modal -->






