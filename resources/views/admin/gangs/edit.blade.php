@extends("adminlte::page")

@section("content")

<!-- Formulaire d'édition d'un personnage  -->

<div class="card uper">
    <div class="card-header text-center">
        <h2>Modifier {{$gang->nom}}</h2>
    </div>

    <div class="card-body" style="width: 40%">

        <form action="{{ route('gangs-admin.update', $gang->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="nom"> Nom de la bande : </label>
                <input type="text" name="nom" value="{{ $gang->nom }}" class="form-control" placeHolder="nom">
                @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Photo de la bande</label>
                <input type="file" class="form-control-file" name="image" />
                <img src="{{asset('/storage/images/gangs/'.$gang->image)}}" alt="Photo de la bande" style="width: 60%; padding-top: 3vh; padding-bottom: 3vh" />
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="historique">Histoire de la bande : </label>
                <textarea class="form-control" name="historique" style="height: 20vh;">{{ $gang->historique }}</textarea>
                @error('historique')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="localisation"> Localisation de la bande : </label>
                <input type="text" name="localisation" value="{{ $gang->localisation }}" class="form-control" placeHolder="localisation">
                @error('localisation')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection