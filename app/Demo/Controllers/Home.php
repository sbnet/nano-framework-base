<?php
namespace Demo\Controllers;

use NanoFramework\Kernel;

class Home extends Kernel\Controller
{
    public function _init()
    {
        $this->page->set_title("Hello World Sample");
        $this->view->set_path('Demo/views');
        $this->view->set_layout("main");
    }

    public function index()
    {
        // throw new Kernel\Exception(_("The view engine"), E_ERROR);
    }
}
