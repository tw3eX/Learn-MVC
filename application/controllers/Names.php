<?php
namespace controllers;

use kernel\Controller;
use kernel\View;
use models\Name as NameModel;

/**
 * Names Controller
 * @package controllers
 */
class Names extends Controller
{

    /**
     * Action /names/showlist
     * @return string
     */
    public function showlist()
    {
        $names = new NameModel;
        return View::render('list', $names->getData());
    }

    /**
     * Action /names/showtable
     * @return string
     */
    public function showtable()
    {
        $names = new NameModel;
        return View::render('table', $names->getData());
    }

}