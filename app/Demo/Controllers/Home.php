<?php
namespace Demo\Controllers;

use NanoFramework\Kernel;

class Home extends Kernel\Controller
{
    public function _init()
    {
        $this->page->set_title("Hello World Sample");
        $this->view->set_layout('default');
    }

    public function index()
    {
    }
}
