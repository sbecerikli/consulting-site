<x-app-layout>
    <div class="py-8 max-w-3xl">
        <h1 class="text-3xl font-bold mb-4">{{ $service->title }}</h1>
        @if($service->body)
            <div class="prose max-w-none">{!! nl2br(e($service->body)) !!}</div>
        @endif
    </div>
</x-app-layout>


