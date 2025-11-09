<div>
    <label for="{{ $id }}">{{ $label }}
    </label>

    <select wire:model.live="{{ $model }}" title="{{ $label }}" id="{{ $id }}"
        name="{{ $id }}" class="py-2" {{ $data && $data->count() > 0 ? '' : 'disabled' }}
        {{ $id === 'destination_province' || $id === 'origin_province' ? 'required' : '' }} autocomplete="off">
        @forelse ($data ? $data->sortBy('name') : collect([]) as $item)
            @if ($loop->first)
                <option value ="">Pilih {{ $label }}</option>
            @endif
            <option value="{{ $item->id }}">{{ Str::title($item->name) }}</option>
        @empty
            <option value="">Tidak ada data</option>
        @endforelse
    </select>
</div>
