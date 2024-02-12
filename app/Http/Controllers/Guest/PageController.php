<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// mettere collegamento con i models movie
use App\Models\Movie ;

class PageController extends Controller
{
    public function index()
    {
        // all prende tutti i dati nella tabella del database qua è dove si fanno le query al database si può mettere where order by find al posto di all
        // qua dentro si scrive il codice anche per salvare un dato dentro al database 
        $movies= Movie :: all();

        return view('pages.index', compact('movies'));
    }
}
