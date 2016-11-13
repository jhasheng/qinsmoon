<?php

namespace App\Http\Controllers;

use App\Repositories\AuctionsRepository;
use App\Http\Requests\AuctionsRequest;
use Laracasts\Flash\Flash;

class AuctionsController extends Controller
{
    /**
     * @var AuctionsRepository
     */
    protected $auctions;

    public function __construct(AuctionsRepository $auctions)
    {
        $this->auctions = $auctions;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auctions = $this->auctions->paginate(10);
        return view('auctions.index', compact('auctions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auctions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AuctionsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuctionsRequest $request)
    {
        $this->auctions->create($request->all());

        Flash::success('League successfully created');

        return redirect('/auctions');
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
        $auction = $this->auctions->find($id);

        return view('auctions.edit', compact('auction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AuctionsRequest $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(AuctionsRequest $request, $id)
    {
        dd($request->all());
        $auction = $this->auctions->find($id);
        $auction->update($request->all());

        Flash::success('Auctions successfully updated');
        return redirect('/auctions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->auctions->delete($id);
        Flash::success('League successfully deleted');

        return redirect('/auctions');
    }
}
