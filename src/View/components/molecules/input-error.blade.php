<div>
    @if(hasError($input ?? ''))
        <span class="text-danger text-sm">{{ error($input ?? '') }}</span>
    @endif
</div>
