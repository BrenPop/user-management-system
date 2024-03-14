@props(['user', 'userInterestIds', 'languages', 'interests'])

<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="$user->name" disabled autofocus autocomplete="name" />
    <x-input-error class="mt-2" :messages="$errors->get('name')" />
</div>

<div>
    <x-input-label for="surname" :value="__('Surname')" />
    <x-text-input id="surname" name="surname" type="text" class="mt-1 block w-full" :value="$user->surname" disabled autofocus autocomplete="surname" />
    <x-input-error class="mt-2" :messages="$errors->get('surname')" />
</div>

<div>
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" name="email" type="text" class="mt-1 block w-full" :value="$user->email" disabled autofocus autocomplete="email" />
    <x-input-error class="mt-2" :messages="$errors->get('email')" />
</div>

<div>
    <x-input-label for="mobile_number" :value="__('Mobile Number')" />
    <x-text-input id="mobile_number" name="mobile_number" type="text" class="mt-1 block w-full" :value="$user->mobile_number" disabled autofocus autocomplete="mobile_number" />
    <x-input-error class="mt-2" :messages="$errors->get('mobile_number')" />
</div>

<div>
    <x-input-label for="south_african_id" :value="__('South African ID')" />
    <x-text-input id="south_african_id" name="south_african_id" type="text" class="mt-1 block w-full" :value="$user->south_african_id" disabled autofocus autocomplete="south_african_id" />
    <x-input-error class="mt-2" :messages="$errors->get('south_african_id')" />
</div>

<div>
    <x-input-label for="birth_date" :value="__('Birth Date')" />
    <x-text-input id="birth_date" name="birth_date" type="date" class="mt-1 block" :value="$user->birth_date" disabled autofocus autocomplete="birth_date" />
    <x-input-error class="mt-2" :messages="$errors->get('birth_date')" />
</div>

<div class="mt-4">
    <x-input-label for="language_id" :value="__('Language')" />
    <x-select-dropdown name="language_id" :options="$languages" :selected="$user->language_id" disabled />
    <x-input-error :messages="$errors->get('language_id')" />
</div>

<div class="mt-4">
    <x-input-label for="interest_ids" :value="__('Interests')" />
    <x-multi-select-dropdown name="interest_ids" :options="$interests" :selected="$userInterestIds" disabled />
    <x-input-error :messages="$errors->get('interest_ids')" />
</div>