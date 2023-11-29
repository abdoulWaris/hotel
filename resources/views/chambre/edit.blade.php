@extends('layout.app')
@section('contenu')

<form action="{{route('chambre.update',$chambre)}}" method="POST">
@csrf
 @method('PUT')
  <div class="mb-3 mt-3">
    <label for="nom" class="form-label">numero chambre:</label>
    <input type="text" class="form-control" id="num" value="{{ old('numero_chambre', $chambre->numero_chambre) }}" name="num">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Type de chambre:</label>
    <input type="text" class="form-control" id="type" value="{{ old('type_chambre', $chambre->type_chambre) }}" name="type">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Statut chambre:</label>
    <input type="text" class="form-control" id="statut" value="{{ old('statut', $chambre->statut) }}" name="statut">
  </div>
   <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Nom Occupant:</label>
    <input type="text" class="form-control" id="nom" value="{{ old('nom', $chambre->user->nom) }}" name="nom">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Prenom Occupant:</label>
    <input type="text" class="form-control" id="prenom" value="{{ old('prenom', $chambre->user->prenom) }}" name="prenom">
  </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection