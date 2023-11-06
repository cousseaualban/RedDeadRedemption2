@extends("adminlte::page")

@section("content")

<div class="card uper">
    <div class="card-header text-center">
        <h2>Ajouter un nouveau personnage</h2>
    </div>

    <div class="card-body" style="width: 40%">

        <form action="{{ route('personnages-admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="prenom"> Prénom du personnage : *</label>
                <input type="text" class="form-control" name="prenom" />
                @error('prenom')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nom"> Nom du personnage : *</label>
                <input type="text" class="form-control" name="nom" />
                @error('nom')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Photo du personnage *</label>
                <input type="file" class="form-control" name="image" />
                @error('image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="age"> Age du personnage : *</label>
                <input type="text" class="form-control" name="age" />
                @error('age')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="biographie">Biographie du personnage : *</label>
                <textarea type="text" class="form-control" name="biographie" style="height: 20vh"></textarea>
                @error('biographie')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="type">Personnage principal / secondaire ? : *</label>
                <select class="form-control" name="type">
                    <option value="principal">principal</option>
                    <option value="secondaire">secondaire</option>
                </select>
                @error('type')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="gang_id">Sa bande : *</label>
                <select class="form-control" name="gang_id">
                    @foreach ($gangs as $gang)
                    <option value="{{ $gang->id }}">{{ $gang->nom }}</option>
                    @endforeach
                </select>
                @error('gang_id')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</div>
@endsection