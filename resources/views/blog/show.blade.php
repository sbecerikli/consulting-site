<x-app-layout>
    <div class="py-8 max-w-3xl">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        @if($post->body)
            <div class="prose max-w-none">{!! nl2br(e($post->body)) !!}</div>
        @endif
    </div>
</x-app-layout>


