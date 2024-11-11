<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @Vite('resources/css/app.css' , 'resources/js/app.js')
    <title>Your Position</title>
</head>

<body  class="bg-gray-100 dark:bg-black ">

    <div class="min-h-screen px-10 py-5">
        <nav class="flex justify-between items-center shadow-md border-b border-white/20 pb-5">
            <a href="/" class="text-2xl font-semibold text-white">
                Your Position
            </a>

            <!-- Mobile Menu Toggle Button (Hidden on larger screens) -->
            <button id="menu-toggle" class="block lg:hidden text-white focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>

            <!-- Links Section (Hidden on small screens, visible on large screens) -->
            <div id="menu-links" class="hidden lg:flex space-x-6 text-gray-600 dark:text-gray-300">
                <a href="#" class="hover:text-gray-800 dark:hover:text-white">Jobs</a>
                <a href="#" class="hover:text-gray-800 dark:hover:text-white">Careers</a>
                <a href="#" class="hover:text-gray-800 dark:hover:text-white">Salaries</a>
                <a href="#" class="hover:text-gray-800 dark:hover:text-white">Companies</a>
            </div>

            <!-- Action Button (Hidden on small screens, visible on large screens) -->
            <div id="menu-button" class="hidden lg:block">
                <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                    Post a Job
                </a>
            </div>
        </nav>

        <!-- Mobile Dropdown Menu (Visible on small screens when toggled) -->
        <div id="mobile-menu" class="lg:hidden hidden  flex-col space-y-2 text-gray-600 dark:text-gray-300 bg-white dark:bg-black  pt-4 shadow-md">
            <a href="#" class="hover:text-gray-800 dark:hover:text-white">Jobs</a>
            <a href="#" class="hover:text-gray-800 dark:hover:text-white">Careers</a>
            <a href="#" class="hover:text-gray-800 dark:hover:text-white">Salaries</a>
            <a href="#" class="hover:text-gray-800 dark:hover:text-white">Companies</a>
            <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 dark:bg-blue-500 dark:hover:bg-blue-600">
                Post a Job
            </a>
        </div>

        <script>
            // Toggle the mobile menu
            document.getElementById('menu-toggle').addEventListener('click', () => {
                const mobileMenu = document.getElementById('mobile-menu');
                mobileMenu.classList.toggle('hidden');
                mobileMenu.classList.toggle('flex');
            });
        </script>


        <!-- Action Button -->
        </nav>



        <main class="mt-10 max-w-[968px] text-white">
            {{ $slot }}
        </main>
    </div>

</body>

</html>