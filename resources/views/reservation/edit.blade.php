@extends('layout.app')
@section('contenu')

<form action="{{route('reservation.update',$reservation)}}" method="POST">
@csrf
 @method('PUT')
  <div class="mb-3 mt-3">
    <label for="nom" class="form-label">numero chambre:</label>
    <input type="text" class="form-control" id="name" value="{{ old('numero_chambre', $reservation->chambre->numero_chambre) }}" name="num">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Type de chambre:</label>
    <input type="text" class="form-control" id=" " value="{{ old('type_chambre', $reservation->chambre->type_chambre) }}" name="type">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Statut chambre:</label>
    <input type="text" class="form-control" id=" " value="{{ old('statut', $reservation->chambre->statut) }}" name="statut">
  </div>
   <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Nom Occupant:</label>
    <input type="text" class="form-control" id=" " value="{{ old('nom', $reservation->client->nom ?? '') }}" name="nom">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Prenom:</label>
    <input type="text" class="form-control" id=" " value="{{ old('prenom', $reservation->client->prenom ?? '') }}" name="prenom">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Date de debut reservationvation:</label>
    <input type="date" class="form-control" id=" " value="{{ old('date_deb', $reservation->date_deb ?? '') }}" name="debut">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Date fin reservationvation:</label>
    <input type="date" class="form-control" id=" " value="{{ old('date_fin', $reservation->date_fin ?? '') }}" name="fin">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Description:</label>
    <textarea type="text" class="form-control" id=" " value="{{ old('description', $reservation->description ?? '') }}" name="description">
    </textarea>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection