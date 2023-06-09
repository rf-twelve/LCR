<!-- This example requires Tailwind CSS v2.0+ -->
<div class="p-4 rounded-md bg-red-50">
    <div class="flex p-4 bg-gray-300 rounded">
      <div class="flex-shrink-0">
        <!-- Heroicon name: solid/exclamation -->
        <svg class="text-yellow-800 w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
        </svg>
      </div>
      <div class="ml-3">
        <h3 class="text-lg font-medium text-yellow-800">
            ACTIVATION REQUIRED!
        </h3>
        <div class="mt-2 text-yellow-700 text-md">
          <p>Your account is not yet activate for security reason,</p>
          <p>Please notify system admin to activate your account.</p>
          <a class="underline" href="{{ route('login') }}">Back to login.</a>
        </div>
      </div>
    </div>
  </div>
