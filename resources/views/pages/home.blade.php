@extends('layouts.master')

@section('content')

<h1>Welcome Home</h1>
<p class="lead">
	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse sit amet lectus nec lectus facilisis placerat. Morbi non consectetur neque. Aliquam erat volutpat. Praesent libero diam, fermentum sed elit eu, efficitur luctus odio. Sed vulputate metus id ipsum consequat eleifend. Nunc hendrerit ornare mi, iaculis sodales nulla tempor eget. Integer pellentesque arcu eu dui maximus, eget maximus urna mattis. Sed velit risus, semper id tempus eget, aliquam a elit. Praesent bibendum sapien mattis maximus sagittis. Integer eget rhoncus mauris. Nunc sodales aliquam volutpat. Suspendisse quis hendrerit velit. Donec id metus maximus, gravida turpis et, suscipit turpis.
</p>
<hr>

<a href="{{ route('tasks.index') }}" class="btn btn-info">View Tasks</a>
<a href="{{ route('tasks.create') }}" class="btn btn-primary">Add New Task</a>

@stop