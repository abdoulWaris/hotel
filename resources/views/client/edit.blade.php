@extends('layout.app')
@section('contenu')

<form action="{{route('client.update',$client)}}" method="POST">
@csrf
 @method('PUT')
  <div class="mb-3 mt-3">
    <label for="nom" class="form-label">Nom:</label>
    <input type="text" class="form-control" id="name" value="{{ old('nom', $client->nom) }}" name="nom">
  </div>
   <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Prenom:</label>
    <input type="text" class="form-control" id="prename" value="{{ old('prenom', $client->prenom) }}" name="prenom">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" value="{{ old('email', $client->email) }}" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">telephone:</label>
    <input type="number" class="form-control" id="tel" value="{{ old('telephone', $client->telephone) }}" name="telephone">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection