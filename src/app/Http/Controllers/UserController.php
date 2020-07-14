<?php

namespace App\Http\Controllers;
use App\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function construct__(User $user)
    {
        $this->model = $user;
    }

}
