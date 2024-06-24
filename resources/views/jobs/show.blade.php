<x-layout>
  <x-slot:heading>
    Job
  </x-slot:heading>
  <h2 class="font-bold text-lg text-blue-500">{{ $job['title'] }}</h2>
  <p>
  Pays {{ $job['salary'] }} per year.
  </p>
</x-layout>
