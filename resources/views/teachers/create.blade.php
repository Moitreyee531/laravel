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
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
              action="{{ action('\App\Http\Controllers\TeacherController@store') }}"
              method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Teacher Name
                </label>
                <input
                    class="shadow appearance-none border rounded
                     w-full py-2 px-3 text-gray-700 leading-tight
                     focus:outline-none focus:shadow-outline"
                    id="username" type="text" placeholder="teacher name"
                    name="teacher_name">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    Subject
                </label>
                <select class="block appearance-none w-full
                    bg-gray-200 border border-gray-200 text-gray-700
                    py-3 px-4 pr-8 rounded leading-tight
                    focus:outline-none focus:bg-white
                    focus:border-gray-500" id="grid-state"
                        name="subject">
                    <option>Database Management</option>
                    <option>Web Application Development</option>
                    <option>Full Stack Web Development</option>
                </select>
            </div>

            <div class="flex items-center justify-between">
                <button
                    class="bg-blue-500 hover:bg-blue-700
                    text-white font-bold py-2 px-4 rounded
                    focus:outline-none focus:shadow-outline"
                    type="submit">
                    Add Teacher
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
