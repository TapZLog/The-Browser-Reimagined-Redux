<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use App\Models\Articles;

class MainDashboard extends Component
{
    protected $listeners = ['update-articles' => '$refresh'];

    public function delete($articleID) {
        Articles::find($articleID) -> delete();
        session()->flash('Article Deleted Successfully!');
    }

    public function edit($articleID) {

    }

    #[On('update-articles')]
    public function render()
    {
        return view('livewire.main-dashboard', [
            'articles' => Articles::latest()->paginate(20)
        ]);
    }
}
