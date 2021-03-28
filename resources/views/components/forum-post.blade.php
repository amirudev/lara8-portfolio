@props(['post' => $post])

<div class="border rounded shadow p-3 my-2">
	<a href="{{ route('users.posts', $post->user ) }}" class="font-bold">{{ $post->user->name }}</a>
	<p>{{ $post->message }}</p>
	<p class="font-small text-gray-500 text-right">{{ $post->created_at->diffForHumans() }}</p>
	@can('delete', $post)
		<form action="{{ route('forum.destroy', $post) }}" method="POST">
			@csrf
			@method('DELETE')
			<button class="text-red-500 text-right w-full inline-block" type="submit">Delete</button>
		</form>
	@endif
</div>