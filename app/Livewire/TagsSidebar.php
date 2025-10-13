<?php

namespace App\Livewire;

use Livewire\Component;

class TagsSidebar extends Component
{
    public $tags = ['Book', 'Animals', 'Crime', 'Science', 'Yoga', 'Fiction', 'Thriller'];

    public function render()
    {
        return view('livewire.tags-sidebar');
    }
}
