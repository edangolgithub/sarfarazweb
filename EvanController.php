<?php
class BaseController
{
    public function render($file)
    {
       // $ext = pathinfo($file, PATHINFO_EXTENSION);
        
        include  $file;
    }
}
class EvanController extends BaseController
{
    public function index()
    {
        return parent::render("index.html");
    }
}
?>