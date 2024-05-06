@extends('layout')

@section('content')

<h1 class="text-gray-800 font-bold text-center text-5xl">Profile</h1>

<div class="pt-2 grid grid-cols-1 gap-y-2 md:grid-cols-3 md:gap-3">
    <div class="border border-gray-300 rounded-md p-2 col-span-1">
        <h2 class="font-semibold text-center">Profile Picture</h2>
        <img src="https://t3.ftcdn.net/jpg/03/58/90/78/360_F_358907879_Vdu96gF4XVhjCZxN2kCG0THTsSQi8IhT.jpg" alt="picture" class="pt-2 mx-auto rounded-full">
    </div>
    <div class="grid md:col-span-2 h-fit gap-y-2">
        <div class="border border-gray-300 rounded-md p-2">
            <h2 class="font-semibold text-center">Profile Customisation</h2>
            <form action="">
                <div class="grid md:grid-cols-2">
                    <input type="email" name="email" id="email" placeholder="Email Address" class="p-1 m-2 border border-slate-500 rounded-md">
                    <input type="text" name="username" id="username" placeholder="Username" class="p-1 m-2 border border-slate-500 rounded-md">
                </div>
                <button class="p-2 mr-2 border border-green-300 rounded-md bg-green-500 text-slate-900 font-semibold float-right">Update</button>
            </form>
        </div>
        <div class="border border-gray-300 rounded-md p-2">
            <h2 class="font-semibold text-center">Change Password</h2>
            <form action="">
                <div class="grid md:grid-cols-2">
                    <input type="password" name="pass" id="pass" placeholder="New Password" class="p-1 m-2 border border-slate-500 rounded-md">
                    <input type="password" name="confirm-pass" id="confirm-pass" placeholder="Confirm New Password" class="p-1 m-2 border border-slate-500 rounded-md">
                </div>
                <button class="p-2 mr-2 border border-red-300 rounded-md bg-red-500 text-slate-900 font-semibold float-right">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection