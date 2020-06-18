@extends('layouts.main')


@section('content')

<div class="container">
	<h1>{{$title}}</h1>
	<p>{{$about}}</p>
	<hr>
	<ul class="list-group">
	<!-- Hocemo da provjerimo da li li postoje services ili ne.  -->
	@if(count($services) > 0)
		@foreach($services as $service)
			<li class="list-group-item">{{$service}}</li>
		@endforeach
	@endif
	</ul>
</div>


@endsection