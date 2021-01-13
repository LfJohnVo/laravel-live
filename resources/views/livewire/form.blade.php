<div>
    <label>Titulo</label>
    <input type="text" wire:model="title">
    @error('title') <span class="red-text">{{ $message }}</span> @enderror
</div>

<div>
    <label>Contenido</label>
    <textarea type="text" wire:model="body"></textarea>
    @error('body') <span class="red-text">{{ $message }}</span> @enderror
</div>
