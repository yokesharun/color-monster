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
		<?php if($page == "top")
		{
			$i= 10;
		}else{
			$i=$colors->count();
		}?>
		@foreach($colors as $color)
		<div class="col-md-4">
			<!-- <div class="nos-text">#{{{$i}}}</div> -->
			<div class="canvas-item">
				<div class="canvas">
				<h5><a href="javascript:void(0);" onclick="add_vote({{$color->id}})" class="btn btn-primary btn-sm"><span id="span_{{$color->id}}" class="badge">{{{get_count($color->id)}}}</span> Like</a> <span class="time-ago">{{date('d M,Y',strtotime($color->created_at))}}</span></h5>
						<a data-toggle="modal" data-target="#model_{{$i}}">
						<div class="canvas-1" style="background-color:#{{{$color->color_1}}};"></div>
						<div class="canvas-2" style="background-color:#{{{$color->color_2}}};"></div>
						<div class="canvas-3" style="background-color:#{{{$color->color_3}}};"></div>
						<div class="canvas-4" style="background-color:#{{{$color->color_4}}};"></div>
					</a>
				</div>
			</div>
		</div>

					<!-- Modal -->
		<div class="modal fade" id="model_{{$i}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Color Monster #{{$i}}</h4>
		      </div>
		      <div class="modal-body">
		        <div class="chart">
					<div class="column-container">
						<div class="column">
							<div class="fill" style="background:#{{$color->color_1}}"></div>
							<p class="rotulo">#{{$color->color_1}}</p>
						</div>
						<div class="column">
							<div class="fill" style="background:#{{$color->color_2}}"></div>
							<p class="rotulo">#{{$color->color_2}}</p>
						</div>
						<div class="column">
							<div class="fill" style="background:#{{$color->color_3}}"></div>
							<p class="rotulo">#{{$color->color_3}}</p>
						</div>
						<div class="column">
							<div class="fill" style="background:#{{$color->color_4}}"></div>
							<p class="rotulo">#{{$color->color_4}}</p>
						</div>
					</div>
				</div>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>
		<?php $i--; ?>
		@endforeach


	</div>

<script type="text/javascript">

	var url = "{{route('color-vote')}}";

	</script>

@stop
