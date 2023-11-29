@extends('layout.app')
@section('contenu')

<form action="{{route('facture.create')}}" method="POST">
 @csrf
 @method('PUT')
 <input type="hidden" class="form-control" id="name" value="{{ old('numero_chambre', $chambre->id) }}" name="id" >
  <div class="mb-3 mt-3">
    <label for="nom" class="form-label">Montant de la chambre:</label>
    <input type="number" class="form-control" id="name" value="{{ old('numero_chambre', $chambre->numero_chambre) }}" name="num">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Type de chambre:</label>
    <input type="text" class="form-control" id="prename" value="{{ old('type_chambre', $chambre->type_chambre) }}" name="type">
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Statut chambre:</label>
    <select name="statut" id="">
        <option value="paiement">Paiement</option>
        <option value="facturation">Facturation</option>
    </select>
  </div>
  <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Description:</label>
    <textarea type="text" class="form-control" id="prename" value="" name="description">
    </textarea>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection