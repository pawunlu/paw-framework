<?php

namespace Paw\App\Controllers;

use Paw\Core\App;
use Paw\Core\Controller;
use Paw\App\Models\Users;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->model = new Users();
    }

    /**
     * Show all users.
     */
    public function index()
    {
        $users = $this->model->get();
        return view('users', compact('users'));
    }

    /**
     * Store a new user in the database.
     */
    public function store()
    {
        $user = [
            'name' => $_POST['name']
        ];
        $this->model->insert($user);
        return redirect('users');
    }
}
