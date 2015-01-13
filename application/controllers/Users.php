<?php
namespace controllers;

use kernel\Controller;
use kernel\View;
use models\User as UserModel;

/**
 * Users Controller
 * @package controllers
 */
class Users extends Controller
{

    /**
     * Action /users/showlist
     * @return string
     */
    public function showlist()
    {
        $users = new UserModel;
        return View::render('list', $users->getData());
    }

    /**
     * Action /users/showtable
     * @return string
     */
    public function showtable()
    {
        $users = new UserModel;
        return View::render('table', $users->getData());
    }

}