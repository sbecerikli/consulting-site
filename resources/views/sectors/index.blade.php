<x-app-layout>
    <div class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
        <!-- Hero Section -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-700 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                <div class="text-center">
                    <h1 class="text-4xl md:text-6xl font-bold mb-6">
                        Sektör Uzmanlığımız
                    </h1>
                    <p class="text-xl md:text-2xl text-blue-100 max-w-3xl mx-auto leading-relaxed">
                        Farklı sektörlerde edindiğimiz deneyim ve uzmanlık ile şirketinizin büyüme hedeflerine ulaşmasına yardımcı oluyoruz.
                    </p>
                </div>
            </div>
        </div>

        <!-- Sectors Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                @foreach($sectors as $sector)
                <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                    <!-- Sector Image -->
                    <div class="h-48 bg-gradient-to-br {{ $sector->color }} relative overflow-hidden">
                        <!-- Background Pattern -->
                        <div class="absolute inset-0 opacity-10">
                            @if($sector->icon === 'shield')
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Cpath d="M30 0l30 30-30 30L0 30z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                            @elseif($sector->icon === 'airplane')
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                            @elseif($sector->icon === 'car')
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Crect x="20" y="25" width="20" height="10" rx="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                            @elseif($sector->icon === 'factory')
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Cpath d="M10 40h40v10H10z M20 30h20v10H20z M30 20h10v20H30z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                            @elseif($sector->icon === 'anchor')
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="3"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                            @elseif($sector->icon === 'train')
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Crect x="15" y="25" width="30" height="15" rx="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                            @elseif($sector->icon === 'signal')
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Cpath d="M30 10v40 M20 20v30 M40 20v30"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                            @elseif($sector->icon === 'code')
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Cpath d="M20 20l10 10-10 10 M40 20l-10 10 10 10"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                            @else
                                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.1"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
                            @endif
                        </div>
                        
                        <!-- Main Icon -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            @if($sector->icon === 'shield')
                                <svg class="w-20 h-20 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            @elseif($sector->icon === 'airplane')
                                <svg class="w-20 h-20 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            @elseif($sector->icon === 'car')
                                <svg class="w-20 h-20 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                            @elseif($sector->icon === 'factory')
                                <svg class="w-20 h-20 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            @elseif($sector->icon === 'anchor')
                                <svg class="w-20 h-20 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                                </svg>
                            @elseif($sector->icon === 'train')
                                <svg class="w-20 h-20 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                </svg>
                            @elseif($sector->icon === 'signal')
                                <svg class="w-20 h-20 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                                </svg>
                            @elseif($sector->icon === 'code')
                                <svg class="w-20 h-20 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            @else
                                <svg class="w-20 h-20 text-white drop-shadow-lg" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            @endif
                        </div>
                        
                        <!-- Decorative Elements -->
                        <div class="absolute top-4 right-4">
                            <div class="w-8 h-8 bg-white/20 rounded-full"></div>
                        </div>
                        <div class="absolute bottom-4 left-4">
                            <div class="w-6 h-6 bg-white/20 rounded-full"></div>
                        </div>
                    </div>
                        
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xl font-bold text-gray-900">{{ $sector->name }}</h3>
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                {{ count($sector->services) }} Hizmet
                            </span>
                        </div>
                        
                        <p class="text-gray-600 mb-4 leading-relaxed">{{ $sector->description }}</p>
                        
                        <!-- Services List -->
                        <div class="mb-6">
                            <h4 class="text-sm font-semibold text-gray-900 mb-3">Sunduğumuz Hizmetler:</h4>
                            <div class="flex flex-wrap gap-2">
                                @foreach($sector->services as $service)
                                <span class="px-3 py-1 bg-gray-100 text-gray-700 text-xs font-medium rounded-full">
                                    {{ $service['service'] }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                        
                        <div class="flex items-center justify-between">
                            <div class="flex items-center text-sm text-gray-500">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                                <span>Sektör Uzmanlığı</span>
                            </div>
                            
                            <a href="{{ route('contact') }}" 
                               class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors duration-200">
                                Danışmanlık Al
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-blue-600 to-purple-700 text-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div class="text-center">
                    <h2 class="text-3xl md:text-5xl font-bold mb-6">
                        Sektörünüzde Uzman Desteği Alın
                    </h2>
                    <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                        Deneyimli danışmanlarımız ile sektörünüzdeki fırsatları değerlendirin ve büyüme hedeflerinize ulaşın.
                    </p>
                    <a href="{{ route('contact') }}" 
                       class="inline-flex items-center px-8 py-4 bg-white text-blue-600 text-lg font-semibold rounded-lg hover:bg-gray-100 transition-colors duration-200">
                        Ücretsiz Danışmanlık Al
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
