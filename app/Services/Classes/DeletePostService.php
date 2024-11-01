<?php

namespace App\Services\Classes;

use App\Services\Interfaces\IDeletePostService;
use App\Models\Posts;

class DeletePostService implements IDeletePostService
{
    public function deletePostByID($id) {
        Posts::where('id', $id)->delete();
        return true;
    }
}
