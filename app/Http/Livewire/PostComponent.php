<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;

class PostComponent extends Component
{
    use WithPagination;

    public $title, $body;
    public $view = 'create';

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

    public function store(){
        $this->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = Post::create([
            'title' => $this->title,
            'body' => $this->body,
        ]);
        //$this->edit($post->id);
        $this->title = "";
        $this->body = "";
        $this->alert('success', 'Registro añadido!');

    }

    public function edit($id){
        $post = Post::find($id);
        $this->title = $post->title;
        $this->body = $post->body;

        $this->view = 'edit';
    }

    public function default(){
        $this->title = "";
        $this->body = "";

        $this->view = 'create';
    }
}
