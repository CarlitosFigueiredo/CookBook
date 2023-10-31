<?php

namespace App\Livewire;

use App\Models\Song;
use Livewire\Component;

class DragDropSongs extends Component
{
    public function updateSongOrder($newOrder)
    {
        foreach ($newOrder as $item) {
            Song::find($item['value'])->update([
                'order' => $item['order'],
            ]);
        }

        $this->dispatch('order-updated');
    }


    public function render()
    {
        return view('livewire.drag-drop-songs', [
            'songs' => Song::orderBy('order')->get(),
        ]);
    }
}
