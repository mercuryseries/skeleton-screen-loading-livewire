<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Card extends Component
{
    public array $data;

    public function loadCardData()
    {
        sleep(rand(1, 3));

        $this->data = [
            'avatarUrl' => 'https://randomuser.me/api/portraits/women/42.jpg',
            'name' => 'Jane Doe',
            'bio' => "I'm a pure coder. I build awesome web & mobile applications."
        ];
    }

    public function render()
    {
        return view('livewire.card');
    }
}
