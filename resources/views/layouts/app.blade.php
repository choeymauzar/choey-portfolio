<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choey Mauzar | Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .glass-card {
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .cursor {
            display: inline-block;
            width: 3px;
            background-color: #06B6D4;
            animation: blink 1s step-end infinite;
        }
        @keyframes blink { 50% { opacity: 0; } }
        /* Mobile menu transition */
        #mobile-menu {
            transition: transform 0.3s ease-in-out;
        }
        .translate-x-full { transform: translateX(100%); }
        .translate-x-0 { transform: translateX(0); }
    </style>
</head>
<body class="bg-[#0F172A] text-[#F8FAFC] font-sans antialiased overflow-x-hidden selection:bg-[#6366F1] selection:text-white">

    <!-- Responsive Navigation (Prompt 6) -->
    <nav class="fixed w-full z-50 glass-card border-b border-[#1e293b]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0 font-bold text-xl tracking-wider">
                    <span class="text-[#6366F1]">Choey</span>Mauzar
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#hero" class="hover:text-[#6366F1] transition-colors hover:underline underline-offset-4">Home</a>
                    <a href="#skills" class="hover:text-[#6366F1] transition-colors hover:underline underline-offset-4">Skills</a>
                    <a href="#experience" class="hover:text-[#6366F1] transition-colors hover:underline underline-offset-4">Experience</a>
                    <a href="#portfolio" class="hover:text-[#6366F1] transition-colors hover:underline underline-offset-4">Portfolio</a>
                    <a href="#contact" class="hover:text-[#6366F1] transition-colors hover:underline underline-offset-4">Contact</a>
                    <a href="#contact" class="bg-[#6366F1] hover:bg-[#4f52c9] text-white px-5 py-2 rounded-full transition-colors">Hire Me</a>
                </div>
                <!-- Mobile Hamburger Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-white focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu Slider -->
    <div id="mobile-menu" class="fixed inset-y-0 right-0 w-64 glass-card z-40 translate-x-full md:hidden flex flex-col pt-20 px-6 space-y-6">
        <a href="#hero" class="text-lg hover:text-[#6366F1]">Home</a>
        <a href="#skills" class="text-lg hover:text-[#6366F1]">Skills</a>
        <a href="#experience" class="text-lg hover:text-[#6366F1]">Experience</a>
        <a href="#portfolio" class="text-lg hover:text-[#6366F1]">Portfolio</a>
        <a href="#contact" class="text-lg hover:text-[#6366F1]">Contact</a>
    </div>

    <main>
        @yield('content')
    </main>

    <!-- Footer (Prompt 7) -->
    <footer class="bg-[#0F172A] border-t border-[#1e293b] py-8 text-center text-gray-400">
        <div class="flex justify-center space-x-6 mb-4 text-xl">
            <a href="#" class="hover:text-[#6366F1] transition-colors"><i class="fab fa-facebook"></i></a>
            <a href="#" class="hover:text-[#6366F1] transition-colors"><i class="fab fa-github"></i></a>
            <a href="#" class="hover:text-[#6366F1] transition-colors"><i class="fab fa-youtube"></i></a>
            <a href="#" class="hover:text-[#6366F1] transition-colors"><i class="fab fa-tiktok"></i></a>
        </div>
        <p>&copy; 2026 Choey Mauzar. Built with ❤️ and Laravel.</p>
    </footer>

    <script>
        // Mobile Menu Toggle Logic
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('translate-x-full');
            menu.classList.toggle('translate-x-0');
        });
    </script>
</body>
</html>