<main class="pb-150 mt-0 mb-0 ml-auto mr-auto">
    <div class="ml-auto mr-auto pt-4 max-w-320">
        @include('livewire.dashboard.search')
        <br>
        <div class="overflow-hidden">
            @include('livewire.dashboard.table')

            @if (@session('success'))
                <span>{{ $message }}</span>
            @endif
        </div>
    </div>
</div>
