<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>
    <x-slot:bodyHeading>Listings</x-slot:heading>
    <ul class="list-disc list-inside flex flex-col w-max">
        @foreach ($jobs as $job)
            <li class="hover:underline transition hover:text-sky-700">
                <a href="/jobs/{{ $job['id'] }}">
                    <strong>{{ $job['title'] }}</strong>: Pays {{ $job['salary'] }} per annum.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
