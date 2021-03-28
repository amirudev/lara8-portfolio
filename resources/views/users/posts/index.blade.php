@extends('layout.app')
@section('content')

<div class="flex justify-center">
	<div class="w-8/12 bg-white p-6 rounded m-5 shadow">
		<p class="text-xl font-bold mb-5">{{ $user->name }}</p>
		<hr>
		@foreach($posts as $post)
			<x-forum-post :post="$post"/>
		@endforeach
	</div>
</div>

@endsection