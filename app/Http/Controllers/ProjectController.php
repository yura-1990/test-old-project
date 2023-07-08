<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ProjectController extends BaseController
{
    function index2(){
        return view('project.index2');
    }
    function list(){
        return view('project.list');
    }
    function taskboard(){
        return view('project.taskboard');
    }
    function ticket(){
        return view('project.ticket');
    }
    function ticketdetails(){
        return view('project.ticketdetails');
    }
    function clients(){
        return view('project.clients');
    }
    function todo(){
        return view('project.todo');
    }
}
