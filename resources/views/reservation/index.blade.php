@extends('layout.app')
@section('contenu')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-center">
                <h3 class="text-3xl mx-4 my-4">La liste des reservations de l'hôtel</h3>
                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Numero chambre</th>
                                        <th>Type chambre</th>
                                        <th>Date debut reservation</th>
                                        <th>Date fin reservation</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        @foreach($reserver as $reservation)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $reservation->client->nom }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                    {{ $reservation->client->prenom }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $reservation->chambre->numero_chambre }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $reservation->chambre->type_chambre }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $reservation->date_deb }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $reservation->date_fin }}
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a  style="list-style-type:none" href="{{ route('facture.afficher') }}" class="text-indigo-600 hover:text-indigo-900 btn btn-primary">Facturer</a>
                                                

                                                    <a  style="list-style-type:none" href="{{ route('reservation.show', $reservation) }}" class="text-indigo-600 hover:text-indigo-900 btn btn-success">Modifier</a>
                                                
                                                    <a href="#" class="text-red-600 hover:text-red-900 btn btn-danger" onclick="event.preventDefault(); if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) document.getElementById('delete-form-{{ $reservation->id }}').submit();">Supprimer</a>

                                                    <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservation.destroy', $reservation) }}" method="POST" style="display: none;">
                                                        @csrf
        
                                                    </form>
                                                </button>
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
