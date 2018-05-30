@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<img style="display: initial !important;" class="img-responsive" src="{{ asset('images/calendario.png') }}"></img>
				</div>
			</div>
			<form id="datosCalendarioUsuario" action="Calendario" method="POST" enctype="multipart/form-data">
                        <input type="hidden" id="Id_Usuario" name="Id_Usuario" value="{{ Auth::user()->id }}"/>
						
                        <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
			<div class="card-body">
					

						@foreach($ListaPartidos["partidos"] as $calendario)

							
								<div class="col-md-12 animate-box tituloCalendario">Partido: <b>{{ $calendario->Orden }}</b></div>
								<input type="hidden" id="Id_Calendario" name="Id_Calendario" value="{{ $calendario->id }}"/>
								<div class="col-md-12 animate-box tituloCalendario2">Fecha y Hora: <b>{{ $calendario->Fecha_Partido }}</b></div>
							<div style="padding:1%;" class="col-md-12 text-center animate-box">
								<div class="row">
								<div class="col-md-3 animate-box">
									<h4>Grupo {{ $calendario->Grupo }}</h4>
									<h4>{{ $calendario->estadio['Nombre_Estadio'] }}</h4>
									<h4>{{ $calendario->fase['Nombre_Fase'] }}</h4>
								</div>
							<div class="col-md-9 text-center animate-box">
							<div class="row">							
								<div class="col-md-4 text-center animate-box"><h4 style="margin-top: 5%;">{{ $calendario->equipo1['Nombre_Equipo'] }}</div>
								<div class="col-md-1 text-center animate-box"><input style="padding: 12px; background:#fff; font-weight: 700;" id="Goles_Local" name="Goles_Local" type="text" class="form-control" /> </div>
								<div class="col-md-2 text-center animate-box"><h4 style="margin-top: 5%;">VS</h4></div>
								<div class="col-md-1 text-center animate-box"><input style="padding: 12px; background:#fff; font-weight: 700;" id="Goles_Visitante" name="Goles_Visitante" type="text" class="form-control" /></div>
								<div class="col-md-4 text-center animate-box"><h4 style="margin-top: 5%;">{{ $calendario->equipo2['Nombre_Equipo'] }} </h4></div>
							</div>
							<div class="row">
								<div class="col-md-4 text-center">
															<b style="font-size: 12px;" >
																<input type="radio" name="Tendencia" value="1" id="{{ $calendario->Orden }}" /> LOCAL 
															</b>
								</div>
								<div class="col-md-4 text-center">
															<b style="font-size: 12px;" >
																<input type="radio" name="Tendencia" value="2" id="{{ $calendario->Orden }}" /> EMPATE 
															</b>
								</div>
								<div class="col-md-4 text-center">
															<b style="font-size: 12px;" >
																<input type="radio" name="Tendencia" value="3" id="{{ $calendario->Orden }}" /> VISITANTE 
															</b>
								</div>
								                                            <label for="confirmarAsistencia" class="error" style="display:none;">*Tienes que seleccionar una opción a la pregunta.</label>

							</div>
							</div>	
								</div>
							</div>
						@endforeach

					
				   </div>
				   <div class="row">
                                <div class="col-md-12">
                                    <button type="submit"  class="btn btn-blue ripple trial-button">
                                        Guardar
                                    </button>
                                </div>
                    </div>
				</form>
			</div>                
            </div>
        </div>
    </div>
</div>
	</tbody>
	<script src="{{ asset('js/Plugins/Jquery/jquery-3.1.1.js') }}"></script>

@endsection