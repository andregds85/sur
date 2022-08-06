<?php

namespace App\Http\Controllers;

use App\Models\checklist;
use Illuminate\Http\Request;
use App\Url;


class ChecklistController  extends Controller
{
      
    function __construct()
    {
         $this->middleware('permission:solicitante-list|solicitante-create|solicitante-edit|solicitante-delete', ['only' => ['index','show']]);
         $this->middleware('permission:solicitante-create', ['only' => ['create','store']]);
         $this->middleware('permission:solicitante-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:solicitante-delete', ['only' => ['destroy']]);
    }

        
    public function index()



    {       Checklist::all();
            return view('depurar.index');
    }


        
   public function editar($id)
    {
   return view ('depurar.alterar',['id'=>$id]);
    }
 

    public function update(Request $request, checklist $checklist)
    {
         request()->validate([
        
           ]);
           
    $checklist->update($request->all());
    return redirect()->route('depurar.index')
                        ->with('Sucesso','Paciente Atualizado com Sucesso');
    }   




   
    public function store(Request $request)
    {
        request()->validate([
               
        ]);    
        Checklist::create($request->all());
        echo  "<script>
        alert( 'Sucesso, Cadastro efetuado com Sucesso !' );
             </script>";

        return view('monitoramento.index');
  
    }



}


