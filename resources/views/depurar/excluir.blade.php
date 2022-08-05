@extends('limpo.app')
@section('content')

<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\excluirController;


$id;
$id1=Crypt::decrypt($id);

Checklist::find($id1)->delete(['id' => $id1]);  
?>

<script>
alert("Fila Apagada com Sucesso");
</script>


<?php 

echo "Fila Apagada com Sucesso";

?>











@endsection


