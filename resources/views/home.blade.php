@extends('layouts.app')
@section('content')

<head>
<meta charset="utf-8">


</head>









<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('SUR @ Secretaria de Estado de Saúde') }}</div>
                <div class="card-header">
                <br>

                <br>
                <div class="card-header"> </div>


                <br>
          

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
         
            </div>
        </div>
    </div>
</div>






@endsection



