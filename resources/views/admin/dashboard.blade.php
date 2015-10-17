@extends('admin.app')

@section('content_header')
<h1>Dashboard<small>Control panel</small></h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
</ol>
@endsection
@section('content')
    <div class="callout callout-success lead">
        <h4>Welcome to GREEN ARCHITECTURE DESIGN ADMIN!</h4>
        <p></p>
    </div>
@endsection
@section('script')
$(document).ajaxStart(function() { Pace.restart(); }); 
@endsection