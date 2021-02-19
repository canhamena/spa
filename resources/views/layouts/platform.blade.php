<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Spa - @yield('title')</title>

    @yield('styles')

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{ asset('/platform/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/platform/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/platform/bower_components/Ionicons/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{ asset('/platform/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{ asset('/platform/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/platform/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/platform/bower_components/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/platform/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/platform/dist/css/skins/_all-skins.min.css') }}">

    <link rel="stylesheet" href="{{ asset('/platform/bower_components/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/platform/bower_components/fullcalendar/dist/fullcalendar.print.min.css') }}" media="print">

    <link rel="stylesheet" href="{{ asset('/platform/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">

    @livewireStyles

    <script src="{{ asset('/platform/assets/ag-grid-enterprise/dist/ag-grid-enterprise.min.js') }}"></script>
    <link href="{{ asset('/platform/assets/ag-grid-enterprise/dist/styles/ag-grid.css') }}" rel="stylesheet" />
    <link href="{{ asset('/platform/assets/ag-grid-enterprise/dist/styles/ag-theme-balham.css') }}" rel="stylesheet" />
    @yield('headscripts')


    <style type="text/css">
        label.error {
            color: #dd4b39;
            font-style: italic;
        }
        input.error {
            border: 2px dotted #dd4b39;
        }
        /*form-group.has-error .help-block {
            color: #dd4b39;
                }	*/
        /*form-group.has-error .form-control, .form-group.has-error .input-group-addon {
        border-color: #dd4b39;
        box-shadow: none;
        }*/
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">


    <!-- Bloco header início -->
    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
           
            <small>logo</small>
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!--<span class="logo-mini"><b><img src="{{ asset('logo.png')}}" alt="Shalina" style="width:30%;"></b></span>-->
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">
            <!--<img src="{{ asset('logo.png')}}" alt="Shalina" style="width:40%;">-->

               Logo
        </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->


            <a href="#" class="sidebar-toggle"  data-toggle="push-menu" role="button"> Spa </a>


            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Sem notificações</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">
                                            <div class="pull-left">
                                                <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle"
                                                     alt="{{ Auth::user()->name }}">
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                            </li>
                            <li class="footer"><a href="#">Ver tudo</a></li>
                        </ul>
                    </li>
                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">

                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ Auth::user()->profile_photo_url }}" class="user-image"
                                 alt="
                                 {{ Auth::user()->name }}
                                 ">
                            <span class="hidden-xs">
                                @auth
                                    {{ Auth::user()->name }}
                                @endauth
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle"
                                     alt="{{ Auth::user()->name }}">

                                <p>
                                    {{ Auth::user()->name }} - 
                                    
                                   
                                    
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ route('profile.show') }}" class="btn btn-default btn-flat">Perfil</a>
                                </div>
                                <div class="pull-right">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                    this.closest('form').submit();" class="btn btn-default btn-flat"><i class="fa fa-power-off"></i>
                                        Terminar sessão
                                    </a>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                    <li>

                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Bloco header -->


    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle" alt="{{ Auth::user()->name }}">
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->name }}</p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
            </div>


            <!--  Menu lateral -->
            <aside>
                <div id="sidebar" class="nav-collapse md-box-shadowed">
                    <!-- sidebar menu start-->
                    <div class="leftside-navigation leftside-navigation-scroll">
                        @if(Auth()->user()->is_admin==1)
                             @include('menu.admin')
                        @elseif(Auth()->user()->role->id == 2)
                            @include('menu.gestor')
                        @endif

                    </div>

                </div>
            </aside>
            <!--  Menu lateral -->


        </section>
        <!-- /.sidebar -->
    </aside>


    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <i class="@yield('icone-modulo')"></i> Spa -  @yield('titulopagina')
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="@yield('icone')"></i> @yield('module')</a></li>
                <li class="active">@yield('subtitle')</li>
            </ol>
        </section>

        <!-- Main content -->


        <section class="content">

            @yield('content')


        </section>
        <!-- /.content -->
    </div>


    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Versão</b> 0.0.1
        </div>
        <strong> &copy; <?php echo date('Y'); ?> <a href="#">Spa</a>.</strong> Todos direitos reservados.
    </footer>


     

    <div class="control-sidebar-bg"></div>
</div>



@livewireScripts(['base_url' => ENV('APP_URL')]);
<script src="{{ asset('/platform/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('/platform/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/platform/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<script src="{{ asset('/platform/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/platform/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('/platform/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('/platform/bower_components/fastclick/lib/fastclick.js') }}"></script>
<script src="{{ asset('/platform/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('/platform/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('/platform/dist/js/demo.js') }}"></script>
<script src="{{ asset('/platform/bower_components/morris.js/morris.min.js') }}"></script>
<script src="{{ asset('/platform/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('/platform/bower_components/chart.js/Chart.js') }}"></script>
<script src="{{ asset('/platform/assets/js/vendor.js') }}"></script>


<script type="text/javascript">
  
  $('#mySelect').change(function() {
        
    if ($('#mySelect').val() == 3) {
       document.getElementById('inpu_id').required = false;
      $('#inputOculto').hide();
    } else {
      $('#inputOculto').show();
       document.getElementById('inpu_id').required = true;
      
    }
  });

</script>



<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree();
    });
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
</script>

<script>
    $(function () {
        $('.select2').select2()
        $('#example1').DataTable()
        $('#example2').DataTable({
            paging: true,
            lengthChange: false,
            searching: false,
            ordering: true,
            info: true,
            autoWidth: false
        });
    });
    $('#datepicker').datepicker({
        autoclose: true,
        format: "dd/mm/yyyy"
    })

    $('.datepicker').datepicker({
        autoclose: true,
        format: "dd/mm/yyyy"
    })
</script>

 <script type="text/javascript">
    
$('#modal-editar-servico').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('whatever') 
  var nome = button.data('whatevernome') 
  var descricao = button.data('whateverdescricao') // Extract info from data-* attributes
  
  var modal = $(this)
  modal.find('#nome').val(nome)
  modal.find('#descricao').val(descricao)
  modal.find('#id').val(id)
})

</script>


 <script type="text/javascript">
    
$('#modal-editar-tiposervico').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('whatever') 
  var nome = button.data('whatevernome') 
  var descricao = button.data('whateverdescricao') // Extract info from data-* attributes
  var preco = button.data('whateverpreco')
  
  var modal = $(this)
  modal.find('#nome').val(nome)
  modal.find('#descricao').val(descricao)
  modal.find('#id').val(id)
  modal.find('#preco_valor').val(preco)
});


    
$('#modal-editar-tipospa').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('whatever') 
  var nome = button.data('whatevernome') 
  var descricao = button.data('whateverdescricao') // Extract info from data-* attributes
  
  var modal = $(this)
  modal.find('#nome').val(nome)
  modal.find('#descricao').val(descricao)
  modal.find('#id').val(id)
});

$('#modal-editar-endereco').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('whatever') 
  var rua = button.data('whateverrua') 
  var descricao = button.data('whateverdescricao') // Extract info from data-* attributes
  
  var modal = $(this)
  modal.find('#rua').val(rua)
  modal.find('#descricao').val(descricao)
  modal.find('#id').val(id)
});
$('#modal-editar-pagamento').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('whatever') 
  var qtd = button.data('whateverqtd') 
  
  var modal = $(this)
  modal.find('#qtd').val(qtd)
  modal.find('#id').val(id)
});


$('#modal-editar-contacto').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('whatever') 
  var telefone = button.data('whatevertelefone') 
  var telemovel = button.data('whatevertelemovel') 
  var email = button.data('whateveremail') 
  var facebook = button.data('whateverfacebook') 
  var whatsap = button.data('whateverwhatsap') 

  
  var modal = $(this)
  modal.find('#telefone').val(telefone)
  modal.find('#telemovel').val(telemovel)
  modal.find('#email').val(email)
  modal.find('#facebook').val(facebook)
  modal.find('#whatsap').val(whatsap)
  modal.find('#id').val(id)
});

    
$('#modal-update-marcacao').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('whatever') 
  var atendimento = button.data('whateverdata') 
  var hora = button.data('whateverhora') // Extract info from data-* attributes
 
  var modal = $(this)
  modal.find('#atendimento').val(atendimento)
  modal.find('#hora').val(hora)
  modal.find('#id').val(id)

});


$('#modal-create-desponiblidade').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var id = button.data('whatever') 
 
  var modal = $(this)
  modal.find('#endereco').val(id)
});



</script>

      <!-- /select2 -->
    <script type="text/javascript">



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });


        $("#provincia").change(function(e) {

            e.preventDefault();
         
            var provincia_id = $(this).val();
                
                
                $("#municicpio").empty();
                $.ajax({
                    type: 'POST',
                    contentType: 'application/json; charset=utf-8',
                    url: "{{ route('municipio.post') }}",
                    data: provincia_id,
                    success: function(res)
                           {       
                     if(res)
                       {
                             $("#municipio").empty();
                             
                             $.each(res,function(key,value){
                                    $("#municipio").append('<option value="'+value.id+'">'+value.nome+'</option>');
                         });
                }
           }

                 
                    
                });
            

        });

</script>


<script type="text/javascript">



        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });


        $("#localizacao_p").change(function(e) {

            e.preventDefault();
         
            var provincia_id = $(this).val();
                
                
                $("#localizacao_m").empty();
                $.ajax({
                    type: 'POST',
                    contentType: 'application/json; charset=utf-8',
                    url: "{{ route('municipio.post') }}",
                    data: provincia_id,
                    success: function(res)
                           {       
                     if(res)
                       {
                             $("#localizacao_m").empty();
                             
                             $.each(res,function(key,value){
                                    $("#localizacao_m").append('<option value="'+value.id+'">'+value.nome+'</option>');
                         });
                }
           }

                 
                    
                });
            

        });




</script>

<script type="text/javascript">


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });


        $("#localizacao_ep").change(function(e) {

            e.preventDefault();
         
            var provincia_id = $(this).val();
                
                
                $("#localizacao_em").empty();
                $.ajax({
                    type: 'POST',
                    contentType: 'application/json; charset=utf-8',
                    url: "{{ route('municipio.post') }}",
                    data: provincia_id,
                    success: function(res)
                           {       
                     if(res)
                       {
                             $("#localizacao_em").empty();
                             
                             $.each(res,function(key,value){
                                    $("#localizacao_em").append('<option value="'+value.id+'">'+value.nome+'</option>');
                         });
                }
           }

                 
                    
                });
            

        });
    </script>

    <script type="text/javascript">


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });


        $("#servico").change(function(e) {

            e.preventDefault();
         
            var servico_id = $(this).val();
                
                
                $.ajax({
                    type: 'POST',
                    contentType: 'application/json; charset=utf-8',
                    url: "{{ route('tiposervico.post') }}",
                    data: servico_id,
                    success: function(res)
                           {       
                     if(res)
                       {
                           $("#tiposervico").empty();
                          $.each(res,function(key,value){
                                    $("#tiposervico").append('<option value="'+value.id+'">'+value.nome+'</option>');
                         });
                             
                }
           }

                 
                    
                });
            

        });
        </script>

        <script type="text/javascript">


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });


        $("#provincia_spa").change(function(e) {

            e.preventDefault();
         
            var servico_id = $(this).val();
                
                
                $.ajax({
                    type: 'POST',
                    contentType: 'application/json; charset=utf-8',
                    url: "{{ route('localidade.post') }}",
                    data: servico_id,
                    success: function(res)
                           {       
                     if(res)
                       {
                           $("#localidade").empty();
                          $.each(res,function(key,value){
                                    $("#localidade").append('<option value="'+value.codigo+'">'+value.nome+' - '+value.descricao+' - '+value.rua+'</option>');
                         });
                             
                }
           }

                 
                    
                });
            

        });

        
        </script>

          <script type="text/javascript">


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });


        $("#servico").change(function(e) {

            e.preventDefault();
          
            var tiposervico_id = $(this).val();
             var local = $("#localizacao").val();
             
                $.ajax({
                    type: 'POST',
                    contentType: 'application/json; charset=utf-8',
                    url: "{{ route('tiposervico_local.post') }}",
                    data: {
                       _token : $('meta[name="csrf-token"]').attr('content'),
                       "_method": 'POST',
                       disponivel: tiposervico_id},
                    dataType: 'json',
                    success: function(res)
                           {       
                    
                         console.log(res);
                             
                
           }

                 
                    
                });
            

        });

        
        </script>





@yield('javascript')

</body>
</html>



