@extends('layout.app')
@section('content')
<div class="flex justify-center">
	<div class="w-4/12 bg-white p-6 rounded-lg my-5">
		<p class="text-center font-bold text-xl my-4">Log In</p>
		@if(session('status'))
		<p class="text-red-500 text-center">{{ session('status') }}</p>
		@endif
		<form action="{{ route('login') }}" method="POST">
			@csrf
			<label class="sr-only">Username</label>
			<input type="text" name="username" class="bg-gray-100 w-full border-2 p-4 rounded-lg my-3 @error('username') border-red-500 @enderror" placeholder="Username" value="{{ old('username') }}">
			@error('username')
				<p class="text-red-500 text-sm">{{ $message }}</p>
			@enderror

			<label class="sr-only">Password</label>
			<input type="password" name="password" class="bg-gray-100 w-full border-2 p-4 rounded-lg my-3 @error('password') border-red-500 @enderror" placeholder="Password" value="{{ old('password') }}">
			@error('password')
				<p class="text-red-500 text-sm">{{ $message }}</p>
			@enderror

			<input type="submit" name="submit" class="bg-blue-500 text-white rounded w-full py-4 my-3" value="Sign In">
		</form>
	</div>
</div>
@endsection