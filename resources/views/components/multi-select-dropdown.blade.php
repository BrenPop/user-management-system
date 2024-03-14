@props(['name', 'options', 'selected'])

{{-- Styling the slect2 dropdown --}}
<style>
    /* Select2 container */
    .select2-container--default .select2-selection--multiple {
        background-color: #2d3748;
        border-color: #4a5568;
        color: #fff;
    }

    /* Selected option */
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #4a5568;
        border-color: #4a5568;
        color: #fff;
    }

    /* Hovered option */
    .select2-container--default .select2-selection--multiple .select2-selection__choice:hover {
        background-color: #2d3748;
        border-color: #2d3748;
        color: #fff;
    }

    /* Dropdown */
    .select2-dropdown {
        background-color: #2d3748;
        border-color: #4a5568;
        color: #fff;
    }

    /* Option hover */
    .select2-container--default .select2-results__option--highlighted[aria-selected] {
        background-color: #4a5568;
        color: #fff;
    }
</style>

<select name="{{ $name }}[]" multiple="multiple" {{ $attributes->merge(['class' => 'select-multiple form-control form-select text-white bg-gray-800 border border-gray-600 rounded-md focus:outline-none focus:border-blue-500 w-full']) }}>
    @foreach($options as $value => $label)
        <option value="{{ $value }}" {{ in_array($value, $selected) ? 'selected' : '' }} >{{ $label }}</option>
    @endforeach
</select>

<script>
    $(document).ready(function() {
        $('.select-multiple').select2();
    });
</script>