@extends('layouts.blog')
@section('bodycontent')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <a href="{{ route('blog.index') }}" title="back" class="inline-flex items-center px-4 py-2 bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-900 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150" ><i class="fa-solid fa-arrow-left-long"></i></a><br><br>
            <h1 class="text-gray-700 text-xl text-center">{{ $post->title }}</h1><br><br>
            <p class="text-gray-900 text-lg">{{ $post->content }}</p><br>
            <strong class="text-sm">By: {{ $post->addby->username }}</strong><br>   
            <strong class="text-sm">Date: {{ $post->created_at->format('Y-m-d') }}</strong><br>   
            <strong class="text-sm">Update By: {{ $post->editby->username }}</strong><br>   
            <strong class="text-sm">Update: {{ $post->updated_at->format('Y-m-d') }}</strong><br>        
        </div>        
    </div>
</div>
@endsection