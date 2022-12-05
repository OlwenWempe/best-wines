<?php

namespace App\Controllers;

use Core\Controller;

class TaskController extends Controller
{
    /**
     * afficher la liste des tâches
     * @return void
     */
    public function index() :void
    {
        $task = new Task();

        $tasks = $task->findAllBy(['id_user' => 1]);
        $message = 'hello';
        dd($tasks);
        $this->renderView('task/index', compact('tasks', 'message'));
    }
    // ?id=10
    // task/show/10
    public function show(int $id)
    {

    }

    public function insert()
    {

        if (isset($_POST['submit'])){


            $task = new Task();
            $task->setIdUser(1);
            $task->setName(htmlentities($_POST['name']));
            $task->setToDoAt(htmlentities($_POST['to_do_at']));

            $result = $task->insert();

            if ($result ){
                $message =  "insertion bien effectuée";
            }else {
                $message =  "échec";
            }
            $this->renderView('task/insert', [
                'message' => $message
            ]);

        }
        $this->renderView('task/insert');
    }

    public function delete()
    {

        echo "Task controller ".__FUNCTION__;
    }

    public function edit()
    {
        echo "Task controller ".__FUNCTION__;
    }
}