<?php

namespace App\DTO;

class PostDTO
{
    public $title;
    public $description;
    public $contact_phone_number;

    public function __construct($title, $description, $contact_phone_number)
    {
        $this->title = $title;
        $this->description = $description;
        $this->contact_phone_number = $contact_phone_number;
    }
}
