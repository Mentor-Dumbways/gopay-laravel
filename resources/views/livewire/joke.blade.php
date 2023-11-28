<div>
    <h1>
        {{ $joke }}
    </h1>
    <br>
    <form wire:submit="save">
        <input type="text" wire:model='new_joke' autofocus>
        <button type="submit">Change</button>
    </form>
</div>
