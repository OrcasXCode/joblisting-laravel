<x-layout>
    <x-slot name="heading">
        {{ $job['title'] }}
    </x-slot>

    <div class="max-w-2xl">
        <div class="mb-4">
            <h2 class="text-lg font-bold mb-2">Salary: {{ $job['salary'] }} per year</h2>
        </div>
        
        <div class="mt-4">
            <a href="/jobs" class="text-blue-500 hover:underline">&larr; Back to All Jobs</a>
        </div>
    </div>
</x-layout>