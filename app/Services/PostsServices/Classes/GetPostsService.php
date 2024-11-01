<?php

namespace App\Services\PostsServices\Classes;

use App\Services\PostsServices\Interfaces\IGetPostsService;
use App\Models\Posts;

class GetPostsService implements IGetPostsService
{
    public function getAllPosts()
    {
        $requestData = request()->all();

        $query = Posts::query();

        if (!empty($requestData) && $requestData['title'] != '') {
            $title = $requestData['title'];
            $query->where('title', 'LIKE', "%$title%");
        }

        if (!empty($requestData) && $requestData['contact_phone_number'] != '') {
            $contact_phone_number = $requestData['contact_phone_number'];
            $query->where('contact_phone_number', 'LIKE', "%$contact_phone_number%");
        }

        if (!empty($requestData) && $requestData['description'] != '') {
            $description = $requestData['description'];
            $query->where('description', 'LIKE', "%$description%");
        }

        return $query->get();
    }
}
