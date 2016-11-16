<?php namespace App\Http\Controllers;

use App\Repositories\AuctionsRepository as Auctions;

class DashboardController extends Controller
{
    /**
     * @var Auctions
     */
    private $auctions;

    /**
     * Create a new controller instance.
     * @param Auctions $auctions
     */
    public function __construct(Auctions $auctions)
    {
        //$this->middleware('guest');
        $this->middleware('auth', ['only' => 'logged']);
        $this->auctions = $auctions;
    }

    public function index()
    {

        return view('dashboard.index');
    }

}
