<x-auth-card>
    <form wire:submit.prevent="login()" action="#" method="POST" class="space-y-6">

        {{-- <x-input.group group-size="sm:col-span-2" label="Document Number :" for="doc_no"
            :error="$errors->first('editing.doc_no')">
            <x-forms.input id="username" name="username" type="text" :value="old('username')" autofocus />
        </x-input.group> --}}
        <div>
            <label for="username" class="block text-sm font-medium text-gray-700">
                Username
            </label>
            <div class="mt-1">
                <input wire:model.debounce.500ms="username" id="username" name="username" type="username"
                    autocomplete="username" placeholder="Enter Username"
                    class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('username')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="space-y-1">
            <label for="password" class="block text-sm font-medium text-gray-700">
                Password
            </label>
            <div class="mt-1">
                <input wire:model.lazy="password" id="password" name="password" type="password"
                    autocomplete="current-password" placeholder="Enter Password"
                    class="block w-full px-3 py-2 placeholder-gray-400 border border-gray-300 rounded-md shadow-sm appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                @error('password')
                <span class="text-red-500">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="flex items-center justify-between">
            {{-- <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox"
                    class="w-4 h-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500">
                <label for="remember-me" class="block ml-2 text-sm text-gray-900">
                    Remember me
                </label>
            </div> --}}

            <div class="text-sm">
                <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Forgot your password?
                </a>
            </div>
        </div>

        <div>
            <button type="submit"
                class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Register
            </button>
        </div>
    </form>
    <div class="flex items-center justify-center py-4">
        <a href="{{route('Login')}}" class="font-medium text-indigo-600 hover:text-indigo-500">
            Already have an account, login!
        </a>
    </div>
</x-auth-card>
