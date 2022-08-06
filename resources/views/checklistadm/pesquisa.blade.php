@extends('layouts4.app')
@section('content')

<?php
$nome=$_GET['p_nome'];

use App\Http\Controllers\ProdutoController;
use App\Models\Checklist;


$tabela = Checklist::all();
$tabela = Checklist::where('mes', 'LIKE', '%' . $nome . '%')->get();


?> 


<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
         <th>ID</th>
         <th>mes / macro</th>
         <th>Ação</th>
        </tr>
      </thead>

      <tbody>
      @foreach ($tabela as $t)
         <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->mes}}<br>{{$t->macro}}</td>


            <td>
            <a class="btn btn-info" href="{{ url('checklistpdf',$id=Crypt::encrypt($t->id)) }}">Imprimir PDF</a></td>
        </tr>
        @endforeach 
      </tbody>
  </table>
  <div class="d-flex justify-content-center">


</div>
</div>
</div>

</div>


<p class="text-center text-primary"><small>CheckList Seguro</small></p>
@endsection

