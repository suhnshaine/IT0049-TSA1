<?php

namespace App\Controllers;

use App\Models\TaskModel;
use App\Models\UserModel;

class Pages extends BaseController
{
    public function welcome()
    {
        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel
            ->where('task_date', date('Y-m-d'))
            ->findAll();

        return view('welcome_page', $data);
    }

    public function tasks()
    {
        $taskModel = new TaskModel();

        $data['tasks'] = $taskModel
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('task_list', $data);
    }

    public function profile()
    {
        $userModel = new UserModel();

        $data['user'] = $userModel->first();

        return view('profile', $data);
    }

    public function about()
    {
        return view('about');
    }
}