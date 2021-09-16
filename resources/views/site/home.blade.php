@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                    @section('content')
                        @include('layouts._site._slides')
                        <div class="container">
                            @include('layouts._site._lista_imoveis')
                        </div>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
