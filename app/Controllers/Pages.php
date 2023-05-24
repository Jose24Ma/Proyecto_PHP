<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Exceptions\PageNotFoundException; 

class Pages extends BaseController
{
    public function view($page = 'home'){
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
    public function principal() {
        return view('pages/principal');
    }
    public function login() {
        return view('pages/login');
    }
    public function registro() {
        return view('pages/registro');
    }
    public function datos() {
        return view('pages/datos');
    }
}