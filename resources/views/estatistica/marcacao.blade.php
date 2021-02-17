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
            <div class="box box-´dsefault" style="padding: 5px;">
                <div class="box-header">
                     <h3 class="box-title"><i class="fa fa-bar-chart"></i> Estatística </h3>
                    <div class="box-tools">
                        
                        <div class="box-tools">
                            <!--<a class="btn btn-info" href="#" ><i class="fa fa-plus-circle"></i> Adicionar</a>-->
                            <form class="form-horizontal" >
                                <div class="col-sm-3">
                                <input type="text" name="nome" id="nome" class="form-control" id="inputName" placeholder="Ano" required>
                                </div>
                                <div class="col-sm-6">
                                <input type="text" name="nome" id="nome" class="form-control" id="inputName" placeholder="Localização" >
                                </div>
                            </form>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>

        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
    </div>

@endsection


@section('javascript')

<script src="{{ asset('/platform/assets/highcharts/code/highcharts.js') }}"></script>
<script src="{{ asset('/platform/assets/highcharts/code/modules/exporting.js') }}"></script>
<script src="{{ asset('/platform/assets/highcharts/code/modules/export-data.js') }}"></script>

<script type="text/javascript"> 
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Marcação'
        },
        subtitle: {
            text: 'Dados estatísticos'
        },
        xAxis: {
            categories: [
                'Jan',
                'Fev',
                'Mar',
                'Abr',
                'Mai',
                'Jun',
                'Jul',
                'Ago',
                'Set',
                'Out',
                'Nov',
                'Dez'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Atendidos',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
    
        }, {
            name: 'Pendentes',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]
    
        }, {
            name: 'Cancelados',
            data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]
    
        }]
    });
  </script>
  
  @endsection
    