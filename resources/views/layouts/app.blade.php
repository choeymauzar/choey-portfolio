<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choey Mauzar | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS for Glassmorphism & Animations */
        .glass-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }
        .fade-in.appear {
            opacity: 1;
            transform: translateY(0);
        }
        /* Typing Cursor */
        .cursor {
            display: inline-block;
            width: 3px;
            background-color: #06B6D4;
            animation: blink 1s step-end infinite;
        }
        @keyframes blink { 50% { opacity: 0; } }
    </style>
</head>
<body class="bg-[#0F172A] text-[#F8FAFC] font-sans antialiased overflow-x-hidden selection:bg-[#6366F1] selection:text-white">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-card transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex-shrink-0 font-bold text-xl tracking-wider">
                    <span class="text-[#06B6D4]">C</span>M
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#hero" class="hover:text-[#06B6D4] transition-colors">Home</a>
                        <a href="#about" class="hover:text-[#06B6D4] transition-colors">About</a>
                        <a href="#skills" class="hover:text-[#06B6D4] transition-colors">Skills</a>
                        <a href="#experience" class="hover:text-[#06B6D4] transition-colors">Experience</a>
                        <a href="#portfolio" class="hover:text-[#06B6D4] transition-colors">Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-[#0F172A] border-t border-white/10 py-8 text-center text-sm text-gray-400">
        <p>&copy; {{ date('Y') }} Choey Mauzar. Built with Laravel & Tailwind.</p>
    </footer>

</body>
</html>