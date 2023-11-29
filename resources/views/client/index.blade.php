@extends('layout.app')
@section('contenu')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center">
                <h3 class="text-3xl mx-4 my-4">La liste des Clients de l'hôtel</h3>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>email</th>
                                        <th>Téléphone</th>
                                        <th>Date creation</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($client as $client)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $client->nom }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $client->prenom }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $client->email }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $client->telephone }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                    {{$client->created_at}}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                
                                                    <a class="btn btn-primary" type="submit" href="{{ route('client.afficher') }}" class="text-indigo-600 hover:text-indigo-900">Ajouter</a>


                                                    <a class="btn btn-success" type="submit" href="{{ route('client.show', $client) }}" class="text-indigo-600 hover:text-indigo-900">Modifier</a>
                                                
                                             
                                                    <a href="#" class="text-red-600 hover:text-red-900 btn btn-danger" onclick="event.preventDefault(); if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) document.getElementById('delete-form-{{ $client->id }}').submit();">Supprimer</a>

                                                    <form id="delete-form-{{ $client->id }}" action="{{ route('client.destroy', $client) }}" method="POST" style="display: none;">
                                                        @csrf
        
                                                    </form>
                                                
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal de creation -->
    <div class="modal fade" id="creation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Modal body..
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
@endsection
