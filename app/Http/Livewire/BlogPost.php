<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BlogPost extends Component
{
    public array $post;

    public function loadPostData()
    {
        sleep(rand(1, 4));

        $this->post = [
            'posterUrl' => 'https://images.unsplash.com/photo-1477738224882-4eba549a81ea?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80',
            'posterDescription' => 'Fireworks',
            'title' => 'Bonne et heureuse année 2021',
            'content' => 'Que cette année puisse vous apporter santé, succès et réussite à vous et votre famille.',
            'authorAvatarUrl' => 'https://randomuser.me/api/portraits/men/42.jpg',
            'authorName' => 'John Doe',
            'publishedAt' => "Dec 31, 2020"
        ];
    }

    public function render()
    {
        return view('livewire.blog-post');
    }
}
