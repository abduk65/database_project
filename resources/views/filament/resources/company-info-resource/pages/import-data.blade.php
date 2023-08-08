<x-filament::page>
    <form wire:submit.prevent="save">
        <input type="file" wire:model="photo">
        @error('photo')
            <span class="error">{{ $message }}</span>
        @enderror
        <button type="submit">Parse and upload</button>
    </form>
</x-filament::page>
