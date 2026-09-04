@extends('layouts.app')

@section('content')

<!-- About & Education Section -->
<section id="about" class="py-16 md:py-24 px-4 bg-white dark:bg-[#111827] transition-colors duration-300" aria-label="About and Education">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12">
        
        <!-- About Me -->
        <div class="slide-in-left opacity-0 transition-all duration-700 ease-out" data-animate>
            <h2 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white border-b-2 border-[#6366F1] inline-block pb-2">About Me</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed text-base md:text-lg">
                I am an incoming 4th-year BSIT student with a TESDA NC II certification. I blend technical proficiency in PC assembly and software development with real-world operational experience. I am eager to apply my technical background and quick adaptability to diverse roles, from logistics and routing to full-stack development, continually expanding my practical knowledge.
            </p>
            <ul class="space-y-3 text-gray-700 dark:text-gray-300 font-medium">
                <li class="flex items-center group">
                    <i class="fas fa-map-marker-alt text-[#06B6D4] w-6 text-xl transition-transform duration-300 group-hover:scale-110"></i> 
                    Angad, Bangued, Abra
                </li>
                <li class="flex items-center group">
                    <i class="fas fa-envelope text-[#06B6D4] w-6 text-xl transition-transform duration-300 group-hover:scale-110"></i> 
                    choeymauzar@gmail.com
                </li>
                <li class="flex items-center group">
                    <i class="fas fa-phone text-[#06B6D4] w-6 text-xl transition-transform duration-300 group-hover:scale-110"></i> 
                    09615038773
                </li>
            </ul>
        </div>

        <!-- Education -->
        <div class="slide-in-right opacity-0 transition-all duration-700 ease-out delay-100" data-animate>
            <h2 class="text-3xl font-bold mb-6 text-gray-900 dark:text-white border-b-2 border-[#06B6D4] inline-block pb-2">Education</h2>
            <div class="bg-gray-50 dark:bg-[#1e293b] p-6 rounded-xl border border-gray-200 dark:border-gray-700 shadow-md hover:shadow-xl hover:border-[#6366F1] dark:hover:border-[#6366F1] transition-all duration-300">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white">Bachelor of Science in Information Technology</h3>
                <p class="text-[#6366F1] font-bold mt-2 text-base md:text-lg">Incoming 4th Year Student</p>
                <p class="text-gray-600 dark:text-gray-400 mt-4 flex items-center">
                    <i class="fas fa-university mr-3 text-2xl text-[#06B6D4]"></i> 
                    Data Center College of the Philippines (DCCP)
                </p>
            </div>
        </div>

    </div>
</section>

<!-- Hero Section -->
<section id="hero" class="relative min-h-screen flex flex-col items-center justify-center overflow-hidden" aria-label="Hero">
    <div class="absolute inset-0 z-0 bg-gray-900">
        <!-- Fallback background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-gray-800 to-gray-900"></div>
        <!-- Overlay darkens the video so text is readable in both modes -->
        <div class="absolute inset-0 bg-black/60 z-10"></div>
      <video autoplay loop muted playsinline preload="metadata" class="w-full h-full object-cover opacity-50" aria-hidden="true">
    <!-- Replaced placeholder with your actual drone footage -->
    <source src="{{ asset('videos/Timeline 1.mov') }}" type="video/quicktime">
</video>
    </div>

    <div class="relative z-20 text-center px-4 mt-16 text-white">
        <h1 class="text-4xl sm:text-5xl md:text-7xl font-bold mb-4 animate-fade-in">
            <span class="text-[#6366F1]">Choey</span> <span class="text-[#06B6D4]">Mauzar</span>
        </h1>
        <div class="text-lg sm:text-xl md:text-2xl text-gray-200 font-light h-8 mb-8" aria-live="polite">
            <span id="typed-text"></span><span class="cursor">&nbsp;</span>
        </div>
        
        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12 md:mb-16 animate-fade-in-up" style="animation-delay: 0.3s">
            <a href="#portfolio" class="bg-[#6366F1] hover:bg-[#4f52c9] text-white px-8 py-3 rounded-full transition-all duration-300 font-bold shadow-lg shadow-indigo-500/30 hover:shadow-xl hover:shadow-indigo-500/40 hover:-translate-y-0.5 focus:ring-2 focus:ring-[#06B6D4] focus:ring-offset-2 focus:outline-none">
                View My Work
            </a>
            <a href="#contact" class="border-2 border-[#06B6D4] text-[#06B6D4] hover:bg-[#06B6D4] hover:text-white px-8 py-3 rounded-full transition-all duration-300 font-bold hover:-translate-y-0.5 focus:ring-2 focus:ring-[#6366F1] focus:ring-offset-2 focus:outline-none">
                Contact Me
            </a>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto w-full animate-fade-in-up" style="animation-delay: 0.6s">
            <div class="text-center p-4 rounded-lg hover:bg-white/5 transition-colors duration-300">
                <div class="text-2xl md:text-3xl font-bold text-[#6366F1]">5+</div>
                <div class="text-xs md:text-sm text-gray-300 mt-1">PCs Built</div>
            </div>
            <div class="text-center p-4 rounded-lg hover:bg-white/5 transition-colors duration-300">
                <div class="text-2xl md:text-3xl font-bold text-[#6366F1]">50+</div>
                <div class="text-xs md:text-sm text-gray-300 mt-1">Drone Flights</div>
            </div>
            <div class="text-center p-4 rounded-lg hover:bg-white/5 transition-colors duration-300">
                <div class="text-2xl md:text-3xl font-bold text-[#6366F1]">100%</div>
                <div class="text-xs md:text-sm text-gray-300 mt-1">Delivery Accuracy</div>
            </div>
            <div class="text-center p-4 rounded-lg hover:bg-white/5 transition-colors duration-300">
                <div class="text-2xl md:text-3xl font-bold text-[#6366F1]"><i class="fas fa-certificate"></i></div>
                <div class="text-xs md:text-sm text-gray-300 mt-1">NCII Certified</div>
            </div>
        </div>
    </div>
    
    <div class="absolute bottom-8 z-20">
        <a href="#skills" class="text-[#06B6D4] text-3xl animate-bounce hover:text-white transition-colors duration-300 focus:ring-2 focus:ring-[#6366F1] rounded-full p-2 focus:outline-none" aria-label="Scroll to skills section">
            <i class="fas fa-chevron-down"></i>
        </a>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-16 md:py-24 px-4 bg-gray-50 dark:bg-[#0F172A] transition-colors duration-300" aria-label="Skills">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900 dark:text-white">What I Excel At</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
            @php
                $skills = [
                    'PC Building & Customization' => 95,
                    'Hardware Troubleshooting' => 90,
                    'Drone Operation (Hubsan/DJI)' => 75,
                    'Networking & Router Setup' => 80,
                    'Flutter & Dart (Mobile)' => 75,
                    'Laravel / PHP (Web)' => 85
                ];
            @endphp

            @foreach($skills as $skill => $percentage)
            <div class="mb-4 group">
                <div class="flex justify-between mb-2">
                    <span class="font-medium text-gray-800 dark:text-gray-200">{{ $skill }}</span>
                    <span class="text-[#6366F1] font-bold transition-all duration-300 group-hover:scale-110">{{ $percentage }}%</span>
                </div>
                <div class="w-full bg-gray-300 dark:bg-[#1e293b] rounded-full h-3 overflow-hidden">
                    <div class="progress-bar bg-gradient-to-r from-[#6366F1] to-[#06B6D4] h-3 rounded-full transition-all duration-1000 ease-out" 
                         style="width: 0%" 
                         data-target="{{ $percentage }}%"
                         role="progressbar"
                         aria-valuenow="{{ $percentage }}"
                         aria-valuemin="0"
                         aria-valuemax="100">
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Experience Timeline - FIXED STRUCTURE -->
<section id="experience" class="py-16 md:py-24 px-4 bg-gray-100 dark:bg-[#111827] transition-colors duration-300" aria-label="Experience">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900 dark:text-white">Experience</h2>
        <div class="relative border-l-2 border-[#6366F1] ml-4 md:ml-6 space-y-8">
            
            <!-- Abrakeeps -->
            <div class="relative pl-8 md:pl-10 slide-in-left opacity-0 transition-all duration-700 ease-out" data-animate>
                <div class="absolute w-4 h-4 rounded-full bg-[#6366F1] -left-[9px] top-2 border-2 border-gray-100 dark:border-[#111827] transition-all duration-300"></div>
                <div class="bg-white dark:bg-[#1e293b] p-6 rounded-xl shadow-md border border-gray-200 dark:border-gray-700 hover:shadow-xl hover:border-[#6366F1] dark:hover:border-[#6366F1] transition-all duration-300">
                    <span class="text-[#06B6D4] font-bold text-sm">2025 - Present</span>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mt-1">Abrakeeps (Academic Capstone)</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">DCCP-Bangued</p>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-sm space-y-1">
                        <li>Developing a basic e-commerce system (UI & database)</li>
                        <li>Learning how delivery and tracking systems work</li>
                    </ul>
                </div>
            </div>

            <!-- Flower Delivery -->
            <div class="relative pl-8 md:pl-10 slide-in-left opacity-0 transition-all duration-700 ease-out delay-100" data-animate>
                <div class="absolute w-4 h-4 rounded-full bg-[#6366F1] -left-[9px] top-2 border-2 border-gray-100 dark:border-[#111827] transition-all duration-300"></div>
                <div class="bg-white dark:bg-[#1e293b] p-6 rounded-xl shadow-md border border-gray-200 dark:border-gray-700 hover:shadow-xl hover:border-[#6366F1] dark:hover:border-[#6366F1] transition-all duration-300">
                    <span class="text-[#06B6D4] font-bold text-sm">February 2026</span>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mt-1">Freelance Delivery Rider</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Happy Stem by Carmencita (Oval Era Mall)</p>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-sm space-y-1">
                        <li>Completed local deliveries during peak Valentine's season</li>
                        <li>Planned routes for faster and efficient drop-offs</li>
                        <li>Ensured safe handling of fragile items (flowers)</li>
                    </ul>
                </div>
            </div>

            <!-- Choey's Bakery -->
            <div class="relative pl-8 md:pl-10 slide-in-left opacity-0 transition-all duration-700 ease-out delay-200" data-animate>
                <div class="absolute w-4 h-4 rounded-full bg-[#6366F1] -left-[9px] top-2 border-2 border-gray-100 dark:border-[#111827] transition-all duration-300"></div>
                <div class="bg-white dark:bg-[#1e293b] p-6 rounded-xl shadow-md border border-gray-200 dark:border-gray-700 hover:shadow-xl hover:border-[#6366F1] dark:hover:border-[#6366F1] transition-all duration-300">
                    <span class="text-[#06B6D4] font-bold text-sm">2016 - Present</span>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mt-1">Cashier & Store Assistant</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Choey's Bakery | Bangued, Abra</p>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-sm space-y-1">
                        <li>Handled daily sales and cash transactions accurately</li>
                        <li>Assisted customers and maintained a clean, organized store</li>
                        <li>Helped with inventory and basic baking support</li>
                    </ul>
                </div>
            </div>

            <!-- Software Projects -->
            <div class="relative pl-8 md:pl-10 slide-in-left opacity-0 transition-all duration-700 ease-out delay-100" data-animate>
                <div class="absolute w-4 h-4 rounded-full bg-[#6366F1] -left-[9px] top-2 border-2 border-gray-100 dark:border-[#111827] transition-all duration-300"></div>
                <div class="bg-white dark:bg-[#1e293b] p-6 rounded-xl shadow-md border border-gray-200 dark:border-gray-700 hover:shadow-xl hover:border-[#6366F1] dark:hover:border-[#6366F1] transition-all duration-300">
                    <span class="text-[#06B6D4] font-bold text-sm">2025 - Present</span>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mt-1">Full-Stack Developer</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">Academic & Freelance Projects</p>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-sm space-y-1">
                        <li>Developed AbraKeeps e-commerce marketplace (Laravel)</li>
                        <li>Built automated POS & Record app for Bakery (Flutter/Dart)</li>
                        <li>Created Eco-Watch Solid Waste Management system</li>
                    </ul>
                </div>
            </div>

            <!-- JNT & Delivery -->
            <div class="relative pl-8 md:pl-10 slide-in-left opacity-0 transition-all duration-700 ease-out delay-200" data-animate>
                <div class="absolute w-4 h-4 rounded-full bg-[#6366F1] -left-[9px] top-2 border-2 border-gray-100 dark:border-[#111827] transition-all duration-300"></div>
                <div class="bg-white dark:bg-[#1e293b] p-6 rounded-xl shadow-md border border-gray-200 dark:border-gray-700 hover:shadow-xl hover:border-[#6366F1] dark:hover:border-[#6366F1] transition-all duration-300">
                    <span class="text-[#06B6D4] font-bold text-sm">2023 - 2026</span>
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white mt-1">Logistics & Express Delivery</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-3">JNT Express / Freelance</p>
                    <ul class="list-disc list-inside text-gray-700 dark:text-gray-300 text-sm space-y-1">
                        <li>Handled high-volume parcel route management via motorcycle</li>
                        <li>Executed time-sensitive flower deliveries</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Portfolio Gallery -->
<section id="portfolio" class="py-16 md:py-24 px-4 bg-gray-50 dark:bg-[#0F172A] transition-colors duration-300" aria-label="Portfolio">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900 dark:text-white">Portfolio & Experience</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            @php
                $portfolioItems = [
                    ['title' => 'Custom Build #1', 'img' => 'pc-build-1.jpg', 'desc' => 'High performance gaming rig assembly.', 'tags' => ['Hardware', 'Assembly']],
                    ['title' => 'Custom Build #2', 'img' => 'pc-build-2.jpg', 'desc' => 'Budget-friendly productivity workstation.', 'tags' => ['Hardware', 'Assembly']],
                    ['title' => 'Custom Build #3', 'img' => 'pc-build-3.jpg', 'desc' => 'Meow Themed pc.', 'tags' => ['Hardware', 'Assembly']],
                    ['title' => 'Bakery Record App', 'img' => 'bakery-app.jpg', 'desc' => 'Automated POS and record management system.', 'tags' => ['Flutter', 'Dart']],
                    ['title' => 'AbraKeeps Marketplace', 'img' => 'abrakeeps.jpg', 'desc' => 'Local e-commerce digital marketplace sold items.', 'tags' => ['Laravel', 'Full-Stack']],
                    ['title' => 'Drone Photography', 'img' => 'drone-shot.jpg', 'desc' => 'Aerial shot samples and video recording.', 'tags' => ['Drone', 'Videography']],
                    ['title' => 'TESDA NCII', 'img' => 'certificate.jpg', 'desc' => 'Computer Systems Servicing Certification.', 'tags' => ['Certificate', 'Education']],
                    ['title' => 'J&T Courier', 'img' => 'jnt-delivery.jpg', 'desc' => 'Logistics and parcel route management.', 'tags' => ['Logistics', 'Delivery']],
                    ['title' => 'Express Delivery', 'img' => 'flower-delivery.jpg', 'desc' => 'Time-sensitive motorcycle deliveries.', 'tags' => ['Logistics', 'Delivery']],
                ];
            @endphp

            @foreach($portfolioItems as $item)
            <div class="group relative rounded-xl overflow-hidden glass-card border border-gray-200 dark:border-gray-700 hover:border-[#6366F1] dark:hover:border-[#6366F1] transition-all duration-300 hover:shadow-xl hover:shadow-indigo-500/20 cursor-pointer focus-within:ring-2 focus-within:ring-[#6366F1]" tabindex="0">
                <div class="overflow-hidden h-56 bg-gray-200 dark:bg-gray-700">
                    <img src="{{ asset('images/' . $item['img']) }}" 
                         alt="{{ $item['title'] }}" 
                         loading="lazy"
                         onerror="this.src='https://via.placeholder.com/600x400/1e293b/06B6D4?text={{ urlencode($item['title']) }}'" 
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg text-gray-900 dark:text-white group-hover:text-[#6366F1] dark:group-hover:text-[#06B6D4] transition-colors duration-300">{{ $item['title'] }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mt-1">{{ $item['desc'] }}</p>
                    <div class="mt-3 flex gap-2 flex-wrap">
                        @foreach($item['tags'] as $tag)
                            <span class="text-xs bg-gray-200 dark:bg-[#1e293b] px-2 py-1 rounded text-[#06B6D4] font-medium">{{ $tag }}</span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!-- JavaScript -->
<script>
    // Hero Typing Effect
    const words = ["PC Builder", "Full-Stack Dev", "Drone Pilot"];
    let i = 0, j = 0, isDeleting = false;
    const textElement = document.getElementById("typed-text");
    let typeTimeout;

    function type() {
        const currentWord = words[i];
        if (isDeleting) {
            textElement.innerText = currentWord.substring(0, j - 1); j--;
        } else {
            textElement.innerText = currentWord.substring(0, j + 1); j++;
        }
        let typeSpeed = isDeleting ? 50 : 150;
        if (!isDeleting && j === currentWord.length) { 
            typeSpeed = 2000; 
            isDeleting = true; 
        } else if (isDeleting && j === 0) { 
            isDeleting = false; 
            i = (i + 1) % words.length; 
            typeSpeed = 500; 
        }
        typeTimeout = setTimeout(type, typeSpeed);
    }
    
    document.addEventListener("DOMContentLoaded", () => {
        typeTimeout = setTimeout(type, 1000);
    });

    // Check for reduced motion preference
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');

    // Intersection Observer for Skills & Timeline
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if(entry.target.classList.contains('progress-bar')) {
                    entry.target.style.width = entry.target.getAttribute('data-target');
                }
                if(entry.target.classList.contains('slide-in-left')) {
                    entry.target.classList.remove('opacity-0');
                    entry.target.classList.add('translate-x-0');
                }
                if(entry.target.classList.contains('slide-in-right')) {
                    entry.target.classList.remove('opacity-0');
                    entry.target.classList.add('translate-x-0');
                }
                // Unobserve after animation
                observer.unobserve(entry.target);
            }
        });
    }, { 
        threshold: 0.2,
        rootMargin: '0px 0px -50px 0px'
    });

    document.querySelectorAll('.progress-bar, .slide-in-left, .slide-in-right').forEach((el) => {
        observer.observe(el);
    });

    // Handle reduced motion
    if (prefersReducedMotion.matches) {
        // Immediately show all elements
        document.querySelectorAll('.progress-bar').forEach(el => {
            el.style.width = el.getAttribute('data-target');
        });
        document.querySelectorAll('.slide-in-left, .slide-in-right').forEach(el => {
            el.classList.remove('opacity-0');
        });
        // Disable typing effect
        clearTimeout(typeTimeout);
        textElement.innerText = "PC Builder";
    }
</script>

<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in {
        animation: fadeInUp 0.8s ease-out forwards;
    }
    
    .animate-fade-in-up {
        opacity: 0;
        animation: fadeInUp 0.8s ease-out forwards;
    }
    
    .slide-in-left {
        transform: translateX(-30px);
    }
    
    .slide-in-right {
        transform: translateX(30px);
    }
    
    .slide-in-left.translate-x-0,
    .slide-in-right.translate-x-0 {
        transform: translateX(0);
    }
    
    @media (prefers-reduced-motion: reduce) {
        * {
            animation-duration: 0.01ms !important;
            animation-iteration-count: 1 !important;
            transition-duration: 0.01ms !important;
            scroll-behavior: auto !important;
        }
    }
</style>
@endsection