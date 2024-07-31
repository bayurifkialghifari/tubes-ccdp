<button class="btn btn-{{ $color ?? 'primary' }} {{ $classes ?? '' }}" type="{{ $type ?? 'button' }}" id="{{ $id ?? '' }}">
    {{ $slot }}
</button>