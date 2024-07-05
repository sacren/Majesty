<x-layout>
  <x-slot:title>
    Register
  </x-slot:title>
  <x-slot:heading>
    Register
  </x-slot:heading>
  <form method="POST" action="/register">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">

        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="first_name">First Name</x-form-label>
            <div class="mt-2">
              <x-form-input name="first_name" id="first_name" placeholder="John" required />
              <x-form-error id="first_name" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="last_name">Last Name</x-form-label>
            <div class="mt-2">
              <x-form-input name="last_name" id="last_name" placeholder="Smith" required />
              <x-form-error id="last_name" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="email">Email Address</x-form-label>
            <div class="mt-2">
              <x-form-input name="email" id="email" type="email" placeholder="5I8fH@example.com" required />
              <x-form-error id="email" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password">Password</x-form-label>
            <div class="mt-2">
              <x-form-input name="password" id="password" type="password" placeholder="********" required />
              <x-form-error id="password" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="password_confirmation">Confirm Password</x-form-label>
            <div class="mt-2">
              <x-form-input name="password_confirmation" id="password_confirmation" type="password" placeholder="********" required />
              <x-form-error id="password_confirmation" />
            </div>
          </x-form-field>
        </div>

      </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <a href="/" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
      <x-form-button>Register</x-form-button>
    </div>
  </form>
</x-layout>
