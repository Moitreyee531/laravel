<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Teacher') }}
        </h2>

        <div class="pt-2">
            <a href="{{ route('teachers.create') }}" class="btn p-2 bg-teal-400 text-white">Add Teacher</a>

            <a href="{{ route('students.create') }}" class="btn p-2 bg-indigo-500 text-white">Add Student</a>
        </div>
    </x-slot>

    <div class="w-full max-w-xs m-auto mt-10">
        <table class="border-collapse border border-slate-400 ...">
            <thead>
            <tr>
                <th class="border border-slate-300 ...">Name</th>
                <th class="border border-slate-300 ...">Course</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teachers as $teacher)
                <tr>
                    <td class="border border-slate-300 ...">
                        {{ $teacher->name }}
                    </td>
                    <td class="border border-slate-300 ...">
                        {{ $teacher->subject }}
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</x-app-layout>
