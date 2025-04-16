<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUsersController extends Controller
{
    public function getData()
    {
        $data = [
            ['id' => 1, 'username' => 'Danial', 'fullname' => 'Muhammad Danial', 'email' => 'danial@gmail.com', 'tgl_lahir' => '1999-01-01'],
            ['id' => 2, 'username' => 'Rizki', 'fullname' => 'Rizki Fadilah', 'email' => 'rizkif@yahoo.com', 'tgl_lahir' => '1998-05-17'],
            ['id' => 3, 'username' => 'Ridwan', 'fullname' => 'Ridwan Fadli', 'email' => 'ridwanf@gmail.com', 'tgl_lahir' => '1997-12-20'],
            ['id' => 4, 'username' => 'Anwar', 'fullname' => 'Anwar Pratama', 'email' => 'anwarp@gmail.com', 'tgl_lahir' => '1992-06-15'],
            ['id' => 5, 'username' => 'Budi', 'fullname' => 'Budi Santoso', 'email' => 'budis@gmail.com', 'tgl_lahir' => '1995-09-28'],
            ['id' => 6, 'username' => 'Dodi', 'fullname' => 'Dodi Permana', 'email' => 'dodip@gmail.com', 'tgl_lahir' => '1994-03-12'],
            ['id' => 7, 'username' => 'Arthur', 'fullname' => 'Muhammad Arthur', 'email' => 'arthur1@gmail.com', 'tgl_lahir' => '1993-07-23'],
            ['id' => 8, 'username' => 'Hery', 'fullname' => 'Nur Faysa Fathoni', 'email' => 'nurfaysa@gmail.com', 'tgl_lahir' => '1996-11-05'],
            ['id' => 9, 'username' => 'Prima', 'fullname' => 'Prima Liya', 'email' => 'primal@gmail.com', 'tgl_lahir' => '1991-08-19'],
            ['id' => 10, 'username' => 'Maulana', 'fullname' => 'Maulana', 'email' => 'maulana@gmail.com', 'tgl_lahir' => '1990-04-30']
        ];
        
        return $data;
    }
    
    public function index()
    {
        $users = $this->getData();
        return view('admin_users', compact('users'));
    }
}