@extends('layout')

@section('content')

<h1 class="text-gray-800 font-bold text-center text-5xl">Welcome!</h1>

<div class="pt-2 grid md:grid-cols-2 gap-3">
    <div class="border border-gray-300 rounded-md p-2">
        <h2 class="font-semibold">Column 1</h2>
    </div>
    <div class="border border-gray-300 rounded-md p-2">
        <h2 class="font-semibold">Column 2</h2>
    </div>
</div>

@endsection