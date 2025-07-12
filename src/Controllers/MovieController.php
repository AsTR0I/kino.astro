<?php

namespace App\Controllers;

use App\Kernel\Http\Redirect;

class MovieController extends Controller
{
    public function add()
    {
        $this->view('/admin/movies/add');
    }

    public function store()
    {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:4', 'max:50']
        ]);

        if (! $validation) {
            foreach($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }
            $this->redirect('/admin/movies/add');
        }

        dd('Validation passed');
    }
}
