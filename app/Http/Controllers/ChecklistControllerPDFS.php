<?php
  
namespace App\Http\Controllers;

use App\Models\Checklist;
  
use Illuminate\Http\Request;
use PDF;
  
class ChecklistControllerPDFS extends Controller
{

    function __construct()
    {
         $this->middleware('permission:solicitante-list|solicitante-create|solicitante-edit|solicitante-delete', ['only' => ['index','show']]);
         $this->middleware('permission:solicitante-create', ['only' => ['create','store']]);
         $this->middleware('permission:solicitante-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:solicitante-delete', ['only' => ['destroy']]);
    }
   


    public function index($id)
    {


       $data = [
            'title' => 'Depurar Filas',
            'date' => date('d/m/Y')
        ];
          
        $pdf = PDF::loadView('depurar.mypdf',['id'=>$id]);

    
        return $pdf->download('depurarFilas.pdf');
    }


}