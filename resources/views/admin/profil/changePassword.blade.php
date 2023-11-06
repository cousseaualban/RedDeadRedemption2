@extends("adminlte::page")

@section("content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Changer le mot de passe</h2>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('changementMDP.store') }}">
                        @csrf

                        @foreach ($errors->all() as $error)
                        <p class="text-danger">{{$error}}</p>
                        @endforeach

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-center">Mot de passe actuel</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="current_password" autocomplete="current_password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-center">Nouveau mot de passe</label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current_password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-center">Confirmer le nouveau mot de passe</label>

                            <div class="col-md-6">
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current_password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary"><a href="/" style="color: white">
                                        Modifier le mot de passe</a>
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