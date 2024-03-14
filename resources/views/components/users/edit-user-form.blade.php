@props(['user', 'userInterestIds', 'languages', 'interests'])

<form method="post" action="{{ route('users.update', ['user' => $user]) }}" class="mt-6 space-y-6">
    @method('patch')
    @csrf
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" autofocus autocomplete="name" />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <div>
        <x-input-label for="surname" :value="__('Surname')" />
        <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full" :value="old('surname', $user->surname)" autofocus autocomplete="surname" />
        <x-input-error class="mt-2" :messages="$errors->get('surname')" />
    </div>

    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="old('email', $user->email)" autofocus autocomplete="email" />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />
    </div>

    <div>
        <x-input-label for="mobile_number" :value="__('Mobile Number')" />
        <x-text-input id="mobile_number" name="mobile_number" type="text" class="mt-1 block w-full" :value="old('mobile_number', $user->mobile_number)" autofocus autocomplete="mobile_number" />
        <x-input-error class="mt-2" :messages="$errors->get('mobile_number')" />
    </div>

    <div>
        <x-input-label for="south_african_id" :value="__('South African ID')" />
        <x-text-input id="south_african_id" name="south_african_id" type="text" class="mt-1 block w-full" :value="old('south_african_id', $user->south_african_id)" autofocus autocomplete="south_african_id" />
        <x-input-error class="mt-2" :messages="$errors->get('south_african_id')" />
    </div>

    <div>
        <x-input-label for="birth_date" :value="__('Birth Date')" />
        <x-text-input id="birth_date" name="birth_date" type="date" class="mt-1 block" :value="old('birth_date', $user->birth_date)" autofocus autocomplete="birth_date" />
        <x-input-error class="mt-2" :messages="$errors->get('birth_date')" />
    </div>

    <div class="mt-4">
        <x-input-label for="language_id" :value="__('Language')" />
        <x-select-dropdown name="language_id" :options="$languages" :selected="$user->language_id" />
        <x-input-error :messages="$errors->get('language_id')" />
    </div>

    <div class="mt-4">
        <x-input-label for="interest_ids" :value="__('Interests')" />
        <x-multi-select-dropdown name="interest_ids" :options="$interests" :selected="$userInterestIds" />
        <x-input-error :messages="$errors->get('interest_ids')" />
    </div>

    {{-- Submit button --}}
    <div class="flex items-center justify-end mt-4">
        <x-primary-button>
            {{ __('Save') }}
        </x-primary-button>
    </div>
</form>