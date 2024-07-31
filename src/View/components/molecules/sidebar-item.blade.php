<li class="sidebar-item {{ $isActive ? 'active' : '' }}">
    @component('components.atoms.sidebar-link', ['url' => $url ?? ''])
        <i class="{{ $icon ?? '' }}"></i>
        <span class="align-middle">{{ $title }}</span>
    @endcomponent
</li>