<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Job Details Form</h2>
            <form method="POST" action="/jobs/{{ $job->id }}" class="space-y-6">
                @csrf
                @method('PATCH')
                <!-- Job Title Field -->
                <div>
                    <label for="jobTitle" class="block text-sm font-medium text-gray-700">Job Title</label>
                    <input type="text" id="jobTitle" name="title" placeholder="Producer"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $job->title }}" required/>
                </div>
                <div class="text-red-500 text-sm">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>
                <!-- Salary Field -->
                <div>
                    <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                    <input type="number" id="salary" name="salary" placeholder="500,000 USD"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ $job->salary }}" required/>
                </div>

                <div class="text-red-500 text-sm">
                  @error('salary')
                      {{ $message }}
                  @enderror
              </div>

                {{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}

                <!-- Submit Button -->
                <div>
                    <button form="delete-form" class="text-white flex float-start bg-red-600 py-2 px-4 font-bold border border-transparent rounded-md shadow-sm text-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Delete
                    </button>
                    <a href="/jobs/{{ $job->id }}"
                        class="flex float-end py-2 px-4 font-bold border border-transparent rounded-md shadow-sm text-sm text-black bg-grey-300 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Cancel
                    </a>
                    <button type="submit"
                        class="flex float-end py-2 px-4 mr-2 font-bold border border-transparent rounded-md shadow-sm text-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update
                    </button>
                </div>
            </form>
            <form method="POST" id="delete-form" action="/jobs/{{ $job->id }}" class="hidden">
                @csrf
                @method('DELETE')
            </form>
        </div>
    </div>
</x-layout>
