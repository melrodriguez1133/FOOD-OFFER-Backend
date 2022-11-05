<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    public function read($fileName){
        return storage_path("app\\$this->folderSave");
    }

    public function upload(Request $request, $folderSave){
        return $request->file('file')->store($folderSave);
    }
}
