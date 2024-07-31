@component('components.atoms.sidebar')
    @component('components.atoms.sidebar-content')
        @component('components.molecules.sidebar-brand', [
            'url' => url('/dashboard'),
            'title' => 'Tubes CCDP',
        ])
        @endcomponent
        @component('components.atoms.sidebar-nav')
            @component('components.molecules.sidebar-item', [
                'isActive' => true,
                'icon' => 'fa fa-home',
                'title' => 'Dashboard',
            ])
            @endcomponent
            @component('components.atoms.sidebar-header', [
                'title' => 'Sederhana',
            ])
            @endcomponent
        @endcomponent
    @endcomponent
@endcomponent