@extends('layouts.platform')

@section('title', 'Estatistica')


@section('icone-modulo',"fas fa-spa")
@section('titulopagina', 'Nome do spa')

@section('icone','fa fa-ticket')
@section('module','Nome do spa')
@section('subtitle','Estatistica') 

@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-bar-chart"></i> Estatística > Serviço </h3>
                </div>
                <div class="box-header ">
                    <div class="box-tools">

                       <!-- <div class="row"> -->
                            <!--
                            <div class="col-xs-4">
                            </div>
                            <div class="col-xs-2">
                            </div>
                            -->
                            <div class="box-tools">
                            <div class="input-group input-group-sm">
                            <form class="form-horizontal" >
                                   <!-- <div class="col-xs-4"> -->
                                        
                                            <select class="form-control select2" data-placeholder="Localização" style="width: 100%;">
                                                <option value=""></option>
                                                <option>Luanda</option>
                                                <option>Bengo</option>
                                                <option>Uíge</option>
                                            </select>
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-info pull-right">Buscar</button>
                                            </span>
                                       
                                    <!--</div> -->
                                      
                            </form>
                            </div>
                            </div>
                        <!-- </div> -->
                    </div>
                      
                </div>
            </div>

            <div id="container" style="height: 400px"></div>
        </div>
    </div>


    
@endsection


@section('javascript') 

<script src="{{ asset('platform/assets/highcharts/code/highcharts.js') }}"></script>
<script src="{{ asset('platform/assets/highcharts/code/highcharts-3d.js') }}"></script>
<script src="{{ asset('platform/assets/highcharts/code/modules/exporting.js') }}"></script>
<script src="{{ asset('platform/assets/highcharts/code/modules/export-data.js') }}"></script>

<script type="text/javascript">
    Highcharts.chart('container', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Serviços'
        },
        subtitle: {
            text: 'Dados estatísticos'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Serviços prestados',
            data: [
                ['5', 8],
                ['Saúde', 3],
                ['Mixed nuts', 1],
                ['Oranges', 6],
            ]
        }]
    });
            </script>
@endsection