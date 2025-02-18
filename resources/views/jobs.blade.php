<x-layout>
    <x-slot:heading>
        Jobs listings
    </x-slot:heading>
    @foreach ($job as $job)
        <ul>
            <a href="/jobs/{{$job['id']}}">
                <li class="ml-5">
                    <strong>{{ $job['title'] }}</strong> : pays {{ $job['salary'] }} per year
                </li>
            </a>
        </ul>
    @endforeach
</x-layout>
