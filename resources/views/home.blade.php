@extends('layout')

@section('content')

    <a class="btn btn-primary" href="{{'/categorie'}}" role="button">Accéder aux détails de nos catégories d'articles</a>
    <a class="btn btn-primary" href="{{'/order'}}" role="button">Accéder aux détails de nos commandes</a>
    <a class="btn btn-primary" href="{{'/customer'}}" role="button">Accéder aux infos concernant les clients</a>
    <a class="btn btn-primary" href="{{'/order_product'}}" role="button">Accéder au suivi des produits commandés</a>

    <div id="accroche" class="text-center">
        <h1>Bienvenue dans notre arche regorgeant de bières sauvages !!!</h1>
    </div>
    <div class="container">
        <!--images menu-->
        <div id="menuaccueil" class="d-flex flex-row flex-wrap">
            <div class="col">
                <a href="/team" title="equipe"
                ><img src="{{asset('photos/equipe.jpg')}}" alt="equipe"
                    /></a>
            </div>
            <div class="col">
                <a href="/product" title="nos-bières"
                ><img src="{{asset('photos/nos-bières.jpg')}}" alt="nos-bières"
                    /></a>
            </div>
            <div class="col">
                <a href="/contact" title="contact"
                ><img src="{{asset('photos/contact.jpg')}}" alt="contact"
                    /></a>
            </div>
        </div>
        <!--présentation-->
        <div class="row">
            <div class="align-item-center">
                <h2>L'histoire de la création de la brasserie Noé</h2>
            </div>
            <div id="apropos">
                <p>
                    Il y a 2 ans, Aurélien, Lucie, Hubert et Hercule quittèrent leurs
                    emplois respectifs et commencèrent leur reconversion afin poursuivre
                    leur grande passion… la bonne bière ! <br />
                    Dans leur quête d’excellence, ils visitèrent les meilleurs brew pubs
                    d’Europe et, au nom de la recherche, ils échantillonnèrent des
                    bières de toutes les sortes. <br />
                    Ingénieux, ils apprirent rapidement le processus de création
                    brassicole en explorant et en fabriquant des arômes délicieux.
                    <br />
                    Et en décembre 2019, ils ouvrirent leur microbrasserie sur Grenoble.
                    <br />
                    Réputée pour son choix d’ingrédients tout en saveur et à bon prix,
                    l’excellence de ses bières 100% naturelles et l’accueil chaleureux
                    de son personnel, notre microbrasserie est fière de partager son
                    amour du houblon et de la mousse avec les aventuriers des 4 coins du
                    globe! <br />
                </p>
            </div>
        </div>
    </div>

@endsection

