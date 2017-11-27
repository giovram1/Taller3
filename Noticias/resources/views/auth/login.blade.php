@extends('layouts.app')

@section('content')


	


	<form class="form-inline" method="POST" action="{{route('login')}}">

		{{csrf_field()}}

		<div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
			
			<label style="color: black; font-weight: bold;" for="email">Email:</label>
			<input class="form-control" 
			type="email" 
			name="email" 
			placeholder="Ingresa Email">
			
			{!! $errors->first('email', '<span class="help-block" style="font-weight: bold;">:message</span>') !!}

		</div>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
			
			<label style="color: black; font-weight: bold;" for="password">Contraseña:</label>
			<input class="form-control" 
			type="password" 
			name="password" 
			placeholder="Ingresa Contraseña">

			{!! $errors->first('password', '<span class="help-block" style="font-weight: bold;">:message</span>') !!}

		</div>&nbsp;&nbsp;
		<div class="form-group">
			<button class="btn btn-success">Ingresar</button>
		</div>
		

	</form>

@endsection