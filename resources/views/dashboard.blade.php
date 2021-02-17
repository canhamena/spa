@extends('layouts.platform')

@section('title', 'Página Inicial')


@section('icone-modulo',"fa fa-building")
@section('titulopagina', 'Nome do spa')

@section('icone','fa fa-ticket')
@section('module','Nome do spa')
@section('subtitle','Página Inicial')

@section('content')

    <div class="row">


        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <a href="#">
                <div class="small-box bg-aqua" style="background-color: #3c8dbc !important;">

                    <div class="icon">
                        <i class="fa fa-ticket" style="color:white; padding: 9.5px 18px 8px 18px;"></i>
                    </div>
                    <div class="inner">
                        <h3 class="text-white"> 99</h3>
                        <p>Marcação</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <a href="#">
                <div class="small-box bg-yellow">
                    <div class="icon">
                        <i class="fa fa-exclamation-circle" style="color:white; padding: 9.5px 18px 8px 18px;"></i>
                    </div>
                    <div class="inner">
                        <h3 class="text-white"> 87 </h3>

                        <p>Serviços</p>
                    </div>
                </div>
            </a>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-xs-6">
            <a href="#">
                <div class="small-box bg-green">
                    <div class="icon">
                        <i class="fa fa-check-circle-o" style="color:white; padding: 9.5px 18px 8px 18px;"></i>
                    </div>
                    <div class="inner">
                        <h3 class="text-white">65</h3>
                        <p>Atendimento</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-lg-3 col-xs-6">
            <a href="#">
                <div class="small-box bg-red">
                    <div class="icon">
                        <i class="fa fa-remove" style="color:white; padding: 9.5px 18px 8px 18px;"></i>
                    </div>
                    <div class="inner">
                        <h3 class="text-white">12</h3>
                        <p>Marcação não realizada</p>
                    </div>
                </div>
            </a>
        </div>


    </div>






    <div class="row">


        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-bar-chart"></i> Facturas</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-bar-chart"></i> Aprovação</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <div id="container2" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection


@section('javascript')


    <script src="{{ asset('/platform/assets/highcharts/code/highcharts.js')}}"></script>
    <script src="{{ asset('/platform/assets/highcharts/code/highcharts-3d.js')}}"></script>
    <script src="{{ asset('/platform/assets/highcharts/code/modules/exporting.js')}}"></script>
    <script src="{{ asset('/platform/assets/highcharts/code/modules/export-data.js')}}"></script>
    <script type="text/javascript">


        Highcharts.chart('container1', {
            chart: {
                type: 'column',
                options3d: {
                    enabled: true,
                    alpha: 15,
                    beta: 15,
                    viewDistance: 25,
                    depth: 40
                }
            },

            title: {
                text: ''
            },

            xAxis: {
                categories: ['Unidade 1', 'Unidade 2', 'Unidade 3', 'Unidade 4', 'Unidade 5'],
                labels: {
                    skew3d: true,
                    style: {
                        fontSize: '16px'
                    }
                }
            },

            yAxis: {
                allowDecimals: false,
                min: 0,
                title: {
                    text: 'Nº de imóveis',
                    skew3d: true
                }
            },

            tooltip: {
                headerFormat: '<b>{point.key}</b><br>',
                pointFormat: '<span style="color:{series.color}">\u25CF</span> {series.name}: {point.y} / {point.stackTotal}'
            },

            plotOptions: {
                column: {
                    stacking: 'normal',
                    depth: 40
                }
            },

            series: [{
                name: 'aprovado',
                data: [5, 3, 4, 7, 2],
                stack: 'male',
                color :'#3c8dbc'
            }, {
                name: 'Não aprovado',
                data: [3, 4, 4, 2, 5],
                stack: 'male',
                color: '#dd4b39'
            }, {
                name: 'pedente',
                data: [2, 5, 6, 2, 1],
                stack: 'female',
                color: '#00a65a'
            }, {
                name: 'unidade1',
                data: [3, 0, 4, 4, 3],
                stack: 'female',
                color:'#f39c12'
            }]
        });


        Highcharts.chart('container2', {
            chart: {
                type: 'line'
            },
            title: {
                text: 'Média mensal de anomalias'
            },
            subtitle: {
                text: ''
            },
            xAxis: {
                categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez']
            },
            yAxis: {
                title: {
                    text: 'Anomalias'
                }
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: 'Tratadas',
                data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            }, {
                name: 'Não tratadas',
                data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
            }]
        });

    </script>

   

@endsection


