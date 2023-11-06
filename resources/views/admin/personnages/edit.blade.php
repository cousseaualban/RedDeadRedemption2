@extends("adminlte::page")

@section("content")

<!-- Formulaire d'édition d'un personnage  -->

<div class="card uper">
    <div class="card-header text-center">
        <h2>Modifier {{$personnage->prenom}} {{$personnage->nom}}</h2>
    </div>

    <div class="card-body" style="width: 40%">

        <form action="{{ route('personnages-admin.update', $personnage->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")

            <div class="form-group">
                <label for="prenom"> Prénom du personnage : </label>
                <input type="text" name="prenom" value="{{ $personnage->prenom }}" class="form-control" placeHolder="prenom">
                @error('prenom')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nom"> Nom du personnage : </label>
                <input type="text" name="nom" value="{{ $personnage->nom }}" class="form-control" placeHolder="nom">
                @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Photo du personnage</label>
                <input type="file" class="form-control-file" name="image" />
                <img src="{{asset('/storage/images/personnages/'.$personnage->image)}}" alt="Photo du personnage" style="width: 60%; padding-top: 3vh; padding-bottom: 3vh" />
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="age"> Age du personnage : </label>
                <input type="text" name="age" value="{{ $personnage->age }}" class="form-control" placeHolder="age">
                @error('age')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="biographie">Biographie du personnage : </label>
                <textarea class="form-control" name="biographie" style="height: 20vh;">{{ $personnage->biographie }}</textarea>
                @error('biographie')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="type"> Personnage principal / secondaire ? </label>
                <select name="type" class="form-control">
                    <option value="principal">principal</option>
                    <option value="secondaire">secondaire</option>
                </select>
                @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gang_id">Sa bande : </label>
                <select name="gang_id" class="form-control">
                    @foreach($gangs as $gang)
                    <option value="{{ $gang->id }}" @if($gang->id == $personnage->gang_id) selected @endif>{{ $gang->nom }}</option>
                    @endforeach
                </select>
                @error('gang_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</div>
@endsection