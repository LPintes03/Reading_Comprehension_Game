<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function showGame()
    {
        // // Validate the chapter number
        // if ($number < 1 || $number > 30) {
        //     return abort(404); // Return a 404 error for invalid chapters
        // }

        // // Construct the view name dynamically
        // $viewName = 'games.game' . $number;

        // // Return the view
        // return view($viewName);

        return view('games.game1');
    }

}
