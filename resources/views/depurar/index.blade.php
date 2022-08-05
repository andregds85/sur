@extends('layouts3.app')
@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Depurar Filas ') }}</div>

                <div class="card-body">
                <form action="" method="POST" id="validate" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">
 
@csrf

<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;
?>

 

{{ Auth::user()->name}}
<br>
{{ Auth::user()->email}}
<br>


</div>
                        </div>
                        </div>
                        </div>
                        </div>



                        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dados do Paciente') }}</div>

                <div class="card-body">

                          <!--  mes -->
                          <div class="form-group row" required>
                            <label for="mes" class="col-md-4 col-form-label text-md-right">{{ __('Mês') }}</label>
                            <div class="col-md-6">
                            <select id="mes" class="form-control" name="mes">
                            <option selected></option>
                            <option value="janeiro">Janeiro</option>
                            <option value="fevereiro">Fevereiro</option>
                            <option value="Março">Março</option>
                            <option value="Abril">Abril</option>
                            <option value="Maio">Maio</option>
                            <option value="junho">Junho</option>
                            <option value="agosto">Agosto</option>
                            <option value="setembro">Setembro</option>
                            <option value="outubro">Outubro</option>
                            <option value="Novembro">Novembro</option>
                            <option value="Dezembro">Dezembro</option>
                           </select>    
                            </div>
                        </div>
                     <br>


                             
                                                               
                     <!--  Macro -->
                     <div class="form-group row" required>
                            <label for="sexo" class="col-md-4 col-form-label text-md-right">{{ __('Macro') }}</label>
                            <div class="col-md-6">
                            <select id="macro" class="form-control" name="macro">
                            <option selected></option>
                            <option value="foz">Foz do Rio itajai</option>
                            <option value="sul">Sul</option>
                            <option value="grandeflorianopolis">Grande Florianopolis</option>
                            <option value="meioOeste">Meio oeste</option>
                            <option value="nordeste">Nordeste / Planalto Norte</option>
                            <option value="serra">Serra</option>
                            <option value="sul">Sul</option>
                            <option value="itajai">Vale do itajai</option>
                            </select>    
                            </div>
                        </div>
                     <br>



                     <!--  Fila_unidadeHospitalar -->
                     <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Fila_unidadeHospitalar') }}</label>
                            <div class="col-md-6">
                                <input id="Fila_unidadeHospitalar" type="text" class="form-control @error('Fila_unidadeHospitalar') is-invalid @enderror" name="Fila_unidadeHospitalar" required autocomplete="Fila_unidadeHospitalar">
                                @error('Fila_unidadeHospitalar')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    
                        

                     <!--  unidade_hospitalarDesejada -->
                     <div class="form-group row">
                            <label for="unidade_hospitalarDesejada" class="col-md-4 col-form-label text-md-right">{{ __('Unidade_hospitalarDesejada') }}</label>
                            <div class="col-md-6">
                                <input id="unidade_hospitalarDesejada" type="text" class="form-control @error('unidade_hospitalarDesejada') is-invalid @enderror" name="unidade_hospitalarDesejada" required autocomplete="unidade_hospitalarDesejada">
                                @error('unidade_hospitalarDesejada')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
      



                  <!--  obs -->
                  <div class="form-group row">
                            <label for="diagnostico" class="col-md-4 col-form-label text-md-right">{{ __('OBS') }}</label>
                            <div class="col-md-6">
                            <textarea class="form-control @error('obs') is-invalid @enderror" name="obs" required autocomplete="obs" rows="3"></textarea>
                                @error('obs')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                  </div>
                




                     <!--  dataInformacao_Depuracao -->
                     <div class="form-group row">
                            <label for="dataInformacao_Depuracao" class="col-md-4 col-form-label text-md-right">{{ __('dataInformacao_Depuracao') }}</label>
                            <div class="col-md-6">
                                <input id="unidade_hospitalarDesejada" type="text" class="form-control @error('dataInformacao_Depuracao') is-invalid @enderror" name="dataInformacao_Depuracao" required autocomplete="dataInformacao_Depuracao">
                                @error('dataInformacao_Depuracao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                     <!--  nligacoes -->
                       <div class="form-group row">
                            <label for="nligacoes" class="col-md-4 col-form-label text-md-right">{{ __('Número de Ligações') }}</label>
                            <div class="col-md-6">
                                <input id="nligacoes" type="text" class="form-control @error('nligacoes') is-invalid @enderror" name="nligacoes" required autocomplete="nligacoes">
                                @error('nligacoes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>











              <!-- login  -->
              <div class="form-group row">
                            <label for="login" class="col-md-4 col-form-label text-md-right">{{ __('Login ') }}</label>
                            <div class="col-md-6">
                                <input id="preenchimento" type="text" class="form-control @error('preenchimento') is-invalid @enderror" name="login" value="{{ Auth::user()->email}}" required autocomplete="dataInformacao_Depuracao" readonly>
                                @error('dataInformacao_Depuracao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                      </div>











                       </div>
                        </div>
                        </div>
                        </div>

<!--  fim -->
                            <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


    'obs',