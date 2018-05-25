@extends('layouts.eventos')

@section('content')
	<div class="row title text-ri">
		<h2 class="black">CALENDARIO MUNDIALISTA</h2>
	</div>
	<div style="padding-bottom:2%;" class="row">
		<div style="text-align: center;" class="col-md-12">
			<a class="btn btn-blue ripple trial-button" href="{{ URL::previous() }}">Atrás</a>
		</div>
	</div>
	<tbody>
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row row-pb-md">
				<div class="col-md-12">
					<ul id="gtco-portfolio-list">

						@foreach($ListaPartidos["calendarios"] as $calendario)

							<li class="one-third animate-box" data-animate-effect="fadeIn" >
								<div style="height:15%;"><h1>{{ $calendario->Orden }}</h1></div>
								<h1>-----------------</h1>
								<h2>{{ $calendario->equipoLocal->Nombre_Equipo }} - {{ $calendario->equipoVisitante->Nombre_Equipo }}  </h2>
								<h4>{{ $calendario->Fecha_Partido }}</h4>
								<h4>{{ $calendario->Estadio->Nombre_Estadio }}</h4>
								<h1>-----------------</h1>
							</li>
						@endforeach

					</ul>
				</div></div></div></div>
	</tbody>
	<script src="{{ asset('js/Plugins/Jquery/jquery-3.1.1.js') }}"></script>

@endsection