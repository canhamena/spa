@extends('layouts.platform')

@section('title', 'Página Inicial')


@section('icone-modulo',"fas fa-spa")
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
                        <h3 class="text-white"> {{ $marcacao }} </h3>
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
                        <h3 class="text-white">{{ $servico }} </h3>

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
                        <h3 class="text-white"> {{ $atendida }} </h3>
                        <p>Atendidos</p>
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
                        <h3 class="text-white"> {{ $cancelada }} </h3> 
                        <p>Cancelados</p>
                    </div>
                </div>
            </a>
        </div>


    </div>





    <!--ROW-->
    <div class="row">
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header with-border">
                  <h4 class="box-title">Eventos de marcações</h4>
                </div>
                <div class="box-body">
                  <!-- the events -->
                  <div id="external-events">
                    <div class="external-event bg-green">Atendidos</div>
                    <br>
                    <div class="external-event bg-yellow">Pendentes</div>
                    <br>
                    <div class="external-event bg-red">Cancelados</div> 
                  </div>
                </div>
                <!-- /.box-body -->
              </div>
        </div>

        <div class="col-md-9">
            <div class="box box-primary">
              <div class="box-body no-padding">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.box-body -->
            </div>
            <!-- /. box -->
        </div>

    </div>
    <!--END ROW-->

@endsection


@section('javascript')


    
    <script src="{{ asset('/platform/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('/platform/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script >

    //CALENDARIO 
    /* initialize the calendar
    -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data) 
    $(document).ready(function(){
        
        var dados = <?php echo json_encode($eventos, JSON_NUMERIC_CHECK); ?>;
        console.log(dados);
        var SITEURL = "{{url('/')}}";
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var calendar = $('#calendar').fullCalendar({  
            dayNamesShort: ['Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
            monthNames: ['Janeiro','Fevereiro', 'Março', 'Abril', 'Maio','Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            header    : {
                left  : 'prev,next today',
                center: 'title',
                right : 'month,agendaWeek,agendaDay'
            },
            buttonText: {
                today: 'hoje',
                month: 'mês',
                week : 'semana',
                day  : 'dia'
            },
            //Random default events
           
            events    : dados
            ,
            editable  : false,
        
        })//END CALENDAR

    });
        
    </script>

   

@endsection


