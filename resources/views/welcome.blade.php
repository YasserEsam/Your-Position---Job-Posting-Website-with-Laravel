<x-layout>
    <div class="space-y-10">
        
        <header class="text-center mt-12 mb-15">
            <h1 class="text-4xl font-bold text-white/90">Let's Find Your Next Position</h1>
            <form action="">
                <input type="text" placeholder="Search for jobs" class="mt-6 py-3 px-6 rounded-xl bg-white/5 text-white/90 placeholder:text-white/50 block w-full mx-auto max-w-xl" />
            </form>
        </header>
    
        <section>

            <x-section-heading>Top Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-6 w-full mt-6">
                <x-job-card />
                <x-job-card />
                <x-job-card />
            </div>

        </section>

        <section>

            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 flex gap-3 flex-wrap">
                <x-tag>PHP</x-tag>
                <x-tag>JavaScript</x-tag>
                <x-tag>Vue</x-tag>
                <x-tag>React</x-tag>
                <x-tag>Angular</x-tag>
                <x-tag>Node</x-tag>
                <x-tag>Dotnet</x-tag>
                <x-tag>Flutter</x-tag>
                <x-tag>Swift</x-tag>
                <x-tag>PHP</x-tag>
                <x-tag>JavaScript</x-tag>
                <x-tag>Vue</x-tag>
                <x-tag>React</x-tag>
                <x-tag>Angular</x-tag>
                <x-tag>Node</x-tag>
                <x-tag>Dotnet</x-tag>
                <x-tag>Flutter</x-tag>
                <x-tag>Swift</x-tag>
                <x-tag>PHP</x-tag>
                <x-tag>JavaScript</x-tag>
                <x-tag>Vue</x-tag>
                <x-tag>React</x-tag>
                <x-tag>Angular</x-tag>
                <x-tag>Node</x-tag>
                <x-tag>Dotnet</x-tag>
                <x-tag>Flutter</x-tag>
                <x-tag>Swift</x-tag>
                <x-tag>PHP</x-tag>
                <x-tag>JavaScript</x-tag>
                <x-tag>Vue</x-tag>
                <x-tag>React</x-tag>
                <x-tag>Angular</x-tag>
                <x-tag>Node</x-tag>
                <x-tag>Dotnet</x-tag>
                <x-tag>Flutter</x-tag>
                <x-tag>Swift</x-tag>
            </div>

        </section>

        <section>

            <x-section-heading>Recent Jobs</x-section-heading>
            <x-job-card-wide />
            <x-job-card-wide />
            <x-job-card-wide />
            <x-job-card-wide />
            <x-job-card-wide />
            <x-job-card-wide />

        </section>
    </div>
</x-layout>