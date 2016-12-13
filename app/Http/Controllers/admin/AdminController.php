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

        dump('sss');
        exit;
    }

    public function add(){
        echo "add";
    }
}