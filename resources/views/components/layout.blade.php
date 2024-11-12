    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @Vite('resources/css/app.css', 'resources/js/app.js')
        <title>Your Position Website</title>
    </head>

    <body class="bg-gray-100 dark:bg-black pb-20">
        <!-- Animated Background and Grid Overlay -->
        <div class="animated-bg"></div>
        <div class="grid-overlay"></div>

        <div class="min-h-screen px-10 py-5">
            <nav class="container mx-auto flex justify-between items-center shadow-md border-b border-white/20 pb-5">
                <a href="/" class="text-2xl font-semibold text-white">
                    Your Position
                </a>

                <button id="menu-toggle" class="block lg:hidden text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>

                <div id="menu-links" class="hidden lg:flex space-x-6 text-gray-600 dark:text-gray-300">
                    <a href="#" class="hover:text-gray-800 dark:hover:text-white">Jobs</a>
                    <a href="#" class="hover:text-gray-800 dark:hover:text-white">Careers</a>
                    <a href="#" class="hover:text-gray-800 dark:hover:text-white">Salaries</a>
                    <a href="#" class="hover:text-gray-800 dark:hover:text-white">Companies</a>
                </div>

                <div id="menu-button" class="hidden lg:block">
                @auth
                <a href="/jobs/create" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Post a Job
                </a>

                @endauth
                
                @guest
                <a href="/register" class="px-4 mr-2 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Register
                </a>
                <a href="/login" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Login
                </a>
                @endguest
                </div>
            </nav>

            <div id="mobile-menu" class="lg:hidden hidden flex-col space-y-2 text-gray-600 dark:text-gray-300 bg-white dark:bg-black pt-4 shadow-md">
                <a href="#" class="hover:text-gray-800 dark:hover:text-white">Jobs</a>
                <a href="#" class="hover:text-gray-800 dark:hover:text-white">Careers</a>
                <a href="#" class="hover:text-gray-800 dark:hover:text-white">Salaries</a>
                <a href="#" class="hover:text-gray-800 dark:hover:text-white">Companies</a>
                @auth
                <a href="/jobs/create" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Post a Job
                </a>

                @endauth
                
                @guest
                <a href="/register" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Register
                </a>
                <a href="/login" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Login
                </a>
                @endguest
            </div>

            <script>
                // Toggle the mobile menu
                document.getElementById('menu-toggle').addEventListener('click', () => {
                    const mobileMenu = document.getElementById('mobile-menu');
                    mobileMenu.classList.toggle('hidden');
                    mobileMenu.classList.toggle('flex');
                });
            </script>

            <main class="mt-10 max-w-[1200px] text-white mx-auto">
                {{ $slot }}
            </main>
        </div>
    </body>

    </html>