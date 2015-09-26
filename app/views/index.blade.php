@extends('layout')

@section('content')

@if(isset($msg_success))
<div class="alert alert-dismissible alert-success">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{{$msg_success}}}</strong>.
</div>
@elseif(isset($msg_error))
<div class="alert alert-dismissible alert-error">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>{{{$msg_error}}}</strong>.
</div>
@endif

	<div class="row">
		<?php $i=$colors->count(); ?>
		@foreach($colors as $color)
		<div class="col-md-4">
			<div class="nos-text">#{{{$i}}}</div>
			<div class="canvas-item">
				<div class="canvas">
				<h5>{{{$color->likes}}} Likes <span class="time-ago">{{date('d M,Y',strtotime($color->created_at))}}</span></h5>
						<div class="canvas-1" style="background-color:#{{{$color->color_1}}};"></div>
						<div class="canvas-2" style="background-color:#{{{$color->color_2}}};"></div>
						<div class="canvas-3" style="background-color:#{{{$color->color_3}}};"></div>
						<div class="canvas-4" style="background-color:#{{{$color->color_4}}};"></div>
				</div>
			</div>
		</div>
		<?php $i--; ?>
		@endforeach


	</div>
@stop
