@extends('layout.app')
@section('content')
<div class="flex justify-center">
	<div class="w-8/12 bg-white p-6 rounded m-5 shadow">
		<p class="text-xl font-bold mb-5">Forum</p>
		<hr>
		@if(auth()->user())
			<form action="{{ route('forum') }}" method="POST">
				@csrf
				<textarea class="w-full border border-gray-400 rounded-lg mt-4 h-40 p-3 bg-gray-100" name="message" placeholder="Write something here ..."></textarea>
				<div class="flex justify-end">
					<input type="submit" name="submit" class="bg-blue-500 rounded-lg text-white px-10 py-3 mt-1" value="Kirim">
				</div>
			</form>
		@endif
		@if($posts->count())
			@foreach($posts as $post)
				<x-forum-post :post="$post"/>
			@endforeach
			{{ $posts->links() }}
		@endif
	</div>
</div>
@endsection