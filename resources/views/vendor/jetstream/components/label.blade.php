@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }} style="color:black;font-size:15px">
    {{ $value ?? $slot }}
</label>
