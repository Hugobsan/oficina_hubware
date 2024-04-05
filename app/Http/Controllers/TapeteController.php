<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\TapeteRequest;
use App\Models\Tapete;

class TapeteController extends Controller
{
    public function index(){
        return view('tapetes.index');
    }

    public function store(TapeteRequest $request){
        $tapete = Tapete::create([
            'estampa' => $request->estampa,
            'limpo' => $request->has('limpo'),
            'novo' => $request->has('novo'),
            'voador' => $request->has('voador'),
            'magico' => $request->has('magico'),
            'tamanho' => $request->tamanho,
            'quantidade' => $request->quantidade,
            'observacao' => $request->obs,
        ]);

        return redirect()->route('tapetes.index')
        ->with('success', 'Tapete cadastrado com sucesso!');
    }

    public function list(){
        $tapetes = Tapete::all();
        return view('tapetes.list', compact('tapetes'));
    }

    public function show($id){
        $tapete = Tapete::findOrFail($id);
        if($tapete->estampa == 'Fractal 1') $tapete->img = 'estampa1.jpg';
        if($tapete->estampa == 'Fractal 2') $tapete->img = 'estampa2.jpg';
        if($tapete->estampa == 'Fractal 3') $tapete->img = 'estampa3.jpg';
        return view('tapetes.show', compact('tapete'));
    }

    public function update(TapeteRequest $request, $id){
        $tapete = Tapete::findOrFail($id);
        $tapete->update([
            'estampa' => $request->estampa,
            'limpo' => $request->has('limpo'),
            'novo' => $request->has('novo'),
            'voador' => $request->has('voador'),
            'magico' => $request->has('magico'),
            'tamanho' => $request->tamanho,
            'quantidade' => $request->quantidade,
            'observacao' => $request->obs,
        ]);

        return redirect()->route('tapetes.index')
        ->with('success', 'Tapete atualizado com sucesso!');
    }

    public function delete($id){
        $tapete = Tapete::findOrFail($id);
        $tapete->delete();

        return redirect()->route('tapetes.index')
        ->with('success', 'Tapete deletado com sucesso!');
    }
}
