@props(['job'])

<article class="mb-6 p-6 rounded-lg bg-white/5 border border-white/10 shadow-lg flex flex-col items-center transition-transform transform hover:scale-[1.02]">
    <h3 class="text-2xl self-start mb-3 font-semibold text-white/90">{{ $job->employer->name }}</h3>

    <p class="mb-2 text-lg font-semibold text-gray-300">{{ $job->title }}</p>
    <p class="mb-6 text-gray-400">{{ $job->schedule }} - From ${{ $job->salary }}</p>

    <div class="flex justify-between items-center mt-auto w-full">
        <div class="flex space-x-2">
           @foreach ($job->tags as $tag) 
                <x-tag :$tag size="sm" />
           @endforeach
        </div>
        <x-image width="42" />
    </div>
</article>