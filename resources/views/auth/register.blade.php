<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <form method="POST" action="/jobs" class="space-y-6">
                @csrf
                <div>
                    <x-form_label for="title">username</x-form_label>
                    <x-form_input placeholder="CEO" required></x-form_input>
                </div>
                <x-form_error name="username"></x-form_error>
                <div>
                    <x-form_label for="salary" class="block text-sm font-medium text-gray-700">password</x-form_label>
                    <x-form_input type="number" id="salary" name="salary" placeholder="500,000 USD"
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
