<!DOCTYPE html>
<html lang="en" class="scroll-smooth dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choey Mauzar | Developer Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Enable Tailwind dark mode via class
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        .dark .glass-card {
            background: rgba(15, 23, 42, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .cursor {
            display: inline-block; width: 3px; background-color: #06B6D4; animation: blink 1s step-end infinite;
        }
        @keyframes blink { 50% { opacity: 0; } }
        #mobile-menu { transition: transform 0.3s ease-in-out; }
        .translate-x-full { transform: translateX(100%); }
        
        /* Active nav link style */
        .nav-link.active {
            color: #6366F1 !important;
            text-decoration: underline;
            text-underline-offset: 4px;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-[#0F172A] text-gray-900 dark:text-[#F8FAFC] transition-colors duration-300 font-sans antialiased overflow-x-hidden selection:bg-[#6366F1] selection:text-white">

    <!-- Responsive Navigation -->
    <nav class="fixed w-full z-50 glass-card border-b border-gray-200 dark:border-[#1e293b] transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0 font-bold text-xl tracking-wider">
                    <span class="text-[#6366F1]">Choey</span>Mauzar
                </div>
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-6">
                    <!-- ✅ ABOUT ADDED BACK HERE (Desktop) -->
                    <a href="#about" class="nav-link hover:text-[#6366F1] transition-colors">About</a>
                    <a href="#hero" class="nav-link hover:text-[#6366F1] transition-colors">Home</a>
                    <a href="#skills" class="nav-link hover:text-[#6366F1] transition-colors">Skills</a>
                    <a href="#experience" class="nav-link hover:text-[#6366F1] transition-colors">Experience</a>
                    <a href="#portfolio" class="nav-link hover:text-[#6366F1] transition-colors">Portfolio</a>
                    
                    <!-- Theme Toggle Button -->
                    <button id="theme-toggle" class="text-gray-500 dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-full p-2 transition-colors">
                        <i id="theme-icon" class="fas fa-moon"></i>
                    </button>
                    
                    <a href="#contact" class="bg-[#6366F1] hover:bg-[#4f52c9] text-white px-5 py-2 rounded-full transition-colors">Hire Me</a>
                    
                    <!-- Profile Image Trigger (Updated to .png) -->
                    <img src="{{ asset('images/profile.png') }}" id="nav-profile-trigger" alt="Profile" class="w-10 h-10 rounded-full border-2 border-[#06B6D4] object-cover cursor-pointer hover:scale-110 transition-transform bg-white">
                </div>
                <!-- Mobile Buttons -->
                <div class="md:hidden flex items-center gap-4">
                    <button id="mobile-theme-toggle" class="text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white">
                        <i id="mobile-theme-icon" class="fas fa-moon"></i>
                    </button>
                    <img src="{{ asset('images/profile.png') }}" id="mobile-profile-trigger" alt="Profile" class="w-8 h-8 rounded-full border border-[#06B6D4] object-cover bg-white">
                    <button id="mobile-menu-btn" class="text-gray-700 dark:text-gray-300 hover:text-black dark:hover:text-white focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="fixed top-0 right-0 h-full w-64 glass-card border-l border-gray-200 dark:border-[#1e293b] transform translate-x-full z-50 p-6 pt-20 transition-transform duration-300 ease-in-out">
        <button id="close-mobile-menu" class="absolute top-4 right-4 text-2xl text-gray-600 dark:text-gray-300 hover:text-black dark:hover:text-white">
            <i class="fas fa-times"></i>
        </button>
        <div class="flex flex-col space-y-6 text-lg">
            <!-- ✅ ABOUT ADDED BACK HERE (Mobile) -->
            <a href="#about" class="hover:text-[#6366F1] transition-colors">About</a>
            <a href="#hero" class="hover:text-[#6366F1] transition-colors">Home</a>
            <a href="#skills" class="hover:text-[#6366F1] transition-colors">Skills</a>
            <a href="#experience" class="hover:text-[#6366F1] transition-colors">Experience</a>
            <a href="#portfolio" class="hover:text-[#6366F1] transition-colors">Portfolio</a>
            <a href="#contact" class="hover:text-[#6366F1] transition-colors">Contact</a>
            <a href="#contact" class="bg-[#6366F1] text-white px-5 py-3 rounded-full text-center hover:bg-[#4f52c9] transition-colors">Hire Me</a>
        </div>
    </div>

    <!-- Profile Modal -->
    <div id="profile-modal" class="fixed inset-0 z-[60] bg-black/80 hidden items-center justify-center opacity-0 transition-opacity duration-300">
        <div class="relative max-w-sm w-full mx-4">
            <button id="close-modal" class="absolute -top-10 right-0 text-white hover:text-[#06B6D4] text-3xl"><i class="fas fa-times"></i></button>
            <img src="{{ asset('images/profile.png') }}" class="w-full h-auto rounded-2xl border-4 border-[#6366F1] shadow-2xl shadow-indigo-500/50 object-cover bg-white" alt="Choey Mauzar">
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-100 dark:bg-[#0F172A] border-t border-gray-300 dark:border-[#1e293b] py-8 text-center text-gray-600 dark:text-gray-400 transition-colors duration-300">
        <h2 class="text-2xl font-bold mb-4 text-gray-900 dark:text-white">Let's Connect</h2>
        <div class="flex justify-center space-x-6 mb-4 text-2xl">
            <!-- Replace Facebook link if needed -->
            <a href="https://facebook.com" target="_blank" class="hover:text-[#6366F1] transition-colors"><i class="fab fa-facebook"></i></a>
            <a href="https://github.com/choeymauzar" target="_blank" class="hover:text-[#6366F1] transition-colors"><i class="fab fa-github"></i></a>
        </div>
        <p>&copy; 2026 Choey Mauzar. Built with ❤️ and Laravel.</p>
    </footer>

    <script>
        // Theme Toggle Logic
        const htmlClassList = document.documentElement.classList;
        const themeIcon = document.getElementById('theme-icon');
        const mobileThemeIcon = document.getElementById('mobile-theme-icon');

        function toggleTheme() {
            htmlClassList.toggle('dark');
            const isDark = htmlClassList.contains('dark');
            const iconClass = isDark ? 'fa-sun' : 'fa-moon';
            themeIcon.className = `fas ${iconClass}`;
            mobileThemeIcon.className = `fas ${iconClass}`;
        }

        document.getElementById('theme-toggle').addEventListener('click', toggleTheme);
        document.getElementById('mobile-theme-toggle').addEventListener('click', toggleTheme);

        // ScrollSpy Logic (Highlights Nav Links based on scroll)
        const sections = document.querySelectorAll('section');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                if (scrollY >= sectionTop - 150) {
                    current = section.getAttribute('id');
                }
            });
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Modal & Mobile Menu Logic
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const closeBtn = document.getElementById('close-mobile-menu');

        btn.addEventListener('click', () => menu.classList.toggle('translate-x-full'));
        closeBtn.addEventListener('click', () => menu.classList.toggle('translate-x-full'));

        // Close mobile menu when clicking a link
        document.querySelectorAll('#mobile-menu a').forEach(link => {
            link.addEventListener('click', () => {
                menu.classList.add('translate-x-full');
            });
        });

        const modal = document.getElementById('profile-modal');
        const closeModal = document.getElementById('close-modal');
        const triggers = [document.getElementById('nav-profile-trigger'), document.getElementById('mobile-profile-trigger')];

        triggers.forEach(t => t?.addEventListener('click', () => {
            modal.classList.remove('hidden'); modal.classList.add('flex');
            setTimeout(() => modal.classList.remove('opacity-0'), 10);
        }));

        const hideModal = () => {
            modal.classList.add('opacity-0');
            setTimeout(() => { modal.classList.add('hidden'); modal.classList.remove('flex'); }, 300);
        };
        closeModal.addEventListener('click', hideModal);
        modal.addEventListener('click', (e) => { if(e.target === modal) hideModal(); });
    </script>
</body>
</html>