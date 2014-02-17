@extends('layouts.default')

@section('content')

<h1>Voeg een nieuw bier toe aan de kaart</h1>

{{ Form::open(array('route' => 'beers.store' )) }}
	<ul>
		<li>
	    {{ Form::label('naam', 'Naam:', array('class' => 'form-group')) }}
	    {{ Form::text('naam') }}
	    </li>
	 
	  	<li>
	    {{ Form::label('brouwerij', 'Brouwerij:', array('class' => 'form-group'))}}
	    {{ Form::text('brouwerij') }}
	    </li>

	    <li>
	    {{ Form::submit('Submit', array('class' => 'btn btn-info'))}}
	    </li>
	</ul>
{{ Form::close() }}

@stop

