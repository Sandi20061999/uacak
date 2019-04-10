
@extends('layout.layout2') 

@section('title',$title)

@section('sidebaru')
	@parent
		<h1>Data Produk</h1>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
 
						<th>No</th>
						<th>Nama Produk</th>
 
					</tr> 
				</thead>
				<tbody> 
				@foreach ($produk as $i => $v)
					<tr>
						<td>{{ $i+1 }}</td>
						<td>{{ $v }}</td>
					</tr>
				@endforeach
				</tbody>
			</table>
@endsection
@section('sidebar')
	@parent
		<li><a>PHP</a></li>
@endsection

@section('content')
	<p>{{ $konten }}</p>

@stop