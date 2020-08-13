<?php

namespace App\Http\Controllers;

use App\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stmt = DB::table('charlie_materials_filiale1')->select('identification')->distinct()->paginate(15);
        $data['customers'] = $stmt;
        return view('customers.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('charlie_materials_filiale1')
            ->select('charlie_materials_filiale1.id_mat', 'charlie_materials_filiale1.identification')
            ->where('identification', '=', $id)
            ->get();

        return view('customers.detail')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = Customers::where('id_mat', '=', $id)->first();
        return view('customers.edit', compact('material'));
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
        $request->validate([
            'lost' => 'required',
            'status' => 'required',
            'control_place' => 'required',
            'completed' => 'required',
            'observation' => 'required',
        ]);

        $material = Customers::where('id_mat', '=', $id)->first();
        $material->lost = $request->get('lost');
        $material->status = $request->get('status');
        $material->control_place = $request->get('control_place');
        $material->completed = $request->get('completed');
        $material->observation = $request->get('observation');
        $material->save();

        return redirect('/customers')->with('success', 'Le matériel n°' . $id . ' à bien été modifier avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Customers::where('id_mat', '=', $id);
        $material->delete();
        return redirect('/customers')->with('success', 'Le matériel n°' . $id . ' à bien été supprimer.');
    }

    // This function allow search customers.
    public function search()
    {
        $q = request()->input('q');

        $customers = DB::table('charlie_materials_filiale1')
            ->where('identification', 'like', "%$q%")
            ->paginate(10);

        return view('customers.search')->with('customers', $customers);
    }
}
