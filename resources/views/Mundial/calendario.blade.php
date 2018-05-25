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
			<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h2 style="text-align: center;">Bievenido al calendario Mundialista GyJ Rusia 2018!</h2>
                </div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<img style="display: initial !important;" class="img-responsive" src="{{ asset('images/emociones.png') }}"></img>
				</div>
			</div>
		</div>



        <div class="column one">
    
                                <div class="hover_color_wrapper">
                                    <h2 style="font-size: 20px; font-family: sans-serif; color:#2297e1;">Calendario Mundia</h2>
                                    @foreach($ElementosArray["partidos"] ->id as $Calendario)
                                        <fieldset>
                                            <div style="font-weight:700; font-family: sans-serif; padding-top: 2%;" name ="Calendario_id" value = "{{ $Calendario->id }}">{{ $Calendario->id }} </div>
                                            <p>{{$Calendario->EquipoLocal_id}}</p>
                                            <p>{{$Calendario->EquipoVisitante_id}}</p>
                                        </fieldset>
                                    @endforeach
                                </div>
                         
         </div>

         
                
            </div>
        </div>
    </div>
</div>
@endsection