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
                <label for="prenom"> Prénom du personnage : </label>
                <input type="text" class="form-control" name="prenom" />
            </div>

            <div class="form-group">
                <label for="nom"> Nom du personnage : </label>
                <input type="text" class="form-control" name="nom" />
            </div>

            <div class="form-group">
                <label for="image">Photo du personnage</label>
                <input type="file" class="form-control" name="image" />
            </div>

            <div class="form-group">
                <label for="age"> Age du personnage : </label>
                <input type="text" class="form-control" name="age" />
            </div>

            <div class="form-group">
                <label for="biographie">Biographie du personnage : </label>
                <textarea type="text" class="form-control" name="biographie" style="height: 20vh"></textarea>
            </div>

            <div class="form-group">
                <label for="type">Personnage principal / secondaire ? : </label>
                <select class="form-control" name="type">
                    <option value="principal">principal</option>
                    <option value="secondaire">secondaire</option>
                </select>
            </div>

            <div class="form-group">
                <label for="gang_id">Sa bande : </label>
                <select class="form-control" name="gang_id">
                    @foreach ($gangs as $gang)
                    <option value="{{ $gang->id }}">{{ $gang->nom }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</div>
@endsection