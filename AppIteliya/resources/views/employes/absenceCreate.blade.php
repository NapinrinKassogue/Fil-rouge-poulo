@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Justifier Absence') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('absence.create') }}" enctype="multipart/form-data">

                    @if(count($errors) > 0)
                        <div class=" alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>    

                                @endforeach
                            </ul>
                        </div>
                        @endif

                        @if (session('success'))
                        <div class="alert alert-success">
                            <p>{{ session('success') }}</p>
                        </div> 
                        @endif
                        @csrf
                        <div class="row mb-3">
                            <label for="datedebut" class="col-md-4 col-form-label text-md-end">{{ __('Date_debut_absence') }}</label>

                            <div class="col-md-6">
                                <input id="datedebut" type="date" name="datedebut" class="form-control @error('datedebut') is-invalid @enderror" name="datedebut" value="{{ old('datedebut') }}" required autocomplete="datedebut" autofocus>

                                @error('datedebut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="datefin" class="col-md-4 col-form-label text-md-end">{{ __('Date_fin_absence') }}</label>

                            <div class="col-md-6">
                                <input id="datefin" type="date" name="datefin" class="form-control @error('datefin') is-invalid @enderror" name="datefin" value="{{ old('datefin') }}" required autocomplete="datefin" autofocus>

                                @error('datefin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="motif" class="col-md-4 col-form-label text-md-end">{{ __('Fichier') }}</label>

                            <div class="col-md-6">
                                <input id="fichier" type="file" name="fichier" class="form-control @error('fichier') is-invalid @enderror" name="fichier" value="{{ old('fichier') }}" required autocomplete="fichier" autofocus>

                                @error('fichier')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <input type="integer" hidden name="userId" value="{{ Auth::user()->id }}">

                         <div class="row mb-3">
                            <label for="employes_Id" class="col-md-4 col-form-label text-md-end">{{ __('Motif') }}</label>

                            <div class="col-md-6">
                               
                                <textarea id="motif" type="motif" class="form-control @error('motif') is-invalid @enderror" name="motif" value="{{ old('motif') }}" required autocomplete="motif" autofocus rows="5" cols="40"></textarea>
                                @error('motif')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                       
                       

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Envoyer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection