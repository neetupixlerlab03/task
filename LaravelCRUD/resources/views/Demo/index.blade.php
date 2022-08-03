<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Laravel 9 CRUD Example</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2>crud operation </h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('demos.create') }}"> ADD New</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>S.No</th>
<th>Name</th>
<th> Email</th>
</tr>
@foreach ($demos as $demo)
<tr>
<td>{{ $demo->id }}</td>
<td>{{ $demo->name }}</td>
<td>{{ $demo->email }}</td>
<td>
<form action="{{ route('demos.destroy',$demo->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('demos.edit',$demo->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>