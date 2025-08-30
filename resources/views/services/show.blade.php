<x-app-layout>
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-purple-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    {{ $service->title }}
                </h1>
                @if($service->excerpt)
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    {{ $service->excerpt }}
                </p>
                @endif
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                        Hemen Başlayın
                    </a>
                    <a href="{{ route('services.index') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                        Tüm Hizmetler
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Content -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                <!-- Main Content -->
                <div class="lg:col-span-2">
                    <div class="mb-8">
                        <div class="w-full h-64 md:h-96 bg-gradient-to-br from-blue-400 to-purple-500 rounded-xl shadow-lg flex items-center justify-center">
                            @if($service->title === 'İş Geliştirme Danışmanlığı')
                                <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                            @elseif($service->title === 'Venture Capital Danışmanlığı')
                                <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                                </svg>
                            @elseif($service->title === 'M&A (Birleşme ve Satın Alma) Danışmanlığı')
                                <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            @elseif($service->title === 'Değerleme Danışmanlığı')
                                <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            @elseif($service->title === 'Due Diligence (Hakkaniyet Araştırması)')
                                <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                </svg>
                            @elseif($service->title === 'Genel Danışmanlık Hizmetleri')
                                <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            @else
                                <svg class="w-32 h-32 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            @endif
                        </div>
                    </div>

                    @if($service->body)
                    <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Hizmet Detayları</h2>
                        <div class="prose prose-lg max-w-none text-gray-700 leading-relaxed">
                            {!! nl2br(e($service->body)) !!}
                        </div>
                    </div>
                    @endif

                    <!-- Features Section -->
                    @if($service->features)
                    <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Özellikler</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            @foreach(explode(',', $service->features) as $feature)
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-green-500 mr-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="text-gray-700">{{ trim($feature) }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Process Section -->
                    @if($service->process)
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="text-2xl font-bold text-gray-900 mb-6">Süreç</h2>
                        <div class="space-y-4">
                            {!! nl2br(e($service->process)) !!}
                        </div>
                    </div>
                    @endif
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <!-- Service Info Card -->
                    <div class="bg-white rounded-xl shadow-lg p-6 mb-6 sticky top-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Hizmet Bilgileri</h3>
                        


                        @if($service->duration)
                        <div class="flex items-center mb-4">
                            <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="text-gray-700">{{ $service->duration }}</span>
                        </div>
                        @endif

                        @if($service->delivery_time)
                        <div class="flex items-center mb-4">
                            <svg class="w-5 h-5 text-gray-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                            <span class="text-gray-700">Teslimat: {{ $service->delivery_time }}</span>
                        </div>
                        @endif

                        @if($service->is_featured)
                        <div class="mb-6">
                            <span class="bg-yellow-100 text-yellow-800 text-sm font-medium px-3 py-1 rounded-full">
                                ⭐ Öne Çıkan Hizmet
                            </span>
                        </div>
                        @endif

                        <a href="{{ route('contact') }}" 
                           class="w-full bg-blue-600 text-white text-center py-3 px-6 rounded-lg font-semibold hover:bg-blue-700 transition duration-300 block">
                            Hemen Teklif Alın
                        </a>
                    </div>

                    <!-- Related Services -->
                    @php
                        $relatedServices = \App\Models\Service::where('is_published', true)
                            ->where('id', '!=', $service->id)
                            ->limit(3)
                            ->get();
                    @endphp

                    @if($relatedServices->count() > 0)
                    <div class="bg-white rounded-xl shadow-lg p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Benzer Hizmetler</h3>
                        <div class="space-y-4">
                            @foreach($relatedServices as $relatedService)
                            <a href="{{ route('services.show', $relatedService->slug) }}" 
                               class="block p-4 border border-gray-200 rounded-lg hover:bg-gray-50 transition duration-200">
                                <h4 class="font-semibold text-gray-900 mb-2">{{ $relatedService->title }}</h4>
                                @if($relatedService->excerpt)
                                <p class="text-sm text-gray-600">{{ Str::limit($relatedService->excerpt, 80) }}</p>
                                @endif
                            </a>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Bu hizmeti denemek ister misiniz?</h2>
            <p class="text-xl mb-8 text-blue-100">Uzman ekibimizle tanışın ve projenizi hayata geçirin</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                    Ücretsiz Danışmanlık
                </a>
                <a href="{{ route('services.index') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                    Tüm Hizmetlerimiz
                </a>
            </div>
        </div>
    </div>
</x-app-layout>


