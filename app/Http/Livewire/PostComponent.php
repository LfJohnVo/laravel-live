<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;

class PostComponent extends Component
{
    use WithPagination;

    public function render()
    {

        return view('livewire.post-component', [
            'posts' => Post::orderBy('id', 'desc')->paginate(),
        ]);
    }

    public function destroy($id){
        Post::destroy($id);
        $this->alert('success', 'Registro eliminado!');
    }
}
