@extends("adminlte::page")

@section("content")

    <div class="row pt-3 text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="pb-5">{{$gang->nom}}</h2>
            </div>
        </div>
    </div>

    <div class="card pb-3" style="width: 80%; margin: 0 auto">
    <form>
        <div class="row">
            <div class="col-5 pt-3">
                <div class="form-group d-flex flex-column align-items-center">
                    <strong>Photo de la bande</strong>
                    <hr>
                    <img style="width: 90%" src="{{asset('/storage/images/gangs/'.$gang->image)}}" alt="Photo de la bande"/>
                </div>
            </div>

            <div class="col-7 pt-3">
                <div class="form-group d-flex">
                    <strong class="pr-3">Nom de la bande : </strong>
                    <p>{{$gang->nom}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3">Histoire de la bande : </strong>
                    <p>{{$gang->historique}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3">Localisation de la bande : </strong>
                    <p>{{$gang->localisation}}</p>
                </div>
                <hr>
                <button class="btn btn-primary"><a href="/personnages-admin" style="color: white">Revenir en arrière</a></button>
            </div>
        </div>
    </form>
    </div>
@endsection