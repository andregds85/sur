<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;

$tabela = Checklist::all(); 

$id1=Crypt::decrypt($id);


$itensP = Checklist::where('id',$id1)->get(); 

?>

<form>
   <input type="button" value="Imprimir" onClick="window.print()" />
</form>


    @foreach ($itensP  as $t)

    <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
<body>
<table class="table table-bordered">
  <tbody>
    <tr>
    <td>
    <img src="http://www.cerintersc.com.br/content/img/logo.png" width="100" height="100"> 
</td>
      <td align="center"><b>
      <br>Estado de Santa Catarina
      <br>Secretaria de Estado da Saúde 
      <br>Central Estadual de Serviços Especializado e Regulação
      <br>Depurar Fila <br>
     </td>
     </tr>
  </tbody>
</table>


<table class="table table-bordered">
  <tbody>
    <tr>
      <td colspan="5"><b>ID</b> :{{$t->id }} <br>
    <b>Data da Solicitacao:</b>{{$t->preenchimento }} <br>
    <b> Hora da Solicitação:</b> {{$t->horaPreenchimento }} <br>
    <b> Nome: </b>{{$t->nome }}<br>
    </td>
    </tr>
  </tbody>
  </table>


  <table class="table table-bordered">
  <tbody>
    <tr>
      <td><b>Mês:</b>{{$t->mes }} <br>
          <b>Macro:</b>{{$t->macro }}<br>
           <b>Fila: </b> {{$t->Fila_unidadeHospitalar }}<br>
           <b>Unidade Hospitalar desejada:</b>{{$t->unidade_hospitalarDesejada }}<br>
           <b>obs:</b>{{$t->obs }}<br>
           <b>Data Informação Depuação: </b> {{$t->dataInformacao_Depuracao }}<br>
      </td>
     <td>

    <b>Número de Ligações : </b> {{$t->nligacoes }}<br>
    <b>Login </b> {{$t->login }}<br>

      </td>
   </tr>
  </tbody>
</table>

<table class="table table-bordered">
  <tbody>
  <tr>
      </td>
    </tr>
  </tbody>
</table> 




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

    @endforeach
 

    </html>









 