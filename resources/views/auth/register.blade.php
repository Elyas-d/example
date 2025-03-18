<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <form method="POST" action="/register" class="space-y-6">
                @csrf
                <div>
                    <x-form_label for="First_Name">First Name</x-form_label>
                    <x-form_input placeholder="First_Name" id="First_Name" required></x-form_input>
                </div>
                <x-form_error name="Last_Name"></x-form_error>

                <div>
                    <x-form_label for="Last_Name">Last Name</x-form_label>
                    <x-form_input placeholder="Last_Name" id="Last_Name" required></x-form_input>
                </div>
                <x-form_error name="Last_Name"></x-form_error>

                <div>
                    <x-form_label for="email" class="block text-sm font-medium text-gray-700">Email</x-form_label>
                    <x-form_input type="email" id="email" name="email" placeholder="example@gmail.com"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        required />
                </div>

                <x-form_error name="email"></x-form_error>

                <div>
                    <x-form_label for="password">Password</x-form_label>
                    <x-form_input type="password" placeholder="password" required></x-form_input>
                </div>
                <x-form_error name="password"></x-form_error>

                <div>
                    <x-form_label for="password_confirmation">Confirm Password</x-form_label>
                    <x-form_input type="password" placeholder="re-enter your password" required></x-form_input>
                </div>
                <x-form_error name="password_confirmation"></x-form_error>

                {{-- @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li class="text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif --}}

                <!-- Submit Button -->
                <div class="flex justify-between">
                    <x-button href="/">Cancel</x-button>
                    <div>
                        <x-form_button class="text-bold">Register</x-form_button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-layout>
