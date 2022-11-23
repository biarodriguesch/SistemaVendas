<?php

namespace App\Http\Controllers;

use App\Models\DadosVendas;
use App\Models\Sales;
use Illuminate\Http\Request;


class VendasDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vendas = Sales::latest()->paginate(5);

        return view('vendas.index',compact('vendas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('vendas.vendas-create', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'produto' => 'required',
        ]);

        Sales::create($request->all());

        return redirect()->route('vendas.index')
                        ->with('success','Vendas created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show(Sales $sales)
    // {
    //     return view('vendas.show',compact('vendas'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sales)
    {
        return view('vendas.edit',compact('vendas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales)
    {
        $request->validate([
            'name' => 'required',
            'produto' => 'required',
            ]);
            $sales->update($request->all());

            return redirect()->route('vendas.index')
            ->with('success','vendas updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Sales $sales)
    // {
    //     $sales->delete();

    //     return redirect()->route('products.index')
    //                     ->with('success','Product deleted successfully');
    // }
}
