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
                <div class="box-body">
                    <div class="col-md-7">
                            
                        </div>
                <form action="{{route('estatistica.servico.filtro')}}" method="post" class="form-horizontal" >
                    @csrf
                    <div class="row">
                         <div class="col-md-2">
                            <select class="form-control select2" style="width: 100%;" name="ano">
                               <option selected="selected" disabled="">Ano</option>
                                   @php for($i=$anos;$i<= date('Y');$i++){ @endphp
                                      <option value="{{$i}}">{{$i}}</option>
                                   @php } @endphp
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
                    <div id="container" style="height: 500px"></div>
                </div>
            </div>

            
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
                alpha: 50
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
                depth: 50,
                enabled: false,

                showInLegend: true
            },
            
        }
        ,
        series: [{
        colorByPoint: true,
        data: [
       <?php  foreach($servicos as $servico) {?>
        {
            name: "<?php echo $servico->nome; ?>",
            y: <?php 

                   echo $quantidades[$servico->id]; ?>,
            
        },
    <?php } ?>
        ]
    }]
    });
            </script>
@endsection