@extends("adminlte::page")

@section("content")

    <div class="row pt-3 text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="pb-5">{{$region->nom}}</h2>
            </div>
        </div>
    </div>

    <div class="card pb-3" style="width: 80%; margin: 0 auto">
    <form>
        <div class="row">
            <div class="col-5 pt-3">
                <div class="form-group d-flex flex-column align-items-center">
                    <strong>Photo de la région</strong>
                    <hr>
                    <img style="width: 80%" src="{{asset('/storage/images/regions/'.$region->image)}}" alt="Photo du personnage"/>
                </div>
            </div>

            <div class="col-7 pt-3">
                <div class="form-group d-flex">
                    <strong class="pr-3">Nom de la région : </strong>
                    <p>{{$region->nom}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3">Capitale de la région : </strong>
                    <p>{{$region->ville->capitale}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3">Description de la région : </strong>
                    <p>{{$region->description}}</p>
                </div>
                <hr>
                <button class="btn btn-primary"><a href="/regions-admin" style="color: white">Revenir en arrière</a></button>
            </div>
        </div>
    </form>
    </div>
@endsection