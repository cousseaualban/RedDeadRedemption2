@extends("adminlte::page")

@section("content")

    <div class="row pt-3 text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="pb-5">{{$personnage->prenom}} {{$personnage->nom}}</h2>
            </div>
        </div>
    </div>

    <div class="card pb-3" style="width: 80%; margin: 0 auto">
    <form>
        <div class="row">
            <div class="col-5 pt-3">
                <div class="form-group d-flex flex-column align-items-center">
                    <strong>Photo du personnage</strong>
                    <hr>
                    <img style="width: 80%" src="{{asset('/storage/images/personnages/'.$personnage->image)}}" alt="Photo du personnage"/>
                </div>
            </div>

            <div class="col-7 pt-3">
                <div class="form-group d-flex">
                    <strong class="pr-3">Prénom du personnage : </strong>
                    <p>{{$personnage->prenom}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3">Nom du personnage : </strong>
                    <p>{{$personnage->nom}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3">Age : </strong>
                    <p>{{$personnage->age}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong>Biographie : </strong>
                    <p class="pl-3">{{$personnage->biographie}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3">Principal / Secondaire : </strong>
                    <p>{{$personnage->type}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3">Sa bande : </strong>
                    <p>{{$personnage->gang->nom}}</p>
                </div>
                <hr>
                <button class="btn btn-primary"><a href="/personnages-admin" style="color: white">Revenir en arrière</a></button>
            </div>
        </div>
    </form>
    </div>
@endsection