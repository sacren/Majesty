<x-layout>
    <x-slot:heading>
        Job Postings
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="hover:text-red-500 underline">
                    <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} a years.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
