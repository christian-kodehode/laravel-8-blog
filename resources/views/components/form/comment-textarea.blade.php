@props([
    'name',
    'class' => 'border border-gray-200 p-2 w-full rounded',
    'placeholder' => '',
    'rows' => ''])

<x-form.field>

    <textarea   class="{{ $class }}"
                type="text"
                name="{{ $name }}"
                id="{{ $name }}"
                rows="{{ $rows }}"
                placeholder="{{ $placeholder }}"
                required
    >{{ old($name) }}</textarea>

    <x-form.error name="{{ $name }}" />

</x-form.field>
