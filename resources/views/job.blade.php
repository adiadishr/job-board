<x-layout>
    <x-slot:heading>Job Page</x-slot:heading>
    <x-slot:bodyHeading>{{ $job['title'] }}</x-slot:bodyHeading>
    <x-slot:backBtn>
        <a href="/jobs"
            class="bg-gray-700 hover:bg-gray-600 text-white rounded-md px-3 py-2 text-sm font-medium transition">
            Back to Jobs
        </a>
    </x-slot:backBtn>
    <p>
        The salary amount of this job is {{ $job['salary'] }}.
    </p>
</x-layout>
