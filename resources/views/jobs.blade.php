<x-layout>
  <x-slot:heading>
    Job Postings
  </x-slot:heading>
  <div class="space-y-4">
    @foreach ($jobs as $job)
    <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-red-200">
      <div class="font-bold text-blue-500 text-sm">
        {{ $job->employer->name }}
      </div>
      <div>
        <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} a years.
      </div>
    </a>
    @endforeach
  </div>
</x-layout>
