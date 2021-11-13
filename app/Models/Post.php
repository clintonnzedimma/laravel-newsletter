<?php

namespace App\Models;

use App\Notifications\NewPostNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function notifyUsers()
    {
        $newsletters = Newsletter::all();
        foreach ($newsletters as $newsletter) {
            $data = ['title' => $this->title, 'description' => $this->description];
            $delay = now()->addMinutes(1);
            $newsletter->notify((new NewPostNotification($data))->delay($delay));
        }
    }
}
