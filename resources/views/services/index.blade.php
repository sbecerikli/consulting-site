@section('title', __('app.page_titles.services'))

<x-app-layout>
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-purple-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    {{ __('app.services_hero_title') }}
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    {{ __('app.services_hero_subtitle') }}
                </p>
            </div>
        </div>
    </div>

    <!-- Services Grid -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($services->count() > 0)
                <!-- Services Count -->
                <div class="text-center mb-12">
                    <p class="text-lg text-gray-600">
                        <span class="font-semibold text-blue-600">{{ $services->total() }}</span> {{ __('app.services_found') }}
                    </p>
                </div>

                <!-- Services Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($services as $service)
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                                            <div class="h-48 bg-gradient-to-br from-blue-400 to-purple-500 flex items-center justify-center">
                        @if($service->title === 'İş Geliştirme Danışmanlığı')
                            <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                            </svg>
                        @elseif($service->title === 'Venture Capital Danışmanlığı')
                            <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        @elseif($service->title === 'M&A (Birleşme ve Satın Alma) Danışmanlığı')
                            <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        @elseif($service->title === 'Değerleme Danışmanlığı')
                            <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        @elseif($service->title === 'Due Diligence (Hakkaniyet Araştırması)')
                            <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        @elseif($service->title === 'Genel Danışmanlık Hizmetleri')
                            <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        @else
                            <svg class="w-20 h-20 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        @endif
                    </div>
                        
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-xl font-bold text-gray-900">{{ $service->title }}</h3>
                                @if($service->is_featured)
                                <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full">
                                    {{ __('app.featured') }}
                                </span>
                                @endif
                            </div>
                            
                            @if($service->excerpt)
                            <p class="text-gray-600 mb-4 leading-relaxed">{{ $service->excerpt }}</p>
                            @endif
                            

                            
                            <div class="flex items-center justify-between">
                                <div class="flex items-center text-sm text-gray-500">
                                    @if($service->duration)
                                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                    <span>{{ $service->duration }}</span>
                                    @endif
                                </div>
                                
                                <a href="{{ route('services.show', $service->slug) }}" 
                                   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition-colors duration-200">
                                    {{ __('app.view_details') }}
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($services->hasPages())
                <div class="mt-12">
                    <div class="flex justify-center">
                        {{ $services->links() }}
                    </div>
                </div>
                @endif
            @else
                <!-- Empty State -->
                <div class="text-center py-16">
                    <div class="mx-auto w-24 h-24 bg-gray-200 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">Henüz hizmet eklenmemiş</h3>
                    <p class="text-gray-500 mb-6">Yakında harika hizmetlerimizi burada görebileceksiniz.</p>
                    <a href="{{ route('home') }}" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-200">
                        Anasayfaya Dön
                    </a>
                </div>
            @endif
        </div>
    </div>

    <!-- CTA Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Özel bir proje mi var?</h2>
            <p class="text-lg text-gray-600 mb-8">Size özel çözümler için bizimle iletişime geçin</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('contact') }}" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    İletişime Geçin
                </a>
                <a href="{{ route('home') }}" class="border-2 border-blue-600 text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 hover:text-white transition duration-300">
                    Anasayfaya Dön
                </a>
            </div>
        </div>
    </div>
</x-app-layout>


