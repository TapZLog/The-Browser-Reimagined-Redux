<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Rule;
use App\Models\Articles;

class CreateArticle extends Component
{
    use WithPagination;

    public $author;
    public $editor;

    #[Rule('required|min:10')]
    public $headline;

    public function create() {
        $validated = $this->validate();
        Articles::create($validated);
        $this->reset('headline');

        session()->flash('success',"Created Article.");
        $this->dispatch('update-articles');
        $this->resetPage();
    }

    public function render() {
        return view('livewire.create-article');
    }
}
