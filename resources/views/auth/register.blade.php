@extends('layout.app')
@section('content')
<div class="flex justify-center">
	<div class="w-4/12 bg-white p-6 rounded-lg my-5">
		<p class="text-center font-bold text-xl my-4">Register</p>
		<form action="{{ route('register') }}" method="post">
			@csrf
			<label class="sr-only">Username</label>
			<input type="text" name="username" class="bg-gray-100 w-full border-2 p-4 rounded-lg my-3 @error('username') border-red-500 @enderror" placeholder="Username" value="{{ old('username') }}">
			@error('username')
				<p class="text-red-500 text-sm">{{ $message }}</p>
			@enderror

			<label class="sr-only">Name</label>
			<input type="text" name="name" class="bg-gray-100 w-full border-2 p-4 rounded-lg my-3 @error('name') border-red-500 @enderror" placeholder="Name" value="{{ old('name') }}">
			@error('name')
				<p class="text-red-500 text-sm">{{ $message }}</p>
			@enderror

			<label class="sr-only">E-Mail</label>
			<input type="email" name="email" class="bg-gray-100 w-full border-2 p-4 rounded-lg my-3 @error('email') border-red-500 @enderror" placeholder="E-Mail" value="{{ old('email') }}">
			@error('email')
				<p class="text-red-500 text-sm">{{ $message }}</p>
			@enderror

			<label class="sr-only">Password</label>
			<input type="password" name="password" class="bg-gray-100 w-full border-2 p-4 rounded-lg my-3 @error('password') border-red-500 @enderror" placeholder="Password">
			@error('password')
				<p class="text-red-500 text-sm">{{ $message }}</p>
			@enderror

			<label class="sr-only">Password Confirmation</label>
			<input type="password" name="password_confirmation" class="bg-gray-100 w-full border-2 p-4 rounded-lg my-3" placeholder="Repeat Password">
			@error('password_confirmation')
				<p class="text-red-500 text-sm">{{ $message }}</p>
			@enderror

			<input type="submit" name="submit" class="bg-blue-500 text-white rounded w-full py-4 my-3" value="Sign Up">
		</form>
	</div>
</div>
@endsection