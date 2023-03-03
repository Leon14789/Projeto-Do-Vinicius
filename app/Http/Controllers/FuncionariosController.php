<?php

namespace App\Http\Controllers;
use App\Models\employee;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{

   // Cria novos Funcionarios 

   public function store(Request $request) {

      $employee = new employee();
      $employee->name = $request->name;
      $employee->cpf = $request->cpf;
      $employee->cell = $request->cell;
      $employee->save();
      return redirect()->to('/funcionario/funcionarios');
      }



// Lista todos os funcionarios em editar funcionarios 
   public function listar()
   {
      $employees = employee::all();
       return view('pages/edit-fun/editar-funcionario', compact('employees'));
   }


   public function edicao($id){
      $employee = employee::find($id);
      if(!$employee){
          abort(404);
      }
      return view('pages/edit-fun/fun-edit', compact('employee'));
  }

// editar Funcionarios
  public function editar(Request $request,$id){
      $employee = employee::find($id);
      if(!$employee){
          abort(404);
      }
      $employee->name = $request->name; 
      $employee->cpf = $request->cpf; 
      $employee->cell = $request->cell; 
      $employee->save();
      return redirect()->to('/funcionario/funcionarios');
  }
// Deletar Funcionario
  public function excluir(Request $request,$id){
    $employee = employee::find($id);
    if(!$employee){
        abort(404);
    }
    $employee->delete();
    return redirect()->to('/funcionario/funcionarios');
}

  







  
   







}




