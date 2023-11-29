@extends('layout.app')
@section('contenu')

<form action="{{route('chambre.reservation',$chambre)}}" method="POST">
@csrf
 @method('PUT')
  <div class="mb-3 mt-3">
    <label for="nom" class="form-label">numero chambre:</label>
    <input type="text" class="form-control" id="name" value="{{ old('numero_chambre', $chambre->numero_chambre) }}" name="num">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Type de chambre:</label>
    <input type="text" class="form-control" id="prename" value="{{ old('type_chambre', $chambre->type_chambre) }}" name="type">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Statut chambre:</label>
    <input type="text" class="form-control" id="prename" value="{{ old('statut', $chambre->statut) }}" name="statut">
  </div>
   <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Nom Occupant:</label>
    <input type="text" class="form-control" id="prename" value="{{ old('nom', $chambre->user->nom ?? '') }}" name="nom">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Prenom:</label>
    <input type="text" class="form-control" id="prename" value="{{ old('prenom', $chambre->user->prenom ?? '') }}" name="prenom">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Date de debut reservation:</label>
    <input type="date" class="form-control" id="prename" value="" name="debut">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Date fin reservation:</label>
    <input type="date" class="form-control" id="prename" value="" name="fin">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Description:</label>
    <textarea type="text" class="form-control" id="prename" value="" name="description">
    </textarea>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection