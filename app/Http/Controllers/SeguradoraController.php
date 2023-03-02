<?php

namespace App\Http\Controllers;
use App\Models\insurer;
use Illuminate\Http\Request;

class SeguradoraController extends Controller
{
    // Cria nova Seguradora 

 public function criacao(Request $request) {

    $insurer = new insurer();
    $insurer->name = $request->name;
    $insurer->save();
    return redirect()->to('/funcionario/funcionarios');
    }



// Lista todos as seguradoras
public function listagem()
{
   $insurers = insurer::all();
    return view('pages/edit-seg/editar-seguradora', compact('insurers'));
}

public function edicionar($id){
    $insurer = insurer::find($id);
    if(!$insurer){
        abort(404);
    }
    return view('pages/edit-seg/seg-edit', compact('insurer'));
}

public function mudar(Request $request,$id){
    $insurer = insurer::find($id);
    if(!$insurer){
        abort(404);
    }
    $insurer->name = $request->name; 
    $insurer->save();
    return redirect()->to('/funcionario/funcionarios');
}
}
