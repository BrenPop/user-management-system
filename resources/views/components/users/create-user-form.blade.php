{{-- Create a new user form --}}
@props(['languages', 'interests'])

<form method="POST" action="{{ route('users.store') }}" class="mt-6 space-y-6">
    @csrf
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" autofocus autocomplete="name" />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <div>
        <x-input-label for="surname" :value="__('Surname')" />
        <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full" :value="old('surname')" autofocus autocomplete="surname" />
        <x-input-error class="mt-2" :messages="$errors->get('surname')" />
    </div>

    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email')" autofocus autocomplete="email" />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />
    </div>

    <div>
        <x-input-label for="mobile_number" :value="__('Mobile Number')" />
        <x-text-input id="mobile_number" name="mobile_number" type="text" class="mt-1 block w-full" :value="old('mobile_number')" autofocus autocomplete="mobile_number" />
        <x-input-error class="mt-2" :messages="$errors->get('mobile_number')" />
    </div>

    <div>
        <x-input-label for="south_african_id" :value="__('South African ID')" />
        <x-text-input id="south_african_id" name="south_african_id" type="text" class="mt-1 block w-full" :value="old('south_african_id')" autofocus autocomplete="south_african_id" />
        <x-input-error class="mt-2" :messages="$errors->get('south_african_id')" />
    </div>

    <div>
        <x-input-label for="birth_date" :value="__('Birth Date')" />
        <x-text-input id="birth_date" name="birth_date" type="date" class="mt-1 block" :value="old('birth_date')" autofocus autocomplete="birth_date" />
        <x-input-error class="mt-2" :messages="$errors->get('birth_date')" />
    </div>

    <div class="mt-4">
        <x-input-label for="language_id" :value="__('Language')" />
        <x-select-dropdown name="language_id" :options="$languages" />
        <x-input-error :messages="$errors->get('language_id')" />
    </div>

    <div class="mt-4">
        <x-input-label for="interest_ids" :value="__('Interests')" />
        <x-multi-select-dropdown name="interest_ids" :options="$interests" :selected="[]" />
        <x-input-error :messages="$errors->get('interest_ids')" />
    </div>

    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    {{-- Submit button --}}
    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Save') }}
        </x-primary-button>
    </div>
</form>