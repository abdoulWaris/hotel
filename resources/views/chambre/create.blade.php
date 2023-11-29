@extends('layout.app')
@section('contenu')
<form action="{{route('client.create')}}" method="POST">
@csrf
  <div class="mb-3 mt-3">
    <label for="nom" class="form-label">numero chambre:</label>
    <input type="text" class="form-control" id="num" placeholder="Entrer un numero de chambre" name="num">
  </div>
   <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Type de chambre:</label>
    <input type="text" class="form-control" id="prenom" placeholder="Entrer le type de chambre" name="type chambre">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Statut de la chambre:</label>
    <input type="email" class="form-control" id="email" placeholder="Entrer le statut de la chambre" name="statut">
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection