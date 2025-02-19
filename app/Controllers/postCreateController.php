<?php
namespace App\Controllers;
use App\Models\post;

class postCreateController
{
    protected string $tableName = "posts";
    public function store()
    {
        $title = $_POST['title'];
        $content = $_POST['content'];
        $data = [
            'title' => $title,
            'content' => $content
        ];
        $post = new post();
        $tableName = $this->tableName;
        $post->insert($tableName, $data);
        $data = $post->fetchPostData($tableName);
        return views('post/show.php',['data'=>$data]);
    }
}