@extends('layout.app')
@section('contenu')
<form action="{{route('client.create')}}" method="POST">
@csrf
  <div class="mb-3 mt-3">
    <label for="nom" class="form-label">Nom:</label>
    <input type="text" class="form-control" id="name" placeholder="Entrer un nom" name="nom">
  </div>
   <div class="mb-3 mt-3">
    <label for="prenom" class="form-label">Prenom:</label>
    <input type="text" class="form-control" id="prenom" placeholder="Entrer un prenom" name="prenom">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="email" placeholder="Entrer un email" name="email">
  </div>
  <div class="mb-3">
    <label for="tel" class="form-label">telephone:</label>
    <input type="number" class="form-control" id="telephone" placeholder="Entrer un numero" name="telephone">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection