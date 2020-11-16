<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Application extends Model
{
    protected $table = 'applications';
    protected $fillable = [
        'subject', 'message', 'user_id', 'user_name', 'user_email', 'link', 'status',
    ];

    public static function add ($data)
    {
        $path = $data->file('file')->store('files', 'public');
        $result = Self::create([
            'subject' => $data->subject,
            'message' => $data->message,
            'user_id' => Auth::user()->id,
            'user_name' => Auth::user()->name,
            'user_email' => Auth::user()->email,
            'link' => '/storage/'.$path
        ]);

        return $result;
    }

    public static function getList ()
    {
        $items = Self::orderBy('id', 'desc')->paginate(10);
        $returnHTML = view('core.manager.list', compact('items'))->render();
        return $returnHTML;
    }
}
