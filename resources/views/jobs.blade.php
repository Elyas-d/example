<x-layout>
    <x-slot:heading>
        Jobs listings
    </x-slot:heading>
    <div class="space-y-4 ml-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="text-blue-600"><strong>{{ $job->employer->name }}</strong></div>
                <div><strong>{{ $job['title'] }}</strong> : pays {{ $job['salary'] }} per year</div>
            </a>
        @endforeach
        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
