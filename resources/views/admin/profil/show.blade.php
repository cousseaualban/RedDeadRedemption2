@extends("adminlte::page")

@section("content")

<div class="row pt-3 text-center">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="pb-5">Profil de {{$user->name}}</h2>
        </div>
    </div>
</div>

<div class="card pb-3" style="width: 60%;">
    <form>
        <div class="row">
            <div class="col-7 pt-3">
                <div class="form-group d-flex">
                    <strong class="pr-3 pl-3">Nom d'utilisateur : </strong>
                    <p>{{$user->name}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3 pl-3">Adresse mail : </strong>
                    <p>{{$user->email}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3 pl-3">Mot de passe : </strong>
                    <p>{{ str_repeat('*', strlen($user->password)) }}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3 pl-3">Compte créé le : </strong>
                    <p>{{ $user->created_at->locale('fr')->isoFormat('DD MMMM YYYY') }}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3 pl-3">Dernière modification le : </strong>
                    <p>{{ $user->updated_at->locale('fr')->isoFormat('DD MMMM YYYY') }}</p>
                </div>
                <button class="btn btn-primary ml-3"><a href="/users" style="color: white">Revenir en arrière</a></button>
                <a href="{{ route('changementMDP.index', $user->id) }}" class="btn btn-success">Modifier le mot de passe</a>
            </div>
        </div>
    </form>
</div>
@endsection