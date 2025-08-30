@section('title', __('app.page_titles.about'))

<x-app-layout>
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-purple-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    {{ __('app.about_hero_title') }}
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    {{ __('app.about_hero_subtitle') }}
                </p>
            </div>
        </div>
    </div>

    <!-- Company Story Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">{{ __('app.company_story_title') }}</h2>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        {{ __('app.company_story_content_1') }}
                    </p>
                    <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                        {{ __('app.company_story_content_2') }}
                    </p>
                    <div class="grid grid-cols-2 gap-6 mt-8">
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-2">{{ $aboutContent->completed_projects_count }}+</div>
                            <div class="text-gray-600">{{ __('app.completed_projects') }}</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-bold text-blue-600 mb-2">{{ $aboutContent->expertise_areas_count }}</div>
                            <div class="text-gray-600">{{ __('app.expertise_areas') }}</div>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="bg-gradient-to-br from-blue-400 to-purple-500 rounded-2xl p-8 text-white">
                        <div class="text-center">
                            <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            <h3 class="text-2xl font-bold mb-4">{{ __('app.mission_title') }}</h3>
                            <p class="text-lg leading-relaxed">
                                {{ __('app.mission_content') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('app.values_title') }}</h2>
                <p class="text-lg text-gray-600">{{ __('app.values_subtitle') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 mx-auto mb-4 bg-blue-100 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ __('app.value_1_title') }}</h3>
                    <p class="text-gray-600">{{ __('app.value_1_content') }}</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 mx-auto mb-4 bg-green-100 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ __('app.value_2_title') }}</h3>
                    <p class="text-gray-600">{{ __('app.value_2_content') }}</p>
                </div>
                <div class="bg-white rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="w-16 h-16 mx-auto mb-4 bg-purple-100 rounded-full flex items-center justify-center">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ __('app.value_3_title') }}</h3>
                    <p class="text-gray-600">{{ __('app.value_3_content') }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Section -->
    @if($teamMembers->count() > 0)
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('app.team_title') }}</h2>
                <p class="text-lg text-gray-600">{{ __('app.team_subtitle') }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($teamMembers as $member)
                <div class="bg-gray-50 rounded-lg p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="w-24 h-24 mx-auto mb-4 bg-gradient-to-br from-blue-400 to-purple-500 rounded-full flex items-center justify-center">
                        @if($member->avatar)
                            <img src="{{ $member->avatar }}" alt="{{ $member->name }}" class="w-24 h-24 rounded-full object-cover">
                        @else
                            <span class="text-2xl font-bold text-white">{{ substr($member->name, 0, 1) }}</span>
                        @endif
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $member->name }}</h3>
                    <p class="text-blue-600 font-medium mb-3">{{ $member->position }}</p>
                                            <p class="text-gray-600 mb-4">{{ is_string($member->bio) ? Str::limit($member->bio, 120) : '' }}</p>
                    @if($member->linkedin_url)
                        <a href="{{ $member->linkedin_url }}" class="text-blue-600 hover:text-blue-800 transition duration-300" target="_blank" rel="noopener">
                            <svg class="w-5 h-5 inline" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.047-1.032-3.047-1.032 0-1.21.805-1.21 1.972v3.647h-3.556V9h3.413v1.004h.004c.312.594.964.923 1.647.923.176 0 .35-.012.52-.033v3.658zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                            LinkedIn
                        </a>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <!-- Services Preview Section -->
    @if($services->count() > 0)
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ $aboutContent->services_title }}</h2>
                <p class="text-lg text-gray-600">{{ $aboutContent->services_subtitle }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($services as $service)
                <div class="bg-white rounded-lg p-6 hover:shadow-lg transition duration-300">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-purple-500 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ $service->title }}</h3>
                                            <p class="text-gray-600 mb-4">{{ is_string($service->excerpt) ? Str::limit($service->excerpt, 100) : '' }}</p>
                    <a href="{{ route('services.show', $service->slug) }}" class="text-blue-600 hover:text-blue-800 font-medium">
                        Detayları Gör →
                    </a>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('services.index') }}" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
                    Tüm Hizmetlerimizi Görün
                </a>
            </div>
        </div>
    </div>
    @endif

    <!-- CTA Section -->
    <div class="py-16 bg-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-4">{{ $aboutContent->cta_title }}</h2>
            <p class="text-xl text-blue-100 mb-8">{{ $aboutContent->cta_subtitle }}</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route($aboutContent->cta_button_1_url) }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
                    {{ $aboutContent->cta_button_1_text }}
                </a>
                <a href="{{ route($aboutContent->cta_button_2_url) }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition duration-300">
                    {{ $aboutContent->cta_button_2_text }}
                </a>
            </div>
        </div>
    </div>
</x-app-layout>


