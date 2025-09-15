<x-layout>
    <x-slot:heading>
        jobs page
        </x-slot:headng>

        <ul>
            @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}" class= "text-purple-500 hover:underline">
            <strong>{{$job['title']}}:</strong> Pays {{ $job['salary']}}
            </li>
            </a>
            @endforeach
        </ul>
</x-layout>