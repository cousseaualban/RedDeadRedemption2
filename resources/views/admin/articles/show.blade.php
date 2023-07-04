@extends("adminlte::page")

@section("content")

    <div class="row pt-3 text-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="pb-5">{{$article->titre}}</h2>
            </div>
        </div>
    </div>

    <div class="card pb-3" style="width: 80%; margin: 0 auto">
    <form>
        <div class="row">
            <div class="col-5 pt-3">
                <div class="form-group d-flex flex-column align-items-center">
                    <strong>Photo de l'article</strong>
                    <hr>
                    <img style="width: 80%" src="{{asset('/storage/images/articles/'.$article->image)}}" alt="Photo du article"/>
                </div>
            </div>

            <div class="col-7 pt-3">
                <div class="form-group d-flex">
                    <strong class="pr-3">Titre de l'article : </strong>
                    <p>{{$article->titre}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3">Auteur de l'article : </strong>
                    <p>{{$article->auteur}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3">Contenu de l'article : </strong>
                    <p>{{$article->contenu}}</p>
                </div>
                <hr>
                <div class="form-group d-flex">
                    <strong class="pr-3">Date de l'article : </strong>
                    <p>{{ $article-> dateArticle }}</p>
                </div>
                <hr>
                <button class="btn btn-primary"><a href="/articles-admin" style="color: white">Revenir en arrière</a></button>
            </div>
        </div>
    </form>
    </div>
@endsection