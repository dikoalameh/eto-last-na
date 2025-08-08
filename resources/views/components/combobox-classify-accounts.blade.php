@props(['disabled' => false])

<select @disabled($disabled) {{ $attributes->merge(['class' => 'w-50 border-gray-300 mt-0']) }}>
    <option value="" disabled selected>-- Choose one --</option>
    <option value="erb">ERB</option>
    <option value="iacuc">IACUC</option>
<<<<<<< HEAD
=======
    <option value="erbiacuc">ERB-IACUC</option>
>>>>>>> 87dc98ec9a8c3dab32310e4a5e37f4fb4de45d42
</select>