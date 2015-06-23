@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">List PDF</div>
				<div class="panel-body">
					<table class="table table-hover">
					<thead>
					  <tr>
					    <th height="38" align="center" class="col-md-1 text-center">#</th>
					    <th height="38" align="left" class="col-md-3">Name</th>
					    <th height="38" align="left" class="col-md-2">Month</th>
					    <th align="left" class="action text-center col-md-2">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($pdfByMonth as $pdf)
						<tr bgcolor="">
					    <td height="25" align="center" class="col-md-1 text-center">{{ $index++ }}</td>
					    <td height="25" align="left" class="col-md-3">{{ $pdf->name }}&nbsp;</td>
					    <td height="25" align="left" class="col-md-2">{{ $pdf->month->name }}&nbsp;</td>
					    <td align="left" class="action text-center col-md-2">
								{!! Form::open(array('url'=>route('pdf.destroy', array($pdf->id)),'method'=>'delete')) !!}
									{!! Form::hidden('month_id', $pdf->month_id) !!}
									<a href="{{route('pdf.edit', [$pdf->id,'month_id'=>$pdf->month_id])}}" class="btn btn-xs btn-success tooltip-top" title="Edit Photo"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
									<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove Photo" value="{{$pdf->id}}"><i class="glyphicon glyphicon-trash"></i></button>
								{!! Form::close() !!}
						</div>
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $pdfByMonth !!}
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Add Pdf</div>
				<div class="panel-body">
					{!! Form::open(['route'=>'pdf.store','class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
						{!! Form::hidden('month_id',$month_id) !!}
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
							{!! Form::label('Pdf','',['class'=>'col-md-4 control-label']) !!}
							<div class="col-md-8">
								{!! Form::file('pdf_file',['class'=>'form-control']) !!}
								@if($errors->has('pdf_file'))
									<span class="text-danger">{{$errors->first('pdf_file')}}</span>
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