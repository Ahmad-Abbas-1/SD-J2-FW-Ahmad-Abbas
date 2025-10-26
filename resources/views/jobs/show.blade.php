<x-layout>
    <x-slot:heading>
        job page
        </x-slot:headng>

        <ul>
<h2 class="font-bold text-lg">{{ $job->title }}</h2>
<p>
    this job pays {{ $job->salary }} per day
</p>

<p>
    <x-button href="/jobs/{{ $job->id }}/edit"> edit job</x-button>
</p>
</x-layout>