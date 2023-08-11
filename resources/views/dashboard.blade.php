@extends('layouts.app')
@section('bodycontent')
<h1 class="text-center font-bold text-gray-600">Welcome {{ auth()->user()->fname }} {{ auth()->user()->lname }} ({{ auth()->user()->username }})</h1>

<div class="py-12">
  <div class="sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg sm:px-24 lg:px-26">
      <div class="flex space-x-40">
        <a href="{{ route('blog.index') }}">
            <div class="justify-center inline-flex bg-gray-50 rounded overflow-hidden shadow-lg" style="width:320px; height:128px;">
                <div class="px-6 py-4 text-center">
                    <div class="font-bold text-5xl text-emerald-600">Visit Blog</div>
                </div>
            </div>
        </a>
      </div><br>
    </div>
  </div>
</div><br>
@endsection
