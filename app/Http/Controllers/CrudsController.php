<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;  
use View;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cliente::latest()->paginate(5);
        return view('index', compact('data'))
                ->width('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'nome'    =>  'required',
            'email'   =>  'required'
        ]);

        $form_data = array(
            'nome'   => $request->nome,
            'email'  =>   $request->email
        );

        Cliente::create($form_data);

        return redirect('crud')->with('success', 'Dados armazenados com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Cliente::findOrFail($id);
        return view('view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Cliente::findOrFail($id);
        return view('edit', compact('data'));
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
                'nome'    =>  'required',
                'email'   =>  'required'
            ]);
        

        $form_data = array(
            'nome'    =>   $request->nome,
            'email'   =>   $request->email
        );
  
        Cliente::whereId($id)->update($form_data);

        return redirect('crud')->with('success', 'Dados atualizados com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Cliente::findOrFail($id);
        $data->delete();

        return redirect('crud')->with('success', 'Dados deletados com sucesso.');
    }
}

