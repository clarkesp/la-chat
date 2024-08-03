<?php

namespace App\Livewire\Chat;

use App\Models\Room;
use Livewire\Component;
//use App\Models\Room;
use Illuminate\Support\Collection;
//use Livewire\Attributes\On;
//use Livewire\Component;

class Messages extends Component
{
    public Room $room;
    public collection $messages;
    public function mount()
    {
        $this->fill([
            'messages' => $this->room->messages()->oldest()->take(100)->get(),
        ]);
    }
    public function render()
    {
        return view('livewire.chat.messages');
    }
}
