<?php

namespace App\Http\Controllers;
use App\Models\vehicle;
use Illuminate\Http\Request;

class VeiculosController extends Controller
{
   
 // Cria novos Veiculos 

 public function criar(Request $request) {

    $vehicle = new vehicle();
    $vehicle->name = $request->name;
    $vehicle->tag = $request->tag;
    $vehicle->save();
    return redirect()->to('/funcionario/funcionarios');
    }



// Lista todos os funcionarios em editar funcionarios 
public function list()
{
   $vehicles = vehicle::all();
    return view('pages/edit-vei/editar-veiculo', compact('vehicles'));
}

public function edition($id){
    $vehicle = vehicle::find($id);
    if(!$vehicle){
        abort(404);
    }
    return view('pages/edit-vei/vei-edit', compact('vehicle'));
}

public function edit(Request $request,$id){
    $vehicle = vehicle::find($id);
    if(!$vehicle){
        abort(404);
    }
    $vehicle->name = $request->name; 
    $vehicle->tag = $request->tag; 
    $vehicle->save();
    return redirect()->to('/funcionario/funcionarios');
}




































}
