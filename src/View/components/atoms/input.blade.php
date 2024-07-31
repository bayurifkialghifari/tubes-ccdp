<input
    type="{{ $type ?? 'text' }}"
    class="form-control {{ $classes ?? '' }}"
    name="{{ $name ?? '' }}"
    placeholder="{{ $placeholder ?? '' }}"
    value="{{ old($name ?? '') }}"
/>