//** class without behavior only the methods signatures */
//** handshake = class with same methods name  */

<?php 


interface TaskToDo {
      public function work(String $task);
}

class Manager implements TaskToDo{

    public function work(String $task)
    {
        echo "He assigns tasks for staffs and " .$task."\n";
    }
}

class Recepitionist implements TaskToDo{

    public function work(String $task)
    {
        echo "He deals with the customers " . $task."\n";
    }
}

class AssignTask{

    public function assign(TaskToDo $task)
    {
        
        $task->work("New Work");
        
    }
}

$assign = new AssignTask();
$assign->assign(new Recepitionist());
$assign->assign(new Manager());




?>