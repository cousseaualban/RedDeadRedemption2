@extends("adminlte::page")

@section("content")

<div class="card uper">
    <div class="card-header text-center">
        <h2>Ajouter une nouvelle région</h2>
    </div>

    <div class="card-body" style="width: 40%">

        <form action="{{ route('regions-admin.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nom"> Nom de la région : </label>
                <input type="text" class="form-control" name="nom" />
            </div>

            <div class="form-group">
                <label for="image">Photo de la région</label>
                <input type="file" class="form-control" name="image" />
            </div>

            <div class="form-group">
                <label for="description"> Description de la région : </label>
                <textarea type="text" class="form-control" name="description" style="height: 20vh"></textarea>
            </div>

            <div class="form-group">
                <label for="ville_id">Capitale de la région : </label>
                <select class="form-control" name="ville_id">
                    @foreach ($villes as $ville)
                    <option value="{{ $ville->id }}">{{ $ville->capitale }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
</div>
@endsection