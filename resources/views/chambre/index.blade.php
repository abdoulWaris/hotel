@extends('layout.app')
@section('contenu')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center">
                <h3 class="text-3xl mx-4 my-4">La liste des Chambres de l'hôtel</h3>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <a class="btn btn-primary" style="list-style-type:none" href="{{ route('chambre.create') }}" class="text-indigo-600 hover:text-indigo-900">Ajouter Chambre</a>
<br><br>
                            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                <thead>
                                    <tr>
                                        <th>numero Chambre</th>
                                        <th>Type Chambre</th>
                                        <th>Statut Chambre</th>
                                        <th>Nom Occupant</th>
                                        <th>Prenom Occupant</th>
                                        <th style="width:45%">Actions</th>

                                    </tr>
                                </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($chambre as $chambre)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $chambre->numero_chambre ?? '' }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $chambre->type_chambre }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $chambre->statut }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $chambre->user->nom ?? '' }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $chambre->user->prenom ?? '' }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">

                                                <a class="btn btn-info" style="list-style-type:none" href="{{ route('chambre.afficher',$chambre) }}" class="text-indigo-600 hover:text-indigo-900">Reservation</a>
                                               
                                                </button>

                                                
                                                <a class="btn btn-success" style="list-style-type:none" href="{{ route('chambre.show', $chambre) }}" class="text-indigo-600 hover:text-indigo-900">Modifier</a>
                                                
                                                
                                                    <a href="#" class="text-red-600 hover:text-red-900 btn btn-danger" onclick="event.preventDefault(); if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) document.getElementById('delete-form-{{ $chambre->id }}').submit();">Supprimer</a>

                                                    <form id="delete-form-{{ $chambre->id }}" action="{{ route('chambre.destroy', $chambre) }}" method="POST" style="display: none;">
                                                        @csrf
        
                                                    </form>
                                                
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
