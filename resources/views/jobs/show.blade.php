<x-layout>
    <x-slot:heading>
        Job info
    </x-slot:heading>
    <div class="job-container ml-5">
        <h2 class="text-large font-bold mt-1 mb-1">{{ $job['title'] }}</h2>
        <p class="mt-1 mb-1">
            this job pays {{ $job['salary'] }} per year.
        </p>
        @can('edit-job', $job)
            <p class="flex justify-start w-sm"><x-button href="/jobs/{{ $job->id }}/edit">Edit job</x-button></p>
        @endcan
    </div>
</x-layout>
