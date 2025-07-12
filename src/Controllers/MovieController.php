<?php

namespace App\Controllers;

class MovieController extends Controller
{
    public function add()
    {
        $this->view('/admin/movies/add');
    }

    public function store()
    {
        $validation = $this->request()->validate([
            'name' => ['required', 'min:4', 'max:50'],
        ]);

        if (! $validation) {
            foreach ($this->request()->errors() as $field => $errors) {
                $this->session()->set($field, $errors);
            }
            $this->redirect('/admin/movies/add');
        }

        $id = $this->db()->insert('movies', [
            'name' => $this->request()->input('name'),
        ]);
        
        dd("Moved added successfully with id: $id");
    }
}
