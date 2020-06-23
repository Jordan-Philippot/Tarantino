@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 id="agence" class="col-sm-6 bg-white p-4">CONTACTER QUENTIN TARANTINO :</h1>
    </div>
</div>
<hr>


<!--______________ Contact Adresse ______________-->
<section class="container">
    <div class="row justify-content-center">
        <div class="card col-sm-8 m-4">
            <h4 class="card-header">LUI ECRIRE :</h4>
            <div class="card-body">
                <p class="card-title">Différents moyens de contact vous permettent d'atteindre Quentin Tarantino. Donc, si vous avez besoin d'un autographe, d'une photo dédicacée ou d'autres informations, vous pouvez envoyer une lettre à l'adresse suivante:</p>
                <address class="card-text">
                    Quentin Tarantino <br>
                    William Morris Endeavor Entertainment<br>
                    9601 Wilshire Blvd., 3rd Floor <br>
                    Beverly Hills, CA 90210-5213 USA.
                </address>
                <p>Ceci est l'adresse de l'agence de représentation artistique et littéraire de Quentin Tarantino.</p>
            </div>
        </div>
    </div>
</section>


<!--__________ Contact Téléphone _________-->
<section class="container">
    <div class="row justify-content-center">
        <div class="card col-sm-8 m-4">
            <h4 class="card-header">CONTACTER L'AGENCE ARTISTIQUE DE QUENTIN TARANTINO PAR TÉLÉPHONE AUX ÉTATS-UNIS :</h4>
            <div class="card-body">
                <p class="card-title">Vous pouvez la joindre par téléphone au <a href="tel:+3102859000"> (310) 285-9000.</a></p>
            </div>
        </div>
    </div>
</section>


<!--______________ Réseaux Sociaux ______________-->
<section class="container">
    <div class="row justify-content-center">
        <div class="card col-sm-8 m-4">
            <h4 class="card-header">SUIVEZ EGALEMENT TOUTE L'ACTUALITE DE QUENTIN TARANTINO SUR LES RESEAUX SOCIAUX :</h4>
            <div class="card-body">
                <div id="reseaux" class="offset-4 col-sm-2">
                    <a href="https://web.facebook.com/QuentinTarantinoDirector/?_rdc=1&_rdr"><img alt="facebook" src="{{ asset('images/facebook.png') }}"></a>
                    <a href="https://twitter.com/quentarantino?lang=en"><img alt="twitter" src="{{ asset('images/twitter.png') }}"></a>
                    <a href="https://www.instagram.com/tarantinoxx/?hl=en"><img alt="instagram" src="{{ asset('images/instagram.png') }}"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>

<!--____________ Titre Bonus  ___________-->
<div class="container">
    <div class="row justify-content-center">
        <h1 id="bonus" class="col-sm-6 bg-white p-4">BONUS :</h1>
    </div>
</div>

<!--_______________ Bonus _______________-->
<section class="card-deck">
    <div class="card">
        <a href="https://www.bmfwallets.com/"><img width="100%" src="{{ asset('images/bmf1.jpg') }}" alt="Bad Motherfucker Wallet"></a>
        <div class="card-body">
            <h5 class="card-title">LA BOUTIQUE OFFICIEL DES BAD MOTHERFUCKER</h5>
            <p class="card-text">Bienvenue sur la <a href="https://www.bmfwallets.com/">Bad Motherfucker Wallet!</a> Je vous laisse découvrir cette petite boutique en ligne dédiée au film Pulp Fiction, avec son forum et ses photos de fans assez.. satisfait de leurs achats.<br>
                Vous y trouverez notamment le porte-feuille de Jules (Samuel L. Jackson) dans Pulp Fiction. <em>Alors joues pas aux cons Ringo et vas y faire un tour !</em><br><br>
                Je vous laisse également visiter <a href="https://amzn.to/2qjjlDf">cette page</a> en partenariat avec Amazon sur laquel se trouve l'ensemble des objets dérivés du film, dont les célèbres Red Apple Cigarettes, présentes dans la majorité des oeuvres de Tarantino. <br>
                Sweet, Porte-clefs ou encore posters, tout y est! </p>
        </div>
        <div class="card-footer">
            <small class="text-muted">2019, BMF Wallet / Amazon</small>
        </div>
    </div>

    <div class="card">
        <a href="https://www.senscritique.com/liste/Meilleurs_realisateurs_de_tous_les_temps/829451/"><img width="100%" src="{{ asset('images/scorsese.jpg') }}" alt="Martin Scorsese"></a>
        <div class="card-body">
            <h5 class="card-title">VOUS AIMEREZ AUSSI :</h5>
            <p class="card-text">Vous avez aimé les films de Quentin Tarantino ? Alors je vous propose une petite sélection personnelle des Réalisateurs tout aussi légendaire:</p>
            <ul>
                <li><a href="https://fr.wikipedia.org/wiki/Martin_Scorsese" title="Scorsese est largement considéré par la critique internationale comme l'un des cinéastes américains les plus importants et influents de sa génération grâce à des classiques tels que Taxi Driver, Raging Bull, Mean Streets, Les Affranchis et Casino tous interprétés par Robert De Niro. Plus récemment, Le Loup de Wall Street fut un grand succès commerciale. En 2019, The Irishman fera sa sortie dans quelques salles puis sur Netflix.">Martin Scorsese</a></li>
                <li><a href="https://fr.wikipedia.org/wiki/David_Fincher" title="Il est principalement connu pour avoir réalisé les films Seven, Fight Club, L'Étrange Histoire de Benjamin Button, The Social Network et Gone Girl qui lui ont valu diverses récompenses et nominations aux Oscars du cinéma ou aux Golden Globes. Réputé pour son perfectionnisme, il peut tourner un très grand nombre de prises de ses plans et séquences afin d'obtenir le rendu visuel qu'il désire. Il a également développé et produit les séries télévisées House of Cards et Mindhunter, diffusées sur Netflix. Definitivement dans le Top 3!">David Fincher</a></li>
                <li><a href="https://fr.wikipedia.org/wiki/Guy_Ritchie" title="Il se fait connaître du grand public en 1998 avec sa comédie noire Arnaques, Crimes et Botanique. Il confirme son style avec un autre film de gangsters culte, Snatch. Viens ensuite Revolver, Rock'n'Rolla ou encore Sherlock Holmes. Il a plus récemment réaliser le tout dernier Aladdin. Souvent critiquer, rarement égalé.">Guy Ritchie</a></li>
                <li><a href="https://fr.wikipedia.org/wiki/Brian_De_Palma" title="Scarface, Les Incorruptibles ou encore L'Impasse, en passant par Mission impossible; Il est sans aucun doute un poid lourd de l'industrie hollywoodienne. ">Brian de Palma</a></li>
                <li><a href="https://fr.wikipedia.org/wiki/Francis_Ford_Coppola" title=" Il est surtout connu pour la trilogie du Parrain et Apocalypse Now, qui dépeint la guerre du Viêt Nam avec un lyrisme abouti.">Francis Ford Coppola</a></li>
            </ul>
            <p>A leurs manières, ils ont su marqué le cinéma par leurs styles et leurs mondes bien à eux.
                Des classiques comme Le Parrain, Casino, Fight Club, les Affranchis, Snatch, l'Impasse ou encore les séries comme mindhunter. En bref: sans eux, le cinéma ne serait pas ce qu'il est aujourdhui.</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">2019, Sens Critique / Wikipédia</small>
        </div>
    </div>
</section>
<hr>


<!--__________  Remerciements ____________-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-6 bg-white">
            <h4 id="sources">Sources:</h4>
            <ul class="pb-4 text-left">
                <li><a href="https://www.tarantino.info">Tarantino Archives 1999</a></li>
                <li><a href="https://www.quentintarantinofanclub.com">Tanratino Fan Club</a></li>
                <li><a href="https://fr.wikipedia.org/wiki/Quentin_Tarantino">Wikipedia</a></li>
                <li><a href="https://www.youtube.com/results?search_query=tarantino">Youtube</a></li>
                <li><a href="https://www.alexilubomirski.com/">Alexi Lubomirski</a></li>
                <li><a href="https://www.huffingtonpost.fr/search/?keywords=TARANTINO">Huffingtonpost</a></li>
                <li><a href="https://www.konbini.com/fr">Konbini</a></li>
                <li><a href="https://www.esquire.com/">Esquire</a></li>
                <li><a href="https://www.parismatch.com/">Paris Match</a></li>
                <li><a href="https://www.lesinrocks.com/sommaire/1244/">Les Inrockuptibles</a></li>
                <li><a href="https://www.ina.fr/">Institut National de l'Audiovisuel</a></li>
                <li><a href="https://www.amazon.fr/">Amazon</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection