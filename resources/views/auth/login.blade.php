<x-layout>
    <x-slot:heading>
        Login
    </x-slot:heading>
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <form method="POST" action="/login" class="space-y-4">
                @csrf
                <div>
                    <x-form_label for="email">Email</x-form_label>
                    <x-form_input placeholder="example@gmail.com" name="email" id="email" :value="old('email')" required></x-form_input>
                </div>
                <x-form_error name="email"></x-form_error>

                <div>
                    <x-form_label for="password">Password</x-form_label>
                    <x-form_input type="password" name="password" placeholder="password" :value="old('password')" required></x-form_input>
                </div>
                <x-form_error name="password"></x-form_error>

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
                        <x-form_button class="text-bold">Login</x-form_button>
                    </div>
                </div>
                <div class="flex justify-center">
                    <a href="/register" class="bg-white py-2 px-4 border rounded-md border-transparent text-sm text-blue-600 font-bold focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Signup</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
