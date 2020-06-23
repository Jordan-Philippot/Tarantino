@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <h1 class="col-sm-8 px-4"> FILMOGRAPHIE DE QUENTIN TARANTINO, 30 ANS DE CARRIERE : </h1>
    </div>
</div>

<section class="container">
    <div class="row justify-content-center">

    </div>
</section>


<!--_________________ Présentation Filmo ________________-->



<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-8 bg-white">
            <h4>FILMOGRAPHIE DETAILLE</h4>
            <p class="px-4">Films, Documentaire, Livres ou encore Emission TV; Peu importe ce que vous cherchez, vous le trouverez ci-dessous! Voici la liste <em>complète et détaillée
                </em> de sa filmographie depuis ses débuts dans les années 80.
            </p>

            <form class="form-inline px-4 pb-4" method="GET" action="">
                <input class="form-control" type="search" placeholder="Rechercher..." aria-label="Search" name="searchWelcomes" id="searchWelcomes">
            </form>
        </div>
    </div>
</div>


<div id="resultsSearchs"></div>

<div class="container-fluid films results" id="resultss">
    @foreach ($request as $ad)
    <div class="col-sm-2 film">
        <img class="card-img-top" src="{{ asset('images/' . $ad->source) }}" alt="{{ $ad->titre}}" title="{{ $ad->resumer }}">
        <a class="lien" href="{{ $ad->href }}">
            <p>{{ $ad->titre}}, {{ $ad->annee_prod}}</p>
        </a>
    </div>


    @endforeach
</div>


<section class="container">
    <div class="row justify-content-center">
        <!--_________________ Filmo détailler ___________________-->

        <div class="col-sm-8" class="accordion-responsive" id="accordionExample">

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Directeur
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>Once upon a time in.. Holywood - 2019 - Directeur/Scénariste/Producteur</li>
                            <li>The Hateful Eight - 2015 - Directeur/Scénariste/Producteur </li>
                            <li>Django Unchained - 2012 - Directeur/Scénariste/Producteur </li>
                            <li>Inglourious Basterds - 2009 - Directeur/Scénariste/Producteur</li>
                            <li>Death Proof - 2007 - Première partie de Grindhouse double film réalisé séparément.</li>
                            <li>CSI - 2005 (Série TV) - Double-Episode: "Grave Danger" Partie 1 & 2</li>
                            <li>Sin City - 2005 - Invité spécial en tant que Directeur</li>
                            <li>Kill Bill: Volume 2 - 2004 </li>
                            <li>Jimmy Kimmel Live - 2004 (Show TV) - Episode: 20 Avril</li>
                            <li>Kill Bill: Volume 1 - 2003 </li>
                            <li>Jackie Brown - 1997 </li>
                            <li>Emergency Room - 1995 (Série TV) - Episode: Motherhood</li>
                            <li>Four Rooms 1995 - Segment: The Man from Hollywood</li>
                            <li>Pulp Fiction - 1994 </li>
                            <li>Reservoir Dogs - 1992 </li>
                            <li>My Best Friend's Birthday - 1987 - Jamais abouti</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Producteur
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>Once Upon a Time in Hollywood - 2019 - Producteur Exécutif</li>
                            <li>The Hateful Eight - 2015 - Producteur Exécutif</li>
                            <li>Django Unchained 2012 - Producteur Exécutif</li>
                            <li>Inglourious Basterds - 2009 - Producteur Exécutif</li>
                            <li>Hell Ride - 2008 - Producteur Exécutif</li>
                            <li>Hostel: Part II - 2007 - Producteur Exécutif</li>
                            <li>Death Proof - 2007 - Producteur Exécutif - Première partie de Grindhouse double film réalisé séparément.</li>
                            <li>Freedom's Fury 2006 (Documentaire) - Producteur Exécutif</li>
                            <li>Hostel - 2005 - Producteur Exécutif</li>
                            <li>Daltry Calhoun 2005 - Producteur Exécutif</li>
                            <li>My Name is Modesty - 2004 (Video) - Producteur Exécutif</li>
                            <li>From Dusk Till Dawn 3: The Hangman's Daughter - 2000 - Producteur Exécutif</li>
                            <li>From Dusk Till Dawn 2: Texas Blood Money 1999 - Producteur Exécutif</li>
                            <li>Curdled 1996 - Producteur Exécutif</li>
                            <li>From Dusk Till Dawn 1996 - Producteur Exécutif</li>
                            <li>God Said, 'Ha!' 1998 - Producteur Exécutif</li>
                            <li>Four Rooms 1995 - Producteur Exécutif</li>
                            <li>Killing Zoe 1994 - Producteur Exécutif</li>
                            <li>Past Midnight 1992 - Producteur associé</li>
                            <li>My Best Friend's Birthday 1987 - Producteur - Never Finished</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Scénariste
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>Once Upon a Time in Hollywood - 2019</li>
                            <li>The Hateful Eight - 2015</li>
                            <li>Django Unchained - 2012 </li>
                            <li>Inglourious Basterds - 2009 </li>
                            <li>Death Proof - 2007 </li>
                            <li>CSI - 2005 (Série TV) - Double-Episode: Grave Danger Partie 1 et 2 </li>
                            <li>Kill Bill: Volume 2 - 2004 </li>
                            <li>Kill Bill: Volume 1 - 2003 </li>
                            <li>Jackie Brown - 1997 - Adapté de Elmore Leonard du livre Rum Punch</li>
                            <li>Curdled- 1996 - Gecko Brothers News Report</li>
                            <li>From Dusk Till Dawn - 1996 - Scénario basé sur l'histoire de Robert Kurtzman</li>
                            <li>The Rock - 1996 - Réécritures non créditées </li>
                            <li>Four Rooms - 1995 - Segment: The Man from Hollywood</li>
                            <li>Crimson Tide - 1995 - Réécritures non créditées </li>
                            <li>It's Pat - 1994 - Réécritures non créditées</li>
                            <li>Pulp Fiction - 1994 - Scénario basé sur les histoires de QT & Roger Avary</li>
                            <li>Natural Bo Killers - 1994 - Scénario Original/ Film version original </li>
                            <li>Reservoir Dogs - 1992</li>
                            <li>True Romance - 1992 </li>
                            <li>My Best Friend's Birthday - 1987</li>
                            <li>Captain Peachfuzz and the Anchovy Bandit - 1985 Scénario inachevé</li>
                            <li>Love Birds in Bondage - 1983 - Inachevé - Détruit</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Acteur
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>Django Unchained 2012 - LeQuint-Dickey Employé de l'exploitation minière</li>
                            <li>Sukiyaki Weste: Django 2007 - Piringo</li>
                            <li>Grind House 2007 - Warren le Barman (Death Proof) et le Violeur #1 (Planet Terror)</li>
                            <li>Duck Dodgers 2005 (Série TV) - Maître Moloch (Voix) - Episodes: Master & Disaster / All in the Crime Family</li>
                            <li>Alias 2004 (Série TV) - McKenas Cole - Episodes: After Six et Full Disclosure (Voix)</li>
                            <li>Alias 2002 (Série TV) - McKenas Cole - Double-Episode: The Box Partie 1 et 2</li>
                            <li>Little Nicky 2000 - Deacon</li>
                            <li>Wait Until Dark 1998 (Play) - Harry Roat</li>
                            <li>Jackie Brown 1997 - Voix sur répondeur vocal - Non crédité</li>
                            <li>Girl 6 1996 - Q.T</li>
                            <li>From Dusk Till Dawn 1996 - Richard Gecko</li>
                            <li>Saturday Night Live 1995 (Show TV) - Invité - Episode: #21.5</li>
                            <li>Four Rooms 1995 - Chester Rush - Segment: The Man from Hollywood)</li>
                            <li>All-American Girl 1995 (Show TV) - Desmond - Episode: Pulp Sitcom</li>
                            <li>Pulp Fiction 1994 - Jimmie Dimmick</li>
                            <li>The Coriolis Effect 1994 - Panhandle Slim (Voix)</li>
                            <li>Destiny Tus on the Radio 1995 - Johnny Destiny</li>
                            <li>Desperado 1995 - Cammioneur</li>
                            <li>Dance me to the End of Love 1995 - Groom (Video Clip)</li>
                            <li>Somebody to Love 1994 - Barman</li>
                            <li>Sleep with Me 1994 - Sid</li>
                            <li>Reservoir Dogs 1992 - Mr. Brown</li>
                            <li>Eddie Presley 1992 - Auxilière à l'Asile</li>
                            <li>Vegetables 1989 (Video) </li>
                            <li>The Golden Girls 1988 (Série TV) - Imitateur d'Elvis - Episode: Sophia's Wedding Part 1</li>
                            <li>My Best Friend's Birthday 1987 - Clarence Pool - Inachevé</li>
                            <li>Love Birds in Bondage 1983 - Petit-ami - Inachevé - Détruit</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Divers
                        </button>
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            <li>Dead On: The Life and Cinema of George A. Romero 2008 (Documentaire) - Lui-même </li>
                            <li>Diary Of The Dead 2008 - News Reporter (Voix)</li>
                            <li>The Muppets' Wizard of Oz 2006 - Lui-même</li>
                            <li>Hostel 2005 - Présentateur (Quentin Tarantino presents)</li>
                            <li>Kill Bill: Volume 2 2004 - Producteur Exécutif de la Bande-son</li>
                            <li>Planet of the Pitts 2004 - Lui-même</li>
                            <li>Z Channel: A Magnificent Obsession 2004 (Documentaire) - Lui-même</li>
                            <li>Kill Bill: Volume 1 2003 - Producteur Exécutif de la Bande-son</li>
                            <li>My Name is Modesty 2003 - Présentateur (Quentin Tarantino presents)</li>
                            <li>Ying xiong (Hero) 2002 - Présentateur (Quentin Tarantino presents)</li>
                            <li>All the Love You Cannes! 2002 (Documentaire) - Lui-même</li>
                            <li>Baadasssss Cinema 2002 (Documentaire) - Lui-même</li>
                            <li>Jackie Chan: My Story 1998 (Documentaire) - Lui-même</li>
                            <li>Jackie Brown 1997 - Producteur Exécutif de l'albulm</li>
                            <li>Full Tilt Boogie 1997 (Documentaire) - Lui-même</li>
                            <li>A Salute to Clint Eastwood 1996 (Documentaire) - Lui-même</li>
                            <li>PerfecTV Commercial 1996 (TV Commerciale) - Lui-même</li>
                            <li>Steven Spielberg's Director's Chair 1996 (CD Rom /VG) - Lui-même / Jack Cavello</li>
                            <li>Maximum Potential 1987 (V) - Assistant de production</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--_______________ Remerciements sources _________________-->

<section class="container">
    <div class="row justify-content-center">
        <p class="col-sm-6">&copy; Source:<a href="https://www.quentintarantinofanclub.com">Tanratino Fan Club</a></p>
    </div>
    <div class="row justify-content-center">
        <a href="#Menu3"><button type="button" class="btn btn-info">Menu</button></a>
    </div>
</section>



@endsection