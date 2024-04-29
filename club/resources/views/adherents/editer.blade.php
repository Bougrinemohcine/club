@extends('layouts.app')

@section('content')

            <h2 style="margin-left:500px;">Modifier adhérent</h2><br>
  
           
           
            <form action="{{ route('utilisateurs.update', $user->id) }}" method="POST"   style="margin-left:500px;">
    @csrf
    @method('PUT')
    <div class="form-group row" >
        <label for="nom" class="col-sm-2 col-form-label" >Nom :</label>
      
            <input type="text" name="nom" id="nom" value="{{ $user->nom }}" class="form-control" style="width:300px;" >
        
    </div>
    <div class="form-group row">
        <label for="prenom" class="col-sm-2 col-form-label">Prénom :</label>
            <input type="text" name="prenom" id="prenom" value="{{ $user->prenom }}" class="form-control" style="width:300px;" >
       
    </div>
    <div class="form-group row">
        <label for="ville" class="col-sm-2 col-form-label">Ville :</label>
      
            <input type="text" name="ville" id="ville" value="{{ $user->ville }}" class="form-control" style="width:300px;" >
        
    </div>
    <div class="form-group row">
        <label for="telephone" class="col-sm-2 col-form-label">Téléphone :</label>
      
            <input type="text" name="telephone" id="telephone" value="{{ $user->telephone }}" class="form-control" style="width:300px;" >
       
    </div>
    <div class="form-group row">
        <label for="cin" class="col-sm-2 col-form-label">CIN :</label>
        
            <input type="text" name="cin" id="cin" value="{{ $user->cin }}" class="form-control" style="width:300px;" >
    
    </div>
    <div class="form-group row">
        <label for="carte" class="col-sm-2 col-form-label">Carte :</label>
       
            <input type="text" name="carte" id="carte" value="{{ $user->carte }}" class="form-control" style="width:300px;" >
     
    </div>
    <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email :</label>
        
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control" style="width:300px;" >
        
    </div>
    <div class="form-group row">
        <label for="random_code" class="col-sm-2 col-form-label">Code aléatoire :</label>
    
            <input type="text" name="random_code" id="random_code" value="{{ $user->random_code }}" class="form-control" style="width:300px;" >
        
    </div>
        <button type="submit" class="btn btn-primary" style="background-color: #00DACF; color: black;">Modifier</button>
    </div>
</form>

        </div>
    </div>

@endsection
