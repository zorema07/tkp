@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">List </div>
				<div class="panel-body">
					<table class="table table-hover">
					<thead>
					  <tr>
					    <th height="38" align="center" class="col-md-1 text-center">#</th>
					    <th height="38" align="left" class="col-md-3">Name</th>
					    <th height="38" align="left" class="col-md-3">Year</th>
					    <th align="left" class="action text-center col-md-2">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($monthAll as $month)
					<tr bgcolor="">
					    <td height="25" align="center" class="col-md-1 text-center">{{ $index++ }}</td>
					    <td height="25" align="left" class="col-md-3"><a href="{{ URL::to('pdf?month_id='.$month->id.'') }}">{{ $month->name }}</a>&nbsp;</td>
					    <td height="25" align="left" class="col-md-3">{{ date('Y',strtotime($month->created_at)) }}</a>&nbsp;</td>
					    <td align="left" class="action text-center col-md-2">
					    	{!! Form::open(array('url'=>route('monthpdf.destroy', array($month->id)),'method'=>'delete')) !!}
								<a href="{{route('monthpdf.edit', array($month->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit prod"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove month" value="{{$month->id}}"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					</tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $monthAll !!}
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Add Month</div>
				<div class="panel-body">
					{!! Form::open(['route'=>'monthpdf.store','class'=>'form-horizontal']) !!}
						<div class="form-group">
							{!! Form::label('Name','',['class'=>'col-md-4 control-label'])!!}
							<div class="col-md-8">
								{!! Form::text('name',null,['class'=>'form-control']) !!}
								@if($errors->has('name'))
									<span class="text-danger">{{$errors->first('name')}}</span>
								@endif
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-8 col-md-offset-4">
								<button type="submit" class="btn btn-success">
									Save
								</button>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection