<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Color Monster</title>
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-paper.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/custom.css')}}">

  <script type="text/javascript" src="{{asset('assets/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Color Monster</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li id="home"><a href="{{route('index')}}">Home <span class="sr-only">(current)</span></a></li>
        <li id="create"><a href="{{route('create')}}">Create New Monster</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
  <div class="header">
    <h1><span class="match-one">Beautiful</span> <span class="match-two">Colors,</span> <span class="match-three">Every</span> <span class="match-four">Day.<span></h1>
  </div>

@yield('content')

</div>
</body>

<script type="text/javascript">
$(document).ready(function(){
    $("#<?= $page ?>").addClass("active");
});
</script>
<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>

</html>