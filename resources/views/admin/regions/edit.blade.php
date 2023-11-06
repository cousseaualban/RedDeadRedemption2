@extends("adminlte::page")

@section("content")

<!-- Formulaire d'édition d'un région  -->

<div class="card uper">
    <div class="card-header text-center">
        <h2>Modifier {{$region->prenom}} {{$region->nom}}</h2>
    </div>

    <div class="card-body" style="width: 40%">

        <form action="{{ route('regions-admin.update', $region->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="nom"> Nom de la région : *</label>
                <input type="text" name="nom" value="{{ $region->nom }}" class="form-control" placeHolder="nom">
                @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Photo de la région : *</label>
                <input type="file" class="form-control-file" name="image" />
                <img src="{{asset('/storage/images/regions/'.$region->image)}}" alt="Photo du région" style="width: 60%; padding-top: 3vh; padding-bottom: 3vh" />
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description"> Description de la région : *</label>
                <textarea class="form-control" name="description" style="height: 20vh;">{{ $region->description }}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="ville_id">Capitale de la région : *</label>
                <select name="ville_id" class="form-control">
                    @foreach($villes as $ville)
                    <option value="{{ $ville->id }}" @if($ville->id == $region->ville_id) selected @endif>{{ $ville->capitale }}</option>
                    @endforeach
                </select>
                @error('ville_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection