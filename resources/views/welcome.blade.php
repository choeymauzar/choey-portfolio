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
            <!-- Replace src with your actual image path later (e.g., /images/profile.jpg) -->
           <img src="{{ asset('images/profile.jpg') }}" 
     alt="Choey Morales Mauzar" 
     class="w-32 h-32 rounded-full border-4 border-white shadow-lg object-cover">
            <div>
                <h1 class="text-4xl font-bold">Choey Morales Mauzar</h1>
                <p class="text-xl text-blue-200 mt-2">Information Technology Student & Developer</p>
                <p class="mt-2 text-sm">Angad, Bangued, Abra</p>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-4xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <!-- Left Column: Contact & Education -->
        <div class="space-y-8 md:col-span-1">
            <section class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold border-b pb-2 mb-4">Contact</h2>
                <ul class="space-y-2 text-sm">
                    <li><strong>Email:</strong> choey@example.com</li>
                    <li><strong>GitHub:</strong> github.com/choey</li>
                    <li><strong>LinkedIn:</strong> linkedin.com/in/choey</li>
                </ul>
            </section>

            <section class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold border-b pb-2 mb-4">Education</h2>
                <div class="mb-4">
                    <h3 class="font-bold">Bachelor of Science in Information Technology (4th Year)</h3>
                    <p class="text-sm text-gray-600">Data Center College of the Philippines, Bangued</p>
                </div>
            </section>
        </div>

        <!-- Right Column: Skills & Certifications -->
        <div class="space-y-8 md:col-span-2">
            <section class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold border-b pb-2 mb-4">Technical Skills</h2>
                <div class="flex flex-wrap gap-2">
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">PHP & Laravel</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">Flutter & Dart</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">MySQL</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">HTML, CSS, JavaScript</span>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">PC Hardware & Assembly</span>
                </div>
            </section>

            <section class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold border-b pb-2 mb-4">Certifications</h2>
                <ul class="list-disc list-inside space-y-1 text-gray-700">
                    <li><strong>TESDA National Certificate II</strong> - Computer Systems Servicing</li>
                </ul>
            </section>
            
            <section class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold border-b pb-2 mb-4">Recent Projects</h2>
                <ul class="list-disc list-inside space-y-2 text-gray-700">
                    <li><strong>AbraKeeps:</strong> Local e-commerce marketplace built with Laravel.</li>
                    <li><strong>Eco-Watch:</strong> Solid waste management reporting app.</li>
                </ul>
            </section>
        </div>

    </main>
</body>
</html>