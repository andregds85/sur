@extends('limpo.app')
@section('content')
<?php session_start();

use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;

echo "<br>";
echo "ID :";
echo $_SESSION["id"];
$id=$_SESSION["id"];
echo "<br>";


echo "<br>";
echo "Mês :";
echo $mes=$_GET['mes'];
echo "<br>";
Checklist::where('id',$id)->update(['mes'=>$mes]);



echo "<br>";
echo "Macro :";
echo $macro=$_GET['macro'];
echo "<br>";
Checklist::where('id',$id)->update(['macro'=>$macro]);

echo "<br>";
echo "Fila_unidadeHospitalar :";
echo $Fila_unidadeHospitalar=$_GET['Fila_unidadeHospitalar'];
echo "<br>"; 
Checklist::where('id',$id)->update(['Fila_unidadeHospitalar'=>$Fila_unidadeHospitalar]);


echo "<br>";
echo "unidade_hospitalarDesejada :";
echo $unidade_hospitalarDesejada=$_GET['unidade_hospitalarDesejada'];
echo "<br>";
Checklist::where('id',$id)->update(['unidade_hospitalarDesejada'=>$unidade_hospitalarDesejada]);


echo "<br>";
echo "obs :";
echo $obs=$_GET['obs'];
echo "<br>";
Checklist::where('id',$id)->update(['obs'=>$obs]);


echo "<br>";
echo "dataInformacao_Depuracao :";
echo $dataInformacao_Depuracao=$_GET['dataInformacao_Depuracao'];
echo "<br>";
Checklist::where('id',$id)->update(['dataInformacao_Depuracao'=>$dataInformacao_Depuracao]);


echo "<br>";
echo "nligacoes :";
echo $nligacoes=$_GET['nligacoes'];
echo "<br>";
Checklist::where('id',$id)->update(['nligacoes'=>$nligacoes]);


echo "<br>";
echo "login :";
echo $login=$_GET['login'];
echo "<br>";
Checklist::where('id',$id)->update(['login'=>$login]);
?>

<script>
 {
  alert("Sucesso\nAlteração Efetuada com Sucesso");
}
</script>
<body onload='window.history.back();'>









@endsection


