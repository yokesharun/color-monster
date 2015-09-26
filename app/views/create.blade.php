@extends('layout')

@section('content')
<div class="row">
	<div class="col-md-6">
		<div class="create-panel">
			<form class="form-horizontal">
  <fieldset>
  	<legend>Create Your New Monster Here!</legend>
    <div class="form-group">
      <label for="color_1" class="col-lg-2 control-label">Monster 1</label>
      <div class="col-lg-10">
        <input type="color" class="form-control" id="color_1" onchange="color(1)" value="#ffffff">
        <span class="help-block" id="color_span_1">Color Code : #fffff</span>
      </div>
    </div>

    <div class="form-group">
      <label for="color_2" class="col-lg-2 control-label">Monster 2</label>
      <div class="col-lg-10">
        <input type="color" class="form-control" id="color_2" onchange="color(2)" value="#ffffff">
        <span class="help-block" id="color_span_2">Color Code : #fffff</span>
      </div>
    </div>

    <div class="form-group">
      <label for="color_3" class="col-lg-2 control-label">Monster 3</label>
      <div class="col-lg-10">
        <input type="color" class="form-control" id="color_3" onchange="color(3)" value="#ffffff">
        <span class="help-block" id="color_span_3">Color Code : #fffff</span>
      </div>
    </div>

    <div class="form-group">
      <label for="color_4" class="col-lg-2 control-label">Monster 4</label>
      <div class="col-lg-10">
        <input type="color" class="form-control" id="color_4" onchange="color(4)" value="#ffffff">
        <span class="help-block" id="color_span_4">Color Code : #fffff</span>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
    
  </fieldset>
</form>
		</div>
	</div>
	<div class="col-md-6">
		<div class="create-panel"></div>
	</div>
</div>

@stop