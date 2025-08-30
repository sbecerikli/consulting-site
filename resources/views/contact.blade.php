@section('title', __('app.page_titles.contact'))

<x-app-layout>
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-r from-blue-600 to-purple-700 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    {{ __('app.contact_hero_title') }}
                </h1>
                <p class="text-xl md:text-2xl mb-8 text-blue-100">
                    {{ __('app.contact_hero_subtitle') }}
                </p>
            </div>
        </div>
    </div>

    <!-- Contact Form & Info Section -->
    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h2 class="text-3xl font-bold text-gray-900 mb-8">{{ __('app.send_message') }}</h2>
                    
                    <form id="contactForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">{{ __('app.full_name') }} *</label>
                                <input type="text" id="name" name="name" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                                       placeholder="{{ __('app.name_placeholder') }}">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">{{ __('app.email') }} *</label>
                                <input type="email" id="email" name="email" required 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                                       placeholder="{{ __('app.email_placeholder') }}">
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">{{ __('app.phone') }}</label>
                                <input type="tel" id="phone" name="phone" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                                       placeholder="{{ __('app.phone_placeholder') }}">
                            </div>
                            <div>
                                <label for="company" class="block text-sm font-medium text-gray-700 mb-2">{{ __('app.company') }}</label>
                                <input type="text" id="company" name="company" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                                       placeholder="{{ __('app.company_placeholder') }}">
                            </div>
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">{{ __('app.subject') }} *</label>
                            <input type="text" id="subject" name="subject" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                                   placeholder="{{ __('app.subject_placeholder') }}">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">{{ __('app.message') }} *</label>
                            <textarea id="message" name="message" rows="6" required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"
                                      placeholder="{{ __('app.message_placeholder') }}"></textarea>
                        </div>
                        
                        <div id="formMessage" class="hidden"></div>
                        
                        <button type="submit" id="submitBtn" 
                                class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white py-4 px-8 rounded-lg hover:from-blue-700 hover:to-purple-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 transform hover:scale-105 font-semibold text-lg">
                            {{ __('app.send_message') }}
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-6">
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h2 class="text-3xl font-bold text-gray-900 mb-8">{{ __('app.contact_info') }}</h2>
                        
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 text-lg">{{ __('app.address') }}</h3>
                                    <p class="text-gray-600 text-lg">{{ $settings->address ?? __('app.address_info') }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 text-lg">{{ __('app.phone') }}</h3>
                                    <p class="text-gray-600 text-lg">{{ $settings->phone ?? __('app.phone_info') }}</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center">
                                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 text-lg">{{ __('app.email') }}</h3>
                                    <p class="text-gray-600 text-lg">{{ $settings->email ?? __('app.email_info') }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Social Media -->
                        <div class="mt-8 pt-8 border-t border-gray-200">
                            <h3 class="font-semibold text-gray-900 text-lg mb-4">{{ __('app.social_media') }}</h3>
                            <div class="flex space-x-4">
                                @if($settings->facebook_url && $settings->facebook_url !== '#')
                                    <a href="{{ $settings->facebook_url }}" target="_blank" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition duration-200">
                                        <svg class="w-6 h-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                        </svg>
                                    </a>
                                @endif
                                
                                @if($settings->twitter_url && $settings->twitter_url !== '#')
                                    <a href="{{ $settings->twitter_url }}" target="_blank" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition duration-200">
                                        <svg class="w-6 h-6 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                        </svg>
                                    </a>
                                @endif
                                
                                @if($settings->linkedin_url && $settings->linkedin_url !== '#')
                                    <a href="{{ $settings->linkedin_url }}" target="_blank" class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center hover:bg-blue-200 transition duration-200">
                                        <svg class="w-6 h-6 text-blue-700" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.047-1.032-3.047-1.032 0-1.26 1.317-1.26 3.047v5.569h-3.554V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                        </svg>
                                    </a>
                                @endif
                                
                                @if($settings->instagram_url && $settings->instagram_url !== '#')
                                    <a href="{{ $settings->instagram_url }}" target="_blank" class="w-12 h-12 bg-pink-100 rounded-full flex items-center justify-center hover:bg-pink-200 transition duration-200">
                                        <svg class="w-6 h-6 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">{{ __('app.location') }}</h2>
                <p class="text-lg text-gray-600">{{ __('app.location_subtitle') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-lg p-6">
                <div id="map" class="w-full h-96 rounded-lg"></div>
            </div>
        </div>
    </div>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <!-- Leaflet JavaScript -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Harita oluştur
            const map = L.map('map').setView([
                {{ $settings->latitude ?? 41.0082 }}, 
                {{ $settings->longitude ?? 28.9784 }}
            ], {{ $settings->map_zoom ?? 15 }});

            // OpenStreetMap tile layer ekle
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                maxZoom: 19
            }).addTo(map);

            // Marker ekle
            const marker = L.marker([
                {{ $settings->latitude ?? 41.0082 }}, 
                {{ $settings->longitude ?? 28.9784 }}
            ]).addTo(map);

            // Popup ekle
            marker.bindPopup(`
                <div class="p-2">
                    <h3 class="font-semibold text-lg">{{ $settings->company_name ?? "Ofis" }}</h3>
                    <p class="text-sm text-gray-600">{{ $settings->address ?? "Adres bilgisi" }}</p>
                    <p class="text-sm text-gray-600">{{ $settings->phone ?? "Telefon bilgisi" }}</p>
                </div>
            `);

            // Marker'a tıklandığında popup'ı aç
            marker.on('click', function() {
                this.openPopup();
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            const formMessage = document.getElementById('formMessage');

            function showMessage(message, type) {
                let bgColor, textColor;

                if (type === 'success') {
                    bgColor = 'bg-green-100';
                    textColor = 'text-green-700';
                } else if (type === 'error') {
                    bgColor = 'bg-red-100';
                    textColor = 'text-red-700';
                } else if (type === 'sending') {
                    bgColor = 'bg-blue-100';
                    textColor = 'text-blue-700';
                }

                formMessage.textContent = message;
                formMessage.className = `p-4 rounded-lg text-center ${bgColor} ${textColor}`;
                formMessage.classList.remove('hidden');

                // Auto-hide messages after timeout
                if (type === 'sending') {
                    setTimeout(() => {
                        formMessage.classList.add('hidden');
                    }, 8000); // 8 saniye sonra kaybolsun
                } else if (type === 'success' || type === 'error') {
                    setTimeout(() => {
                        formMessage.classList.add('hidden');
                    }, 5000); // Success/Error 5 saniye sonra kaybolsun
                }
            }

            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Show sending message
                    showMessage('Mesajınız gönderiliyor...', 'sending');

                    // Disable submit button
                    submitBtn.disabled = true;
                    submitBtn.textContent = 'Gönderiliyor...';

                    // Get form data
                    const formData = new FormData(contactForm);

                    // Minimum delay to show "sending" message
                    const minDelay = 3000; // 3 saniye minimum
                    const startTime = Date.now();

                    // Send AJAX request
                    fetch('/contact', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Calculate remaining time to ensure minimum delay
                        const elapsed = Date.now() - startTime;
                        const remainingDelay = Math.max(0, minDelay - elapsed);

                        setTimeout(() => {
                            if (data.success) {
                                showMessage(data.message, 'success');
                                contactForm.reset();
                            } else {
                                showMessage(data.message || 'Bir hata oluştu.', 'error');
                            }
                        }, remainingDelay);
                    })
                    .catch(error => {
                        console.error('Error:', error);

                        // Calculate remaining time to ensure minimum delay
                        const elapsed = Date.now() - startTime;
                        const remainingDelay = Math.max(0, minDelay - elapsed);

                        setTimeout(() => {
                            showMessage('Bir hata oluştu. Lütfen tekrar deneyiniz.', 'error');
                        }, remainingDelay);
                    })
                    .finally(() => {
                        // Re-enable submit button
                        submitBtn.disabled = false;
                        submitBtn.textContent = 'Mesaj Gönder';
                    });
                });
            }
        });
    </script>
</x-app-layout>
