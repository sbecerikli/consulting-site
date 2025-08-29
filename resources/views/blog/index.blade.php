@extends('layouts.app')

@section('content')
<div class="py-8">
    <h1 class="text-3xl font-bold mb-6">Blog</h1>
    <div class="space-y-6">
        @forelse($posts as $post)
            <a href="{{ route('blog.show', $post->slug) }}" class="block">
                <h2 class="text-xl font-semibold">{{ $post->title }}</h2>
                @if($post->excerpt)
                    <p class="text-gray-600 mt-1">{{ $post->excerpt }}</p>
                @endif
            </a>
        @empty
            <p>Henüz yazı eklenmemiş.</p>
        @endforelse
    </div>
    <div class="mt-6">{{ $posts->links() }}</div>
</div>
@endsection


