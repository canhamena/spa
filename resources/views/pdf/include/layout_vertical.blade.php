<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Relatório</title>
		<style type="text/css">
			@page {margin: 100px 25px;}
		
			header {
				position: fixed;
				top: -80px;
				left: 0px;
				right: 0px;
				height: 50px;
				/** Extra personal styles **/
				color: black;
				text-align: center;
				line-height: 35px;
				width: 100%;
			}
	
			footer {
				position: fixed; 
				bottom: -110px; /*80*/
				left: 0px; 
				right: 0px;
				height: 50px; 
	
				/** Extra personal styles **/ 
				color: black;
				text-align: center;
				line-height: 35px;
				margin-bottom: 0px;/*10*/
			}
	
			td {
				border: 2px solid black; 
				padding: 12px;/*5px*/
			}
			.principal {
				text-align: center;
				border-collapse: collapse;
				width: 100%;/*1500px*/
				border: 0px;
				/*font-family: Arial Narrow, sans-serif*/
			}
			.cabeca {
				background-color: #787878;
				color: black;
				}
			body {
				font-family: 'Source Sans Pro', 'Helvetica Neue', Helvetica, Arial, sans-serif;
			}
			body {
				background: url("storage/imagem/muxima_spa_marca_dagua.png");
				background-repeat: no-repeat; 
				background-position: 50% 60%;
				background-size: 400px;
			}
			html, body {
       
				height: 100%;
			}
			.linha{
				margin-bottom: -20px;
				margin-top: 10px;
			}
		</style>
		@yield('css_style')
	</head>

	<body>
		<header>
			<img src="{{public_path("storage/imagem/banner_a4_vertical.png")}}" width="1100" height="120">
		</header>
		<br>
		@yield('content')

		<footer>
			<hr class="linha">
			<div style="float: left; font-family: Arial Narrow, sans-serif  ">|<small> Muxima - Gestão de Spa</small> </div>
					@php
					$nome = explode(" ", Auth::user()->name);
					$cont = count($nome);
					$nome = $cont==1 ? $nome[0] : $nome[0]." ".$nome[$cont-1];
				@endphp
			<div style="margin-left:  650px; font-family: Arial Narrow, sans-serif "><small>  Utilizador : {{$nome}} ,  &nbsp; {{date('d-m-Y')}} - Processado por compudador </small></div>
		</footer>
		<script type="text/php">
			if ( isset($pdf) ) {
		
				$font = $fontMetrics->get_font("helvetica", "bold");
				$size = 50;
				$y = $pdf->get_height() - 40;
				$x = $pdf->get_width() - 15 - $fontMetrics->get_text_width("1/1", $font, $size);
				$pdf->page_text($x, $y, "Página: {PAGE_NUM} de {PAGE_COUNT}", $font, 10,  array(0,0,0));  
			} 
		</script>
		@yield('footer') 
	</body>
</html> 