<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function accueil()
    {
        return view('welcome');
    }
    public function film(Request $request)
    {

        $request = DB::table('film')->orderBy('annee_prod', 'DESC')->get();
        return view('filmographie', compact('request'));
    }

    public function search(Request $request)
    {

        if ($request->ajax()) {
            if (isset($request->searchWelcome) && !empty($request->searchWelcome)) {
                $data = DB::table('video')->where('titre', 'LIKE', '%' . $request->searchWelcome . '%')->orderBy('titre', 'DESC')->get();
                $dat = DB::table('article')->where('titre', 'LIKE', '%' . $request->searchWelcome . '%')->orderBy('titre', 'DESC')->get();
            }
            $output = '';

            if (count($data) > 0 || count($dat > 0)) {

                $output = '<div class="container-fluid flex">';

                foreach ($data as $row) {
                    // $picture = '/images/' . $row->picture;
                    $output .= ' <div class="dataSearch card col-sm-4">
                       
                            <iframe src="' . $row->href . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <div class="card-body">
                                <h5 class="card-title">' . $row->titre . '</h5>
                                <p class="card-text">
                                ' . $row->resumer . '</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">' . Carbon::parse($row->date_publi)->diffForHumans() . ', ' . $row->editeur . ' </small>
                            </div>
                        </div>';
                }
                foreach ($dat as $row) {
                    $picture = '/images/' . $row->source;
                    $output .= ' <div class="dataSearch card col-sm-4">
                        <a href="' . $row->href . '"><img width="100%" src="' . $picture . '" alt="' . $row->alt . '"></a>
                        <div class="card-body">
                            <h5 class="card-title"> ' . $row->titre . '</h5>
                            <p class="card-text">' . $row->resumer . '</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">' . Carbon::parse($row->date_publi)->diffForHumans() . ', ' . $row->editeur . '</small>
                        </div>
                    </div>';
                }

                $output .= '</div>';
            } else {

                $output .= '<div class="alert alert-danger"> Désolé, aucun résultat n\'a été trouvé </div>';
            }

            return $output;
        }
    }
}
