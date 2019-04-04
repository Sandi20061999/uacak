@extends('layout.layout') 

@section('title',$title)

@section('sidebar')
	@parent
		<li><a>PHP</a></li>
@endsection

@section('content')
	<p>{{ $konten }}</p>
@stop