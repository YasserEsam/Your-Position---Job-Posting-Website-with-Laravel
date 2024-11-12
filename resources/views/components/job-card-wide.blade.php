@props(['job'])


<article class="mb-6 mt-6 p-6 rounded-lg bg-white/5 border border-white/10 shadow-lg flex flex-col lg:flex-row items-center justify-center lg:justify-start transition-transform transform hover:scale-[1.02] w-full md:w-full lg:w-full">
    <x-image width="92" class="w-full lg:w-32 h-auto mb-4 lg:mb-0 rounded-lg mx-auto" :employer="$job->employer"/>

    <div class="lg:ml-6 w-full lg:w-2/3 flex flex-col lg:flex-row justify-center lg:justify-between flex-1 items-center lg:items-start text-center lg:text-left">
        <div class="mb-4 lg:mb-0">
            <h3 class=" mt-2 text-2xl font-semibold text-white/90">{{ $job->employer->name }}</h3>
            <p class="mb-2 text-lg font-semibold text-gray-300">{{ $job->title }}</p>
            <p class="mt-2 text-gray-400">{{ $job->schedule }} - From ${{ $job->salary }}</p>
        </div>

        <div class="flex flex-wrap gap-2  justify-center lg:justify-start">
            @foreach ($job->tags as $tag) 
                <x-tag :$tag/>
           @endforeach
        </div>
    </div>
</article>