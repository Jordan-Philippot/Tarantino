@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">

    <section class="container">
        <div class="row justify-content-center">
            <h1 class="col-sm-10">BIENVENUE SUR LE FANCLUB DE TARANTINO </h1>
        </div>
    </section>




    <!--_________ Welcome __________-->
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-sm-4">
                <h4> Bienvenue sur le site du Réalisateur Quentin Tarantino</h4>
                <p id="welcome">
                    Vous découvrirez ici l'illustre scénariste plusieurs fois primé pour ses chefs-d'œuvre dramatiques/ comiques mêlant récits de voyous, dialogues improbables et violence gratuite. Parce que oui, c'est de ça qu'il s'agit!
                    Si vous ne le connaissez pas encore, je vous invite à consulter sa page biographique en lien ci-dessus ou en cliquant <a href="{{ route('biographie') }}">Ici</a>.
                    Vous pouvez également accéder à sa filmographie contenant une large gamme de films où tous ses succès sont répertoriés.
                    Vous êtes un grand fan? Vous avez la possibilité de contacter directement l'agence de production fondée par Tarantino: "A Bandapart".
                    Bonne visite!</p>
                <hr>
            </div>
        </div>
    </section>


    <!--_______________  Présentation News ________________-->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6 bg-white">
                <h4>Actualités</h4>
                <p class="px-4 pb-4">News/ Archives/ People; <em> Tout est ici !</em>
                </p>
                <input class="form-control m-2" type="search" placeholder="Search" aria-label="Search" name="searchWelcome" id="searchWelcome">
            </div>
        </div>
    </div>

    <!--_______________ News Ligne 1 _____________-->
    <div id="resultsSearch"></div>

    <div class="container-fluid films results" id="results">
        <div class="card-deck">
            <div class="card">
                <iframe src="https://www.youtube.com/embed/Xe_ZQk_Rs98" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title">Once Upon A Time In… Hollywood - Bande-annonce Officielle - VF</h5>
                    <p class="card-text">
                        Un film réalisé par Quentin Tarantino.
                        L’histoire se déroule en 1969, à Hollywood, au moment de l’apogée du mouvement hippie. Les deux personnages principaux sont Rick Dalton (Leonardo DiCaprio), une ancienne star d’une série télévisée de western, et Cliff Booth (Brad Pitt), sa doublure cascade de toujours. Les deux hommes tentent de s’en sortir dans un Hollywood qu’ils ne reconnaissent plus. Mais Rick a une voisine très célèbre… Sharon Tate.
                        Rendez-vous le 14 août au cinéma.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">19/06/19, Sony Pictures </small>
                </div>
            </div>
            <div class="card">
                <iframe src="https://www.youtube.com/embed/0eHI6t6ertY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title">Avec Tarantino et le casting de « Once Upon A Time In..Hollywood »</h5>
                    <p class="card-text">Ils ont enflammé cette édition 2019 du Festival de Cannes avec « Once Upon a Time… in Hollywood ». On a rencontré Quentin Tarantino, Margot Robbie, Brad Pitt et Leonardo DiCaprio !</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">24/05/19, Kobini</small>
                </div>
            </div>
            <div class="card">
                <iframe src="https://www.youtube.com/embed/fnLxthCNQQY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title">Interview de Tarantino by Konbini</h5>
                    <p class="card-text"> Son neuvième film « Once upon a time in Hollywood » sort ce mercredi. À cette occasion, nous avons rencontré l’immense Quentin Tarantino ! Les films qui l’ont marqué durant sa jeunesse, ses années de travail dans un vidéoclub, l’écriture de ses dialogues et ses futurs projets… Le réalisateur culte nous dit tout!.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">12/08/19, Konbini </small>
                </div>
            </div>
        </div>


        <!--__________________ News Ligne 2 _________________-->

        <div class="card-deck">
            <div class="card">
                <a href="https://www.huffingtonpost.fr/entry/once-upon-a-tim-hollywood-decor_fr_5d44488ae4b0ca604e310634?utm_hp_ref=fr-quentin-tarantino"><img width="100%" src="{{ asset('images/huffingpost.png') }}" alt="Los Angeles 1969"></a>
                <div class="card-body">
                    <h5 class="card-title"> Comment "Once Upon a Time... in Hollywood" a recréé le Los Angeles de 1969 </h5>
                    <p class="card-text">CINÉMA - Le réalisateur a reconstitué l'ambiance sonore et visuelle de l'époque sans aucune retouche numérique, car pour lui, "c'est tricher". Quelques jours à peine après les cinquante ans du meurtre de l’ancienne épouse de Roman Polanski, Sharon Tate, par des membres de la secte de Charles Manson en 1969, sort en salles ce mercredi 14 août “Once Upon a Time... in Hollywood”, le neuvième long-métrage de Quentin Tarantino.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">14/09/19, Huffpost, de Valentin Etancelin</small>
                </div>
            </div>
            <div class="card">
                <a href="https://www.esquire.com/entertainment/movies/a27458589/once-upon-a-time-in-hollywood-leonardo-dicaprio-brad-pitt-quentin-tarantino-interview/"><img width="100%" src="{{ asset('images/cabriolet.png') }}" alt="Once Upon a Time in Hollywood"></a>
                <div class="card-body">
                    <h5 class="card-title">Quentin Tarantino, Brad Pitt, et Leonardo DiCaprio Vous embarques avec eux dans 'Once Upon a Time...In Hollywood'</h5>
                    <p class="card-text">Alors que le réalisateur dévoile son neuvième film très attendu, Esquire l’assied avec ses vedettes pour un interrogatoire provocateur à trois têtes sur le passé et le présent de Hollywood. Mais qu'est-ce que Charles Manson et River Phoenix ont à voir avec cela? Par Michael Hainey et Photographies de Alexi Lubomirski</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">21/05/2019, Esquire</small>
                </div>
            </div>
            <div class="card">
                <a href="https://www.huffingtonpost.fr/entry/pulp-fiction-de-tarantino-fete-ses-25-ans-a-cannes-comment-un-film-devient-il-culte_fr_5ce3a5b4e4b087700993bdb9"><img width="100%" src="{{ asset('images/25-ans.png') }}" alt="Pulp Fiction 25 ans"></a>
                <div class="card-body">
                    <h5 class="card-title">"Pulp Fiction" de Tarantino fête ses 25 ans à Cannes: comment un film devient-il culte?</h5>
                    <p class="card-text">CINÉMA - “You know what they put on french fries in Holland instead of ketchup? Mayonnaise”.
                        C’est une des nombreuses répliques cultes de “Pulp Fiction”, ce film de Quentin Tarantino qui fête cette année ses 25 ans. Alors que se tient le Festival de Cannes 2019, le réalisateur américain présente, ce mardi 21 mai, son nouveau long-métrage: “Once Upon a Time in Hollywood”.
                        Une oeuvre qui pourrait bien atteindre le même niveau de popularité que “Pulp Fiction”.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">21/05/19, Huffingtonpost</small>
                </div>
            </div>
        </div>


        <!--_________________  New Ligne 3 _______________-->

        <div class="card-deck">
            <div class="card">
                <iframe src="https://www.youtube.com/embed/WuX4u_XPcsY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                    <h5 class="card-title"> Festival de Cannes : Palme d'or à Quentin Tarantino pour " Pulp fiction " - Archive vidéo INA </h5>
                    <p class="card-text">Cinéma : en direct du Palais des festivals, à Cannes, annonce de l'attribution de la palme d'or à Quentin TARANTINO pour son film "PULP FICTION" par le Président du jury, Clint EASTWOOD . Présence sur la scène de Jeanne MOREAU et des acteurs du film John TRAVOLTA, Bruce WILLIS, Rosanna ARQUETTE</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">23 mai 1994, Institut National de l'Audiovisuel </small>
                </div>
            </div>
            <div class="card">
                <a href="https://www.parismatch.com/People/Quentin-Tarantino-bientot-papa-a-56-ans-1642983"><img width="100%" src="{{ asset('images/pere.jpg') }}" alt="Quentin Tarantino et Daniella Pick"></a>
                <div class="card-body">
                    <h5 class="card-title">Quentin Tarantino et son épouse Daniella Pick attendent leur premier enfant.</h5>
                    <p class="card-text">Alors que son nouveau film rencontre un vif succès dans les salles du monde entier, Quentin Tarantino s'apprête à réaliser le rêve d'une vie. A 56 ans, le talentueux réalisateur va devenir papa. Son épouse, Daniella Pick est enceinte de leur premier enfant. «Daniella et Quentin Tarantino sont très heureux d'annoncer qu'ils attendent un bébé», a simplement déclaré le couple dans un communiqué transmis mercredi 21 août 2019 au magazine «People».</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">22/08/2019 Paris Match</small>
                </div>
            </div>
            <div class="card">
                <a href="https://www.huffingtonpost.fr/2018/03/15/la-maison-de-jimmie-dimmick-alias-quentin-tarantino-dans-pulp-fiction-est-a-vendre_a_23386825/"><img width="100%" src="{{ asset('images/jimmie.jpg') }}" alt="Maison de Jimmie Dimmick"></a>
                <div class="card-body">
                    <h5 class="card-title">La maison de Jimmie Dimmick, alias Quentin Tarantino, dans "Pulp Fiction" est à vendre</h5>
                    <p class="card-text">C'est une annonce qui va attirer les cinéphiles. Pour 1,395 millions de dollars (seulement),
                        il est désormais possible d'acheter une des maisons les plus cultes de l'histoire du cinéma.
                        Mise en vente par l'agence immobilière The Agency, la maison de Jimmie Dimmick, interprété par le réalisateur Quentin Tarantino, dans "Pulp Fiction" est à vendre. Située à Studio City, dans la vallée de San Fernando à Los Angeles, la maison se trouve au pied des collines et ne semble pas avoir changé depuis le mythique passage de John Travolta et Samuel L. Jackson, venus... cacher un corps dans la maison de Jimmie, qui s'inquiète à juste titre pour son mariage.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">15/03/2018, Huffingtonpost</small>
                </div>
            </div>
        </div>





        <!--________________  New Ligne 4  ______________-->

        <div class="card-deck">
            <div class="card">
                <iframe frameborder='0' marginheight='0' marginwidth='0' scrolling='no' src='https://player.ina.fr/player/embed/CAB98013237/1/1b0bd203fbcd702f9bc9b10ac3d0fc21/wide/0' allow='fullscreen,autoplay'></iframe>
                <div class="card-body">
                    <h5 class="card-title"> Jackie Brown au 20H </h5>
                    <p class="card-text">Reportage consacré au dernier film de Quentin TARANTINO "Jackie Brown". Interview de Quentin TARANTINO entrecoupée d'extraits de film. Le réalisateur parle de son admiration pour les femmes de caractère et du genre de son film</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">23 mai 1994, Institut National de l'Audiovisuel </small>
                </div>
            </div>
            <div class="card">
                <a href="https://www.20minutes.fr/culture/2154775-20171020-affaire-harvey-weinstein-quentin-tarantino-savait-rien-dit"><img width="100%" src="{{ asset('images/weinstein.png') }}" alt="Affaire Weinstein"></a>
                <div class="card-body">
                    <h5 class="card-title">Affaire Harvey Weinstein: Quentin Tarantino sort de son silence.</h5>
                    <p class="card-text"> « J'en savais suffisamment pour réagir plus que ce que je n'ai fait.» C'est une interview en forme de confession. Jeudi, Quentin Tarantino qui a entretenu une relation quasi filiale avec Harvey Weinstein depuis Reservoir Dogs, en 1992, est sorti de son silence. « C'était plus que les rumeurs habituelles, les ragots. Ce n'était pas des "on dit". Je savais qu'il avait fait plusieurs de ces choses.», avoue-t-il au New York Times. </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">22/08/2019 Paris Match</small>
                </div>
            </div>
            <div class="card">
                <a href="https://www.lesinrocks.com/2019/08/02/cinema/actualite-cinema/on-a-classe-tous-les-films-de-tarantino-et-le-premier-va-sans-doute-vous-etonner/"><img width="100%" src="{{ asset('images/travolta1.jpg') }}" alt="Travolta Pulp Fiction"></a>
                <div class="card-body">
                    <h5 class="card-title">On a classé tous les films de Tarantino</h5>
                    <p class="card-text">Quel est le meilleur film de Quentin Tarantino ? Quel est son moins bon ? Difficile d'apporter une réponse définitive à cette question qui en appelle d'autres, tant la filmographie du cinéaste est un bloc compact, travaillé par des obsessions qu'il n'a eu de cesse de revisiter. Mais à l'occasion de la sortie, le 14 août prochain, de Once upon the time... in Hollywood, le dixième film de sa prodigieuse carrière, on a décidé de jouer le jeu du top 10, et de livrer un classement (forcément subjectif) de tous les films de QT, du moins bon au meilleur.
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">02/08/2019, Les Inrockuptibles</small>
                </div>
            </div>
        </div>
    </div>

    <!--______________  Bouton menu   ____________-->
    <div class="row justify-content-center">
        <a href="#Menu1"><button type="button" class="btn btn-info">Menu</button></a>
    </div>

    <div class="content">



    </div>
</div>
@endsection