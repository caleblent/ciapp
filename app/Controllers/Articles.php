<?php

namespace App\Controllers;

class Articles extends BaseController
{
    public function index() 
    {
        $data = [
            ["title" => "One", "content" => "The first piece"],
            ["title" => "Two", "content" => "More content here"]
        ];

        return view("Articles/index", [
            "articles" => $data
        ]);
    }
}