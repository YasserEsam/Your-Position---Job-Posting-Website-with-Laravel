<x-layout>
    <div class="space-y-10">

        <header class="text-center mt-12 mb-15">
            <h1 class="text-4xl font-bold mb-8 text-white/90">Let's Find Your Next Position</h1>
        
            <x-forms.form action="/search">
                <x-forms.input :label="false" name="q" placeholder="Web Developer" />
            </x-forms.form>
        </header>

        <section>

            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-6 w-full mt-6">
                @foreach ($featuredJobs as $job )
                    <x-job-card :$job />
                @endforeach
                
            </div>

        </section>

        <section>

            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 flex gap-3 flex-wrap">
                @foreach ($tags as $tag)
                    <x-tag :$tag />
                @endforeach
            </div>

        </section>

        <section>

            <x-section-heading>Recent Jobs</x-section-heading>
                @foreach ($jobs as $job )
                    <x-job-card-wide :$job />
                @endforeach
            </section>
    </div>
</x-layout>