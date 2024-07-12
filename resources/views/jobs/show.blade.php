<x-layout>
  <x-slot:title>
    Job Page
  </x-slot:title>
  <x-slot:heading>
    Job
  </x-slot:heading>
  <h2 class="font-bold text-lg text-blue-500">{{ $job->title }}</h2>
  <p>
  Pays {{ $job->salary }} per year.
  </p>
  @can('edit-job', $job)
  <div class="mt-5">
    <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
  </div>
  @endcan
</x-layout>
