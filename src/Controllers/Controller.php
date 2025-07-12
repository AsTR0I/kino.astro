<?php

namespace App\Controllers;

use App\Kernel\Http\Redirect;
use App\Kernel\Http\Request;
use App\Kernel\Session\Session;
use App\Kernel\View\View;

abstract class Controller
{
    private View $view;

    private Request $request;

    private Redirect $redirect;

    private Session $session;

    public function view(string $name)
    {
        $this->view->page($name);
    }

    public function setView(View $view)
    {
        $this->view = $view;
    }

    public function redirect(string $url)
    {
        $this->redirect->to($url);
    }

    public function setRedirect(Redirect $redirect)
    {
        $this->redirect = $redirect;
    }

    public function request(): Request
    {
        return $this->request;
    }

    public function setRequest(Request $request)
    {
        $this->request = $request;
    }

    public function session(): Session
    {
        return $this->session;
    }

    public function setSession(Session $session)
    {
        $this->session = $session;
    }
}
