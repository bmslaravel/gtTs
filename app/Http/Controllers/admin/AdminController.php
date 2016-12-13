<?php
/**
 * Created by PhpStorm.
 * User: bms
 * Date: 2016/12/13
 * Time: 0:29
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        dd(520321);
        print 520;
        dump('sss');
        exit;
    }

}