<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Job Details Form</h2>
            <p class="text-gray-800 mb-6 text-center">we just need a hand full of things from you.</p>
            <form method="POST" action="/jobs" class="space-y-6">
                @csrf
                <!-- Job Title Field -->
                <div>
                    <x-form_label type="text" for="title">Job Title</x-form_label>
                    <x-form_input placeholder="CEO" type="text"  name="title" id="title" :value="old('title')" required></x-form_input>
                </div>
                <x-form_error name="title"></x-form_error>
                <!-- Salary Field -->
                <div>
                    <x-form_label for="salary" class="block text-sm font-medium text-gray-700">Salary</x-form_label>
                    <x-form_input type="text" id="salary" name="salary" placeholder="500,000 USD" :value="old('salary')"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required/>
                </div>

                <x-form_error name="salary"></x-form_error>

                {{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}

                <!-- Submit Button -->
                <div>
                    <button type="submit"
                        class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
