<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $clients = [
        ['id' => 10, 'name' => 'adam'],
        ['id' => 20, 'name' => 'john'],
        ['id' => 30, 'name' => 'mary'],
        ['id' => 40, 'name' => 'penny']
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = session('clients', $this->clients);
        return view('clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $clients = session('clients', $this->clients);
        $last = end($clients);
        $id = ($last) ? ($last['id'] + 10) : 10;
        $name = $request->name;
        $clients[] = [ 'id' => $id, 'name'=>$name ];
        session(['clients' => $clients ]);

        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = session('clients', $this->clients);
        $index = $this->getIndex($id, $clients);
        $client = $clients[ $index ];
        return view('clients.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function getIndex($id, $clients) {
        $ids = array_column($clients, 'id');
        $index = array_search($id, $ids);
        return $index;
    }
}
