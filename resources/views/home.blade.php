@extends('layouts.app')

@section('content')
<!-- Hero Section (Prompt 2) -->
<section id="hero" class="relative h-screen flex flex-col items-center justify-center overflow-hidden">
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-b from-[#0F172A]/90 to-[#0F172A] z-10"></div>
        <video autoplay loop muted playsinline class="w-full h-full object-cover">
            <source src="{{ asset('videos/drone-placeholder.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="relative z-20 text-center px-4 mt-16">
        <h1 class="text-5xl md:text-7xl font-bold mb-4">
            <span class="text-[#6366F1]">Choey</span> <span class="text-[#06B6D4]">Mauzar</span>
        </h1>
        <div class="text-xl md:text-2xl text-gray-300 font-light h-8 mb-8">
            <span id="typed-text"></span><span class="cursor">&nbsp;</span>
        </div>
        
        <div class="flex justify-center gap-4 mb-16">
            <a href="#portfolio" class="bg-[#6366F1] hover:bg-[#4f52c9] text-white px-8 py-3 rounded-full transition-colors font-bold shadow-lg shadow-indigo-500/30">View My Work</a>
            <a href="#contact" class="border-2 border-[#06B6D4] text-[#06B6D4] hover:bg-[#06B6D4] hover:text-white px-8 py-3 rounded-full transition-colors font-bold">Contact Me</a>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto w-full">
            <div class="text-center p-4">
                <div class="text-3xl font-bold text-[#6366F1]">5+</div>
                <div class="text-sm text-gray-400">PCs Built</div>
            </div>
            <div class="text-center p-4">
                <div class="text-3xl font-bold text-[#6366F1]">10+</div>
                <div class="text-sm text-gray-400">Drone Flights</div>
            </div>
            <div class="text-center p-4">
                <div class="text-3xl font-bold text-[#6366F1]">100%</div>
                <div class="text-sm text-gray-400">Delivery Accuracy</div>
            </div>
            <div class="text-center p-4">
                <div class="text-3xl font-bold text-[#6366F1]"><i class="fas fa-certificate"></i></div>
                <div class="text-sm text-gray-400">NCII Certified</div>
            </div>
        </div>
    </div>
    
    <div class="absolute bottom-8 z-20 animate-bounce">
        <a href="#skills" class="text-[#06B6D4] text-3xl"><i class="fas fa-chevron-down"></i></a>
    </div>
</section>

<!-- Skills Section (Prompt 4) -->
<section id="skills" class="py-24 px-4 bg-[#0F172A]">
    <div class="max-w-5xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">What I Excel At</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @php
                $skills = [
                    'PC Building & Customization' => 95,
                    'Hardware Troubleshooting' => 90,
                    'Drone Operation (DJI)' => 75,
                    'Networking & Router Setup' => 80,
                    'OS Installation & Dual Boot' => 90,
                    'Laravel / PHP Development' => 65
                ];
            @endphp

            @foreach($skills as $skill => $percentage)
            <div class="mb-4">
                <div class="flex justify-between mb-2">
                    <span class="font-medium">{{ $skill }}</span>
                    <span class="text-[#6366F1] font-bold">{{ $percentage }}%</span>
                </div>
                <div class="w-full bg-[#1e293b] rounded-full h-3">
                    <div class="progress-bar bg-gradient-to-r from-[#6366F1] to-[#06B6D4] h-3 rounded-full transition-all duration-1000 ease-out" 
                         style="width: 0%" data-target="{{ $percentage }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Experience Timeline (Prompt 3) -->
<section id="experience" class="py-24 px-4 bg-[#111827]">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Experience</h2>
        <div class="relative border-l-2 border-[#6366F1] ml-4 md:ml-6 space-y-8">
            
            <!-- PC Builder -->
            <div class="relative pl-8 md:pl-10 slide-in opacity-0 translate-x-[-50px] transition-all duration-700">
                <div class="absolute w-4 h-4 rounded-full bg-[#6366F1] -left-[9px] top-2 border-2 border-[#111827]"></div>
                <div class="bg-[#1e293b] p-6 rounded-xl hover:shadow-lg hover:shadow-indigo-500/20 transition-all">
                    <span class="text-[#06B6D4] font-bold text-sm">2022 - Present</span>
                    <h3 class="text-xl font-bold text-white mt-1">PC Builder & Freelancer</h3>
                    <p class="text-sm text-gray-400 mb-3">Self-Employed</p>
                    <ul class="list-disc list-inside text-gray-300 text-sm space-y-1">
                        <li>Built 5+ custom PCs</li>
                        <li>Sold PC parts and devices</li>
                        <li>Troubleshooting services</li>
                    </ul>
                </div>
            </div>

            <!-- JNT -->
            <div class="relative pl-8 md:pl-10 slide-in opacity-0 translate-x-[-50px] transition-all duration-700 delay-100">
                <div class="absolute w-4 h-4 rounded-full bg-[#6366F1] -left-[9px] top-2 border-2 border-[#111827]"></div>
                <div class="bg-[#1e293b] p-6 rounded-xl hover:shadow-lg hover:shadow-indigo-500/20 transition-all">
                    <span class="text-[#06B6D4] font-bold text-sm">2023 (On-Call)</span>
                    <h3 class="text-xl font-bold text-white mt-1">JNT Delivery Driver</h3>
                    <p class="text-sm text-gray-400 mb-3">JNT Express</p>
                    <ul class="list-disc list-inside text-gray-300 text-sm space-y-1">
                        <li>100% delivery accuracy</li>
                        <li>Learned new routes</li>
                        <li>Customer interactions</li>
                    </ul>
                </div>
            </div>

            <!-- Flower Shop -->
            <div class="relative pl-8 md:pl-10 slide-in opacity-0 translate-x-[-50px] transition-all duration-700 delay-200">
                <div class="absolute w-4 h-4 rounded-full bg-[#6366F1] -left-[9px] top-2 border-2 border-[#111827]"></div>
                <div class="bg-[#1e293b] p-6 rounded-xl hover:shadow-lg hover:shadow-indigo-500/20 transition-all">
                    <span class="text-[#06B6D4] font-bold text-sm">2023 (Valentine's)</span>
                    <h3 class="text-xl font-bold text-white mt-1">Flower Shop Delivery</h3>
                    <p class="text-sm text-gray-400 mb-3">Seasonal</p>
                    <ul class="list-disc list-inside text-gray-300 text-sm space-y-1">
                        <li>10 deliveries completed</li>
                        <li>Careful handling</li>
                        <li>Customer service</li>
                    </ul>
                </div>
            </div>

            <!-- TESDA -->
            <div class="relative pl-8 md:pl-10 slide-in opacity-0 translate-x-[-50px] transition-all duration-700 delay-300">
                <div class="absolute w-4 h-4 rounded-full bg-[#6366F1] -left-[9px] top-2 border-2 border-[#111827]"></div>
                <div class="bg-[#1e293b] p-6 rounded-xl hover:shadow-lg hover:shadow-indigo-500/20 transition-all">
                    <span class="text-[#06B6D4] font-bold text-sm">2023</span>
                    <h3 class="text-xl font-bold text-white mt-1">TESDA NCII Certification</h3>
                    <p class="text-sm text-gray-400 mb-3">Computer Systems Servicing</p>
                    <ul class="list-disc list-inside text-gray-300 text-sm space-y-1">
                        <li>NCII Certified</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Gallery (Prompt 5) -->
<section id="portfolio" class="py-24 px-4 bg-[#0F172A]">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Portfolio Gallery</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @for ($i = 1; $i <= 6; $i++)
            <div class="group relative rounded-xl overflow-hidden glass-card border border-[#1e293b] hover:border-[#6366F1] transition-all duration-300 hover:shadow-lg hover:shadow-indigo-500/20 cursor-pointer">
                <div class="overflow-hidden h-56">
                    <img src="https://via.placeholder.com/600x400/1e293b/06B6D4?text=PC+Build+0{{ $i }}" alt="Project {{ $i }}" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="p-4">
                    <h3 class="font-bold text-lg">Custom Build #{{ $i }}</h3>
                    <p class="text-gray-400 text-sm mt-1">High performance rig assembly.</p>
                    <div class="mt-3 flex gap-2">
                        <span class="text-xs bg-[#1e293b] px-2 py-1 rounded text-[#06B6D4]">Hardware</span>
                        <span class="text-xs bg-[#1e293b] px-2 py-1 rounded text-[#6366F1]">Assembly</span>
                    </div>
                </div>
                <!-- Hover Overlay -->
                <div class="absolute inset-0 bg-[#0F172A]/80 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    <span class="border-2 border-[#6366F1] text-white px-6 py-2 rounded-full font-bold hover:bg-[#6366F1] transition-colors">View Details</span>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- JavaScript for specific animations requested -->
<script>
    // Hero Typing Effect
    const words = ["PC Builder", "Drone Pilot", "Freelancer"];
    let i = 0, j = 0, isDeleting = false;
    const textElement = document.getElementById("typed-text");

    function type() {
        const currentWord = words[i];
        if (isDeleting) {
            textElement.innerText = currentWord.substring(0, j - 1); j--;
        } else {
            textElement.innerText = currentWord.substring(0, j + 1); j++;
        }
        let typeSpeed = isDeleting ? 50 : 150;
        if (!isDeleting && j === currentWord.length) { typeSpeed = 2000; isDeleting = true; } 
        else if (isDeleting && j === 0) { isDeleting = false; i = (i + 1) % words.length; typeSpeed = 500; }
        setTimeout(type, typeSpeed);
    }
    document.addEventListener("DOMContentLoaded", () => setTimeout(type, 1000));

    // Intersection Observer for Skills Bar & Timeline slide-in
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if(entry.target.classList.contains('progress-bar')) {
                    entry.target.style.width = entry.target.getAttribute('data-target');
                }
                if(entry.target.classList.contains('slide-in')) {
                    entry.target.classList.remove('opacity-0', 'translate-x-[-50px]');
                }
            }
        });
    }, { threshold: 0.2 });

    document.querySelectorAll('.progress-bar, .slide-in').forEach((el) => observer.observe(el));
</script>
@endsection