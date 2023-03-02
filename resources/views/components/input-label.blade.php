@props(['value'])

<<<<<<< HEAD
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700 dark:text-gray-300']) }}>
=======
<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
>>>>>>> 9014123e383dd9fec56bbc4b8d1e29c9644bcb13
    {{ $value ?? $slot }}
</label>
