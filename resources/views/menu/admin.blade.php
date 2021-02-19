<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MENU</li>
    <li class="active"><a href="{{ route('dashboard') }}"><i class="fa fa-home"></i> <span>Painel Principal</span></a></li>
    <li class="treeview">
            <a href="#">
                <i class="fa fa fa-calendar"></i> <span>Reserva</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('reserva/index')}}"><i class=""></i> Listar</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-dollar"></i> <span>Pagamento</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">

                <li><a href="{{url('pagamento/index')}}"><i class=""></i> Listar</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class=" fa fa-bar-chart "></i> <span>Estatística</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu"> 
                <li class=""><a href="{{url('estatistica/marcacao')}}"><i class=""></i> <span>Marcação</span></a></li>
                <li><a href="{{url('estatistica/servico')}}"><i class=""></i> Serviço</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class=" fa fa-users"></i> <span>Utilizadores</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu"> 
                <li><a href="{{ route('users') }}"><i class=""></i> Listar</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-cogs"></i> <span>Configurações</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                
                <li><a href="{{ url('spa/index') }}"><i class=""></i> Spa</a></li>
                <li><a href="{{ url('servico/index') }}"><i class=""></i> Serviço</a></li>
                <li><a href="{{ url('tiposervico/index') }}"><i class=""></i>Tipo serviço</a></li>
                <li><a href="{{ url('tipo/index') }}"><i class=""></i>Tipo de spa</a></li>

             
            </ul>
        </li>
        
</ul>
