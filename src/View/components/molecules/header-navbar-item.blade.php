<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
    <i class="fa fa-cog"></i>
</a>

<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
    <img src="{{ url('/admin//img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded me-1" alt="GGWP" />
    <span class="text-dark">GGWP</span>
</a>
<div class="dropdown-menu dropdown-menu-end">
    <div class="dropdown-divider"></div>
    <a x-data class="dropdown-item" href="#" x-on:click.prevent="
        Swal.fire({
            title: 'Are you sure?',
            text: '',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes',
        }).then((result) => {
            if (result.isConfirmed) {
                fetch('{{ url('/logout') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                }).then(() => {
                    window.location.href = '{{ url('/login') }}'
                })
            }
        })">Log out</a>
</div>