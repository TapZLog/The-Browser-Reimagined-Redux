<div class="ml-auto mr-auto pt-4 max-w-320">
    <form>
        <p>Headline: <input wire:model="headline" type="text" placeholder="Headline"></p>

        @error('headline')
            <span>{{ $message }}</span>
        @enderror

        @if (session('success'))
            <span>Article Created Successfully</span>
        @endif

        <button wire:click.prevent="create" type="submit">Save Changes</button>

    </form>
</div>
