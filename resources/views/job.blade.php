<x-layout>
    <x-slot:heading>
        Job info
    </x-slot:heading>
    <div class="job-container ml-5">
        <h2>{{ $job['title'] }}</h2>
        <p>
            this job pays {{ $job['salary'] }} per year.
        </p>
    </div>
</x-layout>
