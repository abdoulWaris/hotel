@extends('layout.app')
@section('contenu')
        <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h4 class="mb-0 text-white">Infos utilisateur</h4>
                            </div>
                            <form class="form-horizontal"action="{{ route('user.update', $user) }}" method="POST" class="mx-auto">
                                @csrf
                                @method('PUT')
                                <div class="form-body">
                                    <div class="card-body">
                                        <h4 class="card-title mb-0">Person Info</h4>
                                    </div>
                                    <div class="card-body border-top">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group row py-3">
                                                    <label class="control-label text-end col-md-4 font-weight-medium">First Name:</label>
                                                    <div class="col-md-8">
                                                    <input type="text" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ old('name', $user->name) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group row py-3">
                                                    <label class="control-label text-end col-md-4 font-weight-medium">Email:</label>
                                                    <div class="col-md-8">
                                                    <input type="text" name="email" id="email" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" value="{{ old('email', $user->email) }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/span-->
                                        </div>
                                        <!--/row-->
                                    </div>
                                   
                                    <div class="form-actions text-center">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                        &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;
                                                        &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;
                                                        &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;
                                                        &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;
                                                        &emsp; &emsp; &emsp; &emsp;
                                                        &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp; &emsp;
                                                            <button type="submit" class="btn btn-danger" type="submit"> <i class="fa fa-pencil"></i> Edit</button>
                                                            <button type="button" class="btn btn-dark"><a href="{{ route('user')}}">Cancel</a></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6"> </div>
                                            </div>
                                        </div>
                                    </div>
</form>
@endsection