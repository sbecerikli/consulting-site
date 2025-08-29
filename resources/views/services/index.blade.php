<x-app-layout>
    <div class="py-8">
        <h1 class="text-3xl font-bold mb-6">Hizmetler</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @forelse($services as $service)
                <a href="{{ route('services.show', $service->slug) }}" class="block p-4 border rounded hover:bg-gray-50">
                    <h2 class="text-xl font-semibold">{{ $service->title }}</h2>
                    @if($service->excerpt)
                        <p class="text-gray-600 mt-2">{{ $service->excerpt }}</p>
                    @endif
                </a>
            @empty
                <p>Henüz hizmet eklenmemiş.</p>
            @endforelse
        </div>
        <div class="mt-6">{{ $services->links() }}</div>
    </div>
</x-app-layout>


