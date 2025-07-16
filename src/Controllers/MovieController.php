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
        dd($this->storage()->url('test/2e9795544ef79ab79037d3f386e8e59d.png'));
        $file = $this->request()->file("image");
        dd($file->move('test'));
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
