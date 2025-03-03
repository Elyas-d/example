<x-layout>
    <x-slot:heading>
        Job info
    </x-slot:heading>
    <div class="job-container ml-5">
        <h2 class="text-large font-bold ml-3">{{ $job['title'] }}</h2>
        <p class="ml-5">
            this job pays {{ $job['salary'] }} per year.
        </p>
    </div>
</x-layout>
