@extends('layouts.platform')

@section('title', 'Estatistica')


@section('icone-modulo',"fas fa-spa")
@section('titulopagina', 'Nome do spa')

@section('icone','fa fa-ticket')
@section('module','Nome do spa')
@section('subtitle','Estatística') 


@section('content')
    <div class="row">
        <div class="col-md-12">

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-bar-chart"></i> Estatística </h3>
                </div>
                <div class="box-body ">
                    
                        <div class="col-md-7">
                            
                        </div>
                <form action="{{route('estatistica.marcacao.filtro')}}" method="post" class="form-horizontal" >
                    @csrf
                    <div class="row">
                         <div class="col-md-2">
                            <select class="form-control select2" style="width: 100%;" name="ano">
                               <option selected="selected" disabled="">Ano</option>
                                   @foreach($anos as $key)
                                      <option value="{{$key->ano}}">{{$key->ano}}</option>
                                   @endforeach
                            </select>
            
                            </div>
                            <div class="col-md-2">
                  
                            <select class="form-control select2" style="width: 100%;" name="posto">
                                <option selected="selected" disabled="">Posto</option>
                                    @foreach($postos as $posto)
                                       <option value="{{$posto->codigo}}">{{$posto->codigo}}</option>
                                    @endforeach
                  
                            </select>
                 
                          </div>
                          <div class="col-md-1 " style="margin-left: -5%;">
                                 <button type="submit" class="btn btn-info pull-right"><i class="fa fa-search"></i></button>
                          </div>
                    </div>
              
                                 
             </form>

                  
                </div>
            </div>
            
            <div class="box box-info">
                <div class="box-header with-border">
                    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                </div>
            </div>
 
        </div>
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
            text: "<?php  echo $titulo;?>"
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
            color: '#00a65a',
            name: 'Atendidos',
            data: [<?php $num =0; for ($j = 1; $j <= 12; $j++) {?>
                          <?php
                            if (array_key_exists($j,$atendidos)) {
                           echo $atendidos[$j].","; 
                         }else{
                            echo $num.","; 
                         }
                           ?> 
                 <?php } ?>]
                 
    
        }, {
            color: '#f39c12',
            name: 'Pendentes',
            data: [<?php $num =0; for ($j = 1; $j <= 12; $j++) {?>
                          <?php
                            if (array_key_exists($j,$pedentes)) {
                           echo $pedentes[$j].","; 
                         }else{
                            echo $num.","; 
                         }
                           ?> 
                 <?php } ?>]
    
        }, {
            color: '#dd4b39',
            name: 'Cancelados',
            data: [<?php $num =0; for ($j = 1; $j <= 12; $j++) {?>
                          <?php
                            if (array_key_exists($j,$cancelados)) {
                           echo $cancelados[$j].","; 
                         }else{
                            echo $num.","; 
                         }
                           ?> 
                 <?php } ?>]
    
        }]
    });
  </script>
  
  @endsection
    