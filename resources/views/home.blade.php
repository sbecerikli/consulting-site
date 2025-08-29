<x-app-layout>
    <div class="py-8">
        <h1 class="text-3xl font-bold mb-6">Anasayfa</h1>
        @if(session('status'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('status') }}</div>
        @endif
        <p class="text-gray-700">Teknik danışmanlık firmamızın ana sayfası.</p>
    </div>
</x-app-layout>


