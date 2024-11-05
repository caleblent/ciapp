<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Articles extends BaseController
{
    public function index() 
    {
        // $db = db_connect();

        // $db->listTables();

        // $data = [
        //     ["title" => "One", "content" => "The first piece"],
        //     ["title" => "Two", "content" => "More content here"]
        // ];

        $model = new ArticleModel;

        $data = $model->findAll();

        return view("Articles/index", [
            "articles" => $data
        ]);
    }
}