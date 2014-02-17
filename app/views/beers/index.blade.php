@extends('layouts.default')

@section('content')

	<div class="table-responsive">
  		<table class="table">
    	<thead>
    		<tr>
    			<th>Naam</th>
    			<th>Brouwerij</th>
    			<th>Beschrijving</th>
    		</tr>
    	</thead>

    	<tbody>
    		@foreach($beers as $beer)
    			<tr>
    				<td>{{{ $beer->naam }}}</td>
    				<td>{{{ $beer->brouwerij }}}</td>
    			</tr>
    		@endforeach
    	</tbody>
  		</table>
	</div>
@stop