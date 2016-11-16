<?php

namespace App\Http\Controllers;

use App\Repositories\LeaguesRepository as Leagues;
use Illuminate\Http\Request;
use Flash;

class LeaguesController extends Controller
{
    /**
     * @var Leagues
     */
    private $leagues;

    public function __construct(Leagues $leagues)
    {
        $this->leagues = $leagues;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $leagues = $this->leagues->paginate(10);

        return view('leagues.index', compact('leagues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('leagues.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'        => 'required',
            'server_name' => 'required',
            'level'       => 'required',
            'uniqid'      => 'required',
        ]);

        $this->leagues->create($request->all());

        Flash::success('League successfully created');

        return redirect('/leagues');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $league = $this->leagues->find($id);
		return view('leagues.edit', compact('league'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'        => 'required',
            'server_name' => 'required',
            'level'       => 'required',
            'uniqid'      => 'required',
        ]);
        $league = $this->leagues->find($id);
        $league->update($request->all());

        Flash::success('League successfully updated');

        return redirect('/leagues');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->leagues->delete($id);
        Flash::success('League successfully deleted');

        return redirect('/leagues');
    }
}
