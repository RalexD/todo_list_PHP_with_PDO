<?php
$task= $_POST['task'];//получаем данные из формы
if ($task== ''){    //проверка на ввод 
    echo 'Введите само задание';
    exit();
}

require_once 'configDB.php'; //подкючение БД

 $sql= 'INSERT INTO tasks(task) VALUES(:task)'; //sql команда (таблица,поле которое заполнится,переменная из формы )
 $query = $pdo->prepare($sql);
 $query->execute(['task' => $task]); // в выражение :task подставляем $task

 header('Location: /todo/index.php');
?>

