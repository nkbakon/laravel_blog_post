@extends('layouts.blog')
@section('bodycontent')
<h1 class="text-gray-500 text-center">Welcome To Blog</h1>
<div class="py-12">
  <div class="sm:px-6 lg:px-8">
    <div class="bg-gray-100 overflow-hidden shadow-sm sm:rounded-lg sm:px-24 lg:px-26">
      <div class="flex space-x-40">
        @foreach($posts as $post)
            <a href="{{ route('blog.show', $post) }}">
                <div class="justify-center inline-flex bg-gray-300 rounded overflow-hidden shadow-lg" style="width:320px; height:128px;">
                    <div class="px-6 py-4 text-center">
                        <h3 class="mt-4 text-sm text-gray-700">By:{{ $post->addby->username }} ({{ $post->created_at->format('Y-m-d') }})</h3>
                        <p class="mt-1 text-lg font-medium text-gray-900">{{ $post->title }}</p>
                    </div>
                </div>
            </a>
        @endforeach
      </div><br>
      <div class="p-2 bg-gray-50">
        <div class="flex justify-end">
            {{ $posts->links() }}            
        </div>
    </div>
    </div>
  </div>
</div><br>
@endsection