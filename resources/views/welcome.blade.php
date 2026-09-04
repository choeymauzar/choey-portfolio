<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section id="hero" class="relative h-screen flex items-center justify-center overflow-hidden">
    <!-- Video Background -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-[#0F172A]/80 z-10"></div> <!-- Overlay -->
       <!-- Replaced video with a reliable static background image -->
<img src="{{ asset('images/drone-shot.jpg') }}" class="w-full h-full object-cover opacity-50" aria-hidden="true" alt="Background">
    </div>

    <div class="relative z-20 text-center px-4">
        <h1 class="text-5xl md:text-7xl font-bold mb-4">Choey Mauzar</h1>
        <div class="text-xl md:text-3xl text-[#06B6D4] font-light h-10">
            <span id="typed-text"></span><span class="cursor">&nbsp;</span>
        </div>
        
        <!-- Hero Stats -->
        <div class="mt-12 grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-8 max-w-4xl mx-auto fade-in">
            <div class="glass-card p-4 rounded-xl text-center">
                <div class="text-2xl md:text-3xl font-bold text-[#6366F1]">5+</div>
                <div class="text-xs md:text-sm text-gray-300">PCs Built</div>
            </div>
            <div class="glass-card p-4 rounded-xl text-center">
                <div class="text-2xl md:text-3xl font-bold text-[#6366F1]">50+</div>
                <div class="text-xs md:text-sm text-gray-300">Drone Flights</div>
            </div>
            <div class="glass-card p-4 rounded-xl text-center">
                <div class="text-2xl md:text-3xl font-bold text-[#6366F1]">100%</div>
                <div class="text-xs md:text-sm text-gray-300">Delivery Accuracy</div>
            </div>
            <div class="glass-card p-4 rounded-xl text-center">
                <div class="text-2xl md:text-3xl font-bold text-[#6366F1]"><i class="fas fa-award"></i></div>
                <div class="text-xs md:text-sm text-gray-300">NCII Certified</div>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choey Morales Mauzar | Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800 font-sans antialiased">
    
    <!-- Header Section -->
    <header class="bg-blue-900 text-white py-12">
        <div class="max-w-4xl mx-auto px-4 flex flex-col md:flex-row items-center gap-6">
            <!-- Replace src with your actual image path later (e.g., /images/profile.png) -->
           <img src="{{ asset('images/profile.png') }}" 
     alt="Choey Morales Mauzar" 
     class="w-32 h-32 rounded-full border-4 border-white shadow-lg object-cover">
            <div>
                <h1 class="text-4xl font-bold">Choey Morales Mauzar</h1>
                <p class="text-xl text-blue-200 mt-2">Information Technology Student & Developer</p>
                <p class="mt-2 text-sm">Angad, Bangued, Abra</p>
>>>>>>> 23bf58eebbbf7cfb53a51c6c7d3b200ad360be3f
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-20 px-4 max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 items-center fade-in">
        <div class="relative group">
            <div class="absolute -inset-1 bg-gradient-to-r from-[#6366F1] to-[#06B6D4] rounded-2xl blur opacity-25 group-hover:opacity-50 transition duration-1000"></div>
            <img src="{{ asset('images/profile.png') }}" alt="Choey Mauzar" class="relative rounded-2xl w-full max-w-md mx-auto object-cover glass-card p-2">
            <div class="absolute -bottom-6 -right-6 glass-card p-4 rounded-full border-[#06B6D4] border flex items-center justify-center shadow-lg shadow-cyan-500/20">
                <i class="fas fa-certificate text-3xl text-[#06B6D4]" title="TESDA NCII"></i>
            </div>
        </div>
        <div>
            <h2 class="text-3xl md:text-4xl font-bold mb-6 border-b-2 border-[#6366F1] inline-block pb-2">About Me</h2>
            <p class="text-gray-300 mb-4 leading-relaxed">
                I am an Information Technology student and freelance tech enthusiast based in Abra. From assembling custom high-performance PCs and executing precise drone flights to handling logistics and software development, I blend technical precision with practical execution.
            </p>
            <p class="text-gray-300 mb-8 leading-relaxed">
                Holding a TESDA National Certificate II in Computer Systems Servicing, I pride myself on delivering reliable hardware solutions, robust software applications, and efficient services across various disciplines.
            </p>
            <a href="#" class="inline-block bg-[#6366F1] hover:bg-[#4f52c9] text-white font-bold py-3 px-8 rounded-full transition-transform hover:-translate-y-1 shadow-lg shadow-indigo-500/30">
                <i class="fas fa-download mr-2"></i> Download CV
            </a>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section id="skills" class="py-20 bg-black/20">
    <div class="max-w-6xl mx-auto px-4 fade-in">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Technical Arsenal</h2>
        <div class="grid md:grid-cols-2 gap-8">
            @php
                $skills = [
                    'PC Building' => 95,
                    'OS Installation' => 90,
                    'Hardware Troubleshooting' => 90,
                    'Networking' => 80,
                    'Drone Operation' => 75,
                    'Laravel/PHP' => 65
                ];
            @endphp

            @foreach($skills as $skill => $percentage)
            <div class="glass-card p-6 rounded-xl">
                <div class="flex justify-between mb-2">
                    <span class="font-medium text-gray-200">{{ $skill }}</span>
                    <span class="text-[#06B6D4]">{{ $percentage }}%</span>
                </div>
                <div class="w-full bg-gray-700 rounded-full h-2.5">
                    <div class="bg-gradient-to-r from-[#6366F1] to-[#06B6D4] h-2.5 rounded-full" style="width: {{ $percentage }}%"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-20 px-4 max-w-6xl mx-auto fade-in">
    <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">What I Do</h2>
    <div class="grid md:grid-cols-3 gap-6">
        <div class="glass-card p-8 rounded-2xl hover:-translate-y-2 transition-transform duration-300 text-center group border-t-4 border-t-transparent hover:border-t-[#6366F1]">
            <i class="fas fa-microchip text-5xl text-[#6366F1] mb-6 group-hover:scale-110 transition-transform"></i>
            <h3 class="text-xl font-bold mb-4">PC Building</h3>
            <p class="text-gray-400 text-sm">Custom rig assembly, component sourcing, and performance benchmarking tailored to your needs.</p>
        </div>
        <div class="glass-card p-8 rounded-2xl hover:-translate-y-2 transition-transform duration-300 text-center group border-t-4 border-t-transparent hover:border-t-[#06B6D4]">
            <i class="fas fa-tools text-5xl text-[#06B6D4] mb-6 group-hover:scale-110 transition-transform"></i>
            <h3 class="text-xl font-bold mb-4">Tech Support</h3>
            <p class="text-gray-400 text-sm">Hardware troubleshooting, OS installation, network configuration, and system maintenance.</p>
        </div>
        <div class="glass-card p-8 rounded-2xl hover:-translate-y-2 transition-transform duration-300 text-center group border-t-4 border-t-transparent hover:border-t-[#6366F1]">
            <i class="fas fa-drone text-5xl text-[#6366F1] mb-6 group-hover:scale-110 transition-transform"></i>
            <h3 class="text-xl font-bold mb-4">Drone Services</h3>
            <p class="text-gray-400 text-sm">Aerial photography, videography, and safe operational flight execution.</p>
        </div>
    </div>
</section>

<!-- Experience Timeline -->
<section id="experience" class="py-20 bg-black/20">
    <div class="max-w-4xl mx-auto px-4 fade-in">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Experience & Milestones</h2>
        <div class="relative border-l-2 border-[#6366F1] ml-4 md:ml-0 md:left-1/2 md:-translate-x-1/2 space-y-12">
            
            <!-- PC Builder -->
            <div class="relative flex flex-col md:flex-row items-center justify-between w-full">
                <div class="absolute w-4 h-4 rounded-full bg-[#06B6D4] -left-[9px] md:left-1/2 md:-translate-x-1/2 border-4 border-[#0F172A]"></div>
                <div class="ml-6 md:ml-0 md:w-5/12 glass-card p-6 rounded-xl md:text-right">
                    <span class="text-xs font-bold text-[#6366F1] tracking-wider uppercase mb-2 block">2022 - Present</span>
                    <h3 class="text-lg font-bold">PC Builder Freelancer</h3>
                    <p class="text-sm text-gray-400 mt-2">Sourcing parts, assembling custom desktops, and optimizing hardware performance for local clients.</p>
                </div>
                <div class="hidden md:block md:w-5/12"></div>
            </div>

<<<<<<< HEAD
            <!-- JNT Delivery -->
            <div class="relative flex flex-col md:flex-row items-center justify-between w-full">
                <div class="absolute w-4 h-4 rounded-full bg-[#06B6D4] -left-[9px] md:left-1/2 md:-translate-x-1/2 border-4 border-[#0F172A]"></div>
                <div class="hidden md:block md:w-5/12"></div>
                <div class="ml-6 md:ml-0 md:w-5/12 glass-card p-6 rounded-xl">
                    <span class="text-xs font-bold text-[#6366F1] tracking-wider uppercase mb-2 block">2023</span>
                    <h3 class="text-lg font-bold">J&T Express Courier</h3>
                    <p class="text-sm text-gray-400 mt-2">Managed high-volume parcel logistics, routing, and mobile app recordkeeping via motorcycle.</p>
                </div>
            </div>

            <!-- Flower Delivery -->
            <div class="relative flex flex-col md:flex-row items-center justify-between w-full">
                <div class="absolute w-4 h-4 rounded-full bg-[#06B6D4] -left-[9px] md:left-1/2 md:-translate-x-1/2 border-4 border-[#0F172A]"></div>
                <div class="ml-6 md:ml-0 md:w-5/12 glass-card p-6 rounded-xl md:text-right">
                    <span class="text-xs font-bold text-[#6366F1] tracking-wider uppercase mb-2 block">2023</span>
                    <h3 class="text-lg font-bold">Flower Shop Delivery</h3>
                    <p class="text-sm text-gray-400 mt-2">Executed time-sensitive motorcycle deliveries ensuring product integrity and route efficiency.</p>
                </div>
                <div class="hidden md:block md:w-5/12"></div>
            </div>

            <!-- TESDA -->
            <div class="relative flex flex-col md:flex-row items-center justify-between w-full">
                <div class="absolute w-4 h-4 rounded-full bg-[#06B6D4] -left-[9px] md:left-1/2 md:-translate-x-1/2 border-4 border-[#0F172A]"></div>
                <div class="hidden md:block md:w-5/12"></div>
                <div class="ml-6 md:ml-0 md:w-5/12 glass-card p-6 rounded-xl">
                    <h3 class="text-lg font-bold">TESDA NCII Certification</h3>
                    <p class="text-sm text-gray-400 mt-2">Computer Systems Servicing - officially certified in installing, configuring, and maintaining computer networks and systems.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio" class="py-20 px-4 max-w-6xl mx-auto fade-in">
    <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Recent Builds & Projects</h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 1; $i <= 6; $i++)
        <div class="relative group rounded-xl overflow-hidden glass-card cursor-pointer">
            <img src="https://via.placeholder.com/600x400/1e293b/06B6D4?text=Build+0{{ $i }}" alt="Project {{ $i }}" class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500">
            <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center flex-col p-4">
                <h4 class="font-bold text-lg text-white mb-2">Custom PC Build</h4>
                <span class="text-sm text-[#06B6D4] border border-[#06B6D4] px-3 py-1 rounded-full hover:bg-[#06B6D4] hover:text-white transition-colors">View Details</span>
            </div>
        </div>
        @endfor
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-black/30">
    <div class="max-w-3xl mx-auto px-4 text-center fade-in">
        <h2 class="text-3xl md:text-4xl font-bold mb-6">Let's Connect</h2>
        <p class="text-gray-400 mb-8">Whether you need a custom PC rig, drone services, or technical support, my inbox is always open.</p>
        <div class="flex justify-center space-x-6 mb-8">
            <a href="#" class="w-12 h-12 rounded-full glass-card flex items-center justify-center text-xl hover:bg-[#6366F1] hover:text-white transition-all transform hover:-translate-y-1"><i class="fab fa-github"></i></a>
            <a href="#" class="w-12 h-12 rounded-full glass-card flex items-center justify-center text-xl hover:bg-[#06B6D4] hover:text-white transition-all transform hover:-translate-y-1"><i class="fab fa-linkedin-in"></i></a>
            <a href="mailto:choey@example.com" class="w-12 h-12 rounded-full glass-card flex items-center justify-center text-xl hover:bg-[#6366F1] hover:text-white transition-all transform hover:-translate-y-1"><i class="fas fa-envelope"></i></a>
        </div>
        <a href="mailto:choey@example.com" class="inline-block bg-transparent border-2 border-[#06B6D4] text-[#06B6D4] hover:bg-[#06B6D4] hover:text-white font-bold py-3 px-10 rounded-full transition-all">Say Hello</a>
    </div>
</section>

<!-- JavaScript for Animations -->
<script>
    // Typing Effect
    const words = ["PC Builder", "Drone Pilot", "Freelancer"];
    let i = 0, j = 0;
    let isDeleting = false;
    let isWaiting = false;
    const textElement = document.getElementById("typed-text");

    function type() {
        const currentWord = words[i];
        
        if (isDeleting) {
            textElement.innerText = currentWord.substring(0, j - 1);
            j--;
        } else {
            textElement.innerText = currentWord.substring(0, j + 1);
            j++;
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
        setTimeout(type, typeSpeed);
    }
    document.addEventListener("DOMContentLoaded", () => setTimeout(type, 1000));

    // Intersection Observer for Fade-ins
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('appear');
            }
        });
    }, { threshold: 0.1 });

    document.querySelectorAll('.fade-in').forEach((el) => observer.observe(el));
</script>
@endsection
=======
    </main>
</body>
</html>
>>>>>>> 23bf58eebbbf7cfb53a51c6c7d3b200ad360be3f
