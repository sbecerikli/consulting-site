<x-app-layout>
    <div class="py-8 max-w-xl mx-auto">
        <h1 class="text-3xl font-bold mb-6">İletişim</h1>
        @if(session('status'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('status') }}</div>
        @endif
        <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
            @csrf
            <div>
                <label class="block mb-1">Ad Soyad</label>
                <input name="name" class="border px-3 py-2 w-full" required>
                @error('name')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block mb-1">E-posta</label>
                <input type="email" name="email" class="border px-3 py-2 w-full" required>
                @error('email')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block mb-1">Telefon</label>
                <input name="phone" class="border px-3 py-2 w-full">
                @error('phone')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block mb-1">Konu</label>
                <input name="subject" class="border px-3 py-2 w-full">
                @error('subject')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <div>
                <label class="block mb-1">Mesaj</label>
                <textarea name="message" class="border px-3 py-2 w-full" rows="5" required></textarea>
                @error('message')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
            </div>
            <button class="bg-blue-600 text-white px-4 py-2 rounded">Gönder</button>
        </form>
    </div>
</x-app-layout>


