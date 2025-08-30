@php
    $settings = App\Models\SiteSettings::getSettings();
@endphp

<footer class="bg-gray-900 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Company Info -->
            <div class="lg:col-span-1">
                <div class="flex items-center mb-4">
                    <svg class="w-8 h-8 text-blue-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <h3 class="text-xl font-bold">{{ $settings->company_name }}</h3>
                </div>
                <p class="text-gray-300 mb-6">{{ $settings->company_description }}</p>
                <div class="flex space-x-4">
                    @if($settings->facebook_url && $settings->facebook_url !== '#')
                        <a href="{{ $settings->facebook_url }}" class="text-gray-400 hover:text-blue-400 transition duration-300" target="_blank" rel="noopener">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </a>
                    @endif
                    @if($settings->twitter_url && $settings->twitter_url !== '#')
                        <a href="{{ $settings->twitter_url }}" class="text-gray-400 hover:text-blue-400 transition duration-300" target="_blank" rel="noopener">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.665 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                            </svg>
                        </a>
                    @endif
                    @if($settings->linkedin_url && $settings->linkedin_url !== '#')
                        <a href="{{ $settings->linkedin_url }}" class="text-gray-400 hover:text-blue-400 transition duration-300" target="_blank" rel="noopener">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    @endif
                    @if($settings->instagram_url && $settings->instagram_url !== '#')
                        <a href="{{ $settings->instagram_url }}" class="text-gray-400 hover:text-blue-400 transition duration-300" target="_blank" rel="noopener">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                    @endif
                    @if($settings->youtube_url && $settings->youtube_url !== '#')
                        <a href="{{ $settings->youtube_url }}" class="text-gray-400 hover:text-blue-400 transition duration-300" target="_blank" rel="noopener">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                            </svg>
                        </a>
                    @endif
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Hızlı Linkler</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition duration-300">Ana Sayfa</a></li>
                    <li><a href="{{ route('about') }}" class="text-gray-300 hover:text-white transition duration-300">Hakkımızda</a></li>
                    <li><a href="{{ route('services.index') }}" class="text-gray-300 hover:text-white transition duration-300">Hizmetler</a></li>
                    <li><a href="{{ route('sectors.index') }}" class="text-gray-300 hover:text-white transition duration-300">Sektörler</a></li>
                    <li><a href="{{ route('contact') }}" class="text-gray-300 hover:text-white transition duration-300">İletişim</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold mb-4">İletişim</h3>
                <div class="space-y-3">
                    <div class="flex items-start">
                        <svg class="w-5 h-5 text-blue-400 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <p class="text-gray-300">{{ $settings->address }}</p>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <p class="text-gray-300">{{ $settings->phone }}</p>
                    </div>
                    <div class="flex items-center">
                        <svg class="w-5 h-5 text-blue-400 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <p class="text-gray-300">{{ $settings->email }}</p>
                    </div>
                </div>
            </div>

            <!-- Newsletter -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Bülten</h3>
                <p class="text-gray-300 mb-4">Güncel gelişmelerden haberdar olun</p>
                <form id="newsletterForm" class="space-y-3">
                    @csrf
                    <input type="email" id="newsletterEmail" placeholder="E-posta adresiniz" class="w-full px-3 py-2 bg-gray-800 border border-gray-700 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" required>
                    <button type="submit" id="newsletterSubmit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition duration-300">
                        Abone Ol
                    </button>
                </form>
                <div id="newsletterMessage" class="mt-3 text-sm hidden"></div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="border-t border-gray-800 mt-8 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-gray-400 text-sm">
                    {{ $settings->copyright_text }}
                </div>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    @if($settings->privacy_policy_url && $settings->privacy_policy_url !== '#')
                        <a href="{{ $settings->privacy_policy_url }}" class="text-gray-400 hover:text-white text-sm transition duration-300">Gizlilik Politikası</a>
                    @endif
                    @if($settings->terms_of_service_url && $settings->terms_of_service_url !== '#')
                        <a href="{{ $settings->terms_of_service_url }}" class="text-gray-400 hover:text-white text-sm transition duration-300">Kullanım Şartları</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const newsletterForm = document.getElementById('newsletterForm');
    const newsletterEmail = document.getElementById('newsletterEmail');
    const newsletterSubmit = document.getElementById('newsletterSubmit');
    const newsletterMessage = document.getElementById('newsletterMessage');

    newsletterForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const email = newsletterEmail.value.trim();
        if (!email) return;

        // Submit butonunu devre dışı bırak
        newsletterSubmit.disabled = true;
        newsletterSubmit.textContent = 'Gönderiliyor...';

        // CSRF token'ı al
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('{{ route("newsletter.subscribe") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': token,
                'Accept': 'application/json'
            },
            body: JSON.stringify({ email: email })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showMessage(data.message, 'success');
                newsletterForm.reset();
            } else {
                showMessage(data.message, 'error');
            }
        })
        .catch(error => {
            showMessage('Bir hata oluştu. Lütfen tekrar deneyiniz.', 'error');
        })
        .finally(() => {
            // Submit butonunu tekrar aktif et
            newsletterSubmit.disabled = false;
            newsletterSubmit.textContent = 'Abone Ol';
        });
    });

    function showMessage(message, type) {
        newsletterMessage.textContent = message;
        newsletterMessage.className = `mt-3 text-sm ${type === 'success' ? 'text-green-400' : 'text-red-400'}`;
        newsletterMessage.classList.remove('hidden');
        
        // 5 saniye sonra mesajı gizle
        setTimeout(() => {
            newsletterMessage.classList.add('hidden');
        }, 5000);
    }
});
</script>
