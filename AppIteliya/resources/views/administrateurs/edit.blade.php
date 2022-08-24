<form action="{{ route('administrateurs.update', $rafraichir->id)}}" method="post">
    @csrf
    @method('patch')
<input type="text" name="nom" value="{{$modifie->nom}}">
<input type="text" name="prenom" value="{{$modifie->prenom}}">
<input type="text" name="telephone" value="{{$modifie->telephone}}">
<input type="text" name="adresse" value="{{$modifie->adresse}}">
<input type="text" name="email" value="{{$modifie->email}}">
<input type="text" name="poste" value="{{$modifie->poste}}"> 
<input type="submit" value="modifier">   
</form>