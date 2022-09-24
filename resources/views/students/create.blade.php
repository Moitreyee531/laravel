<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Student') }}
        </h2>

        <div class="pt-2">
            <a href="{{ route('teachers.create') }}" class="btn p-2 bg-teal-400 text-white">Add Teacher</a>

            <a href="{{ route('students.create') }}" class="btn p-2 bg-indigo-500 text-white">Add Student</a>
        </div>
    </x-slot>

    <div class="w-full max-w-xs m-auto mt-10">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
              action="{{ action('\App\Http\Controllers\StudentController@store') }}"
              method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Student Name
                </label>
                <input
                    class="shadow appearance-none border rounded
                     w-full py-2 px-3 text-gray-700 leading-tight
                     focus:outline-none focus:shadow-outline"
                    id="username" type="text" placeholder="student name"
                    name="student_name">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Student Email
                </label>
                <input
                    class="shadow appearance-none border rounded
                     w-full py-2 px-3 text-gray-700 leading-tight
                     focus:outline-none focus:shadow-outline"
                    id="username" type="text" placeholder="student email"
                    name="student_email">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Teachers
                </label>
                <select name="teachers[]" id="" multiple>
                    @foreach(\App\Models\Teacher::all() as $teacher)
                        <option value="{{$teacher->id }}">{{$teacher->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700
                    text-white font-bold py-2 px-4 rounded
                    focus:outline-none focus:shadow-outline"
                    type="submit">
                    Add Student
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
