@extends('blocks.table')

@include('errors.app')

@section('data')
<thead>
		<tr role="row">
			<th></th>
			<th>VIN</th>
			<th>Year</th>
			<th>Make</th>
			<th>Model</th>
			<th></th>
		</tr>
</thead>
	<tbody>
		@foreach ($rows as $v)
			<tr role="row" id="{{$table}}_{{$v->id}}">
				<td style="width: 120px"><img src="{{$v->img_url}}" style="width: 75px; border-radius: 5px; margin: 0 auto; display: block;" /></td>
				<td><p><a href="vehicles/{{$v->id}}">{{$v->vin}}</a> <span class="label label-{{ $v->new ? 'success' : 'default' }}">{{ $v->new ? 'New' : 'Used' }}</span></p></td>
				<td>{{$v->year}}</td>
				<td>{{$v->make}}</td>
				<td>{{$v->model}}</td>
				<td>
					@include('blocks.delete_row', ['modid'=>$v->id])
				</td>
			</tr>
		@endforeach
	</tbody>
	
@endsection