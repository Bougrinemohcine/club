<!-- confirmation.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Confirmation de suppression</h1>
        <p>Êtes-vous sûr de vouloir supprimer cet adhérent ?</p>

        <form method="POST" action="{{ route('delete.adherent', $adhe->id) }}">
            @csrf
            @method('DELETE')

            <button type="submit">Confirmer</button>
            <a href="{{ route('admin') }}">Annuler</a>
        </form>
    </div>
@endsection
