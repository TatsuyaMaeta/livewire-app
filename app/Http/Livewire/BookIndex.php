<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithFileUploads; //
use Livewire\WithPagination;//別途追加

class BookIndex extends Component
{
    use WithFileUploads; //ファイルのアップロードに必要
    use WithPagination;//別途追加　BookIndexクラスに追加

    public $liveModal = false; //モーダルウインドウ
    public $title; //タイトル
    public $newImage; //画像
    public $price; //価格
    public $description; //詳細

    public function showBookModal()
    {
        $this->reset();
        $this->liveModal = true;
    }

    public function bookPost()
    {
        $this->validate([
            'title' => 'required',
            'newImage' => 'image|max:2048',
            'price' => 'integer|required',
            'description' => 'required',
        ]);
        $image = $this->newImage->store('public/books');
        Book::create([
            'title' => $this->title,
            'image' => $image,
            'price' => $this->price,
            'description' => $this->description,
        ]);
        $this->reset();
    }
    public function render()
    {
        return view("livewire.book-index", [
            "books" => Book::select("id", "title", "price", "image", "description")
                ->orderBy("id", "DESC")->paginate(3),
        ]);

    }
}
