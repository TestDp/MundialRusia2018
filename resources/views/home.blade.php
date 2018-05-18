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
                
            </div>
        </div>
    </div>
</div>
@endsection
