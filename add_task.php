<?php
// Usage: php add_task.php
define("FILE_NAME", implode(DIRECTORY_SEPARATOR, array(dirname(__FILE__), "files", "tasks_to_do.txt")));
echo FILE_NAME;
if (isset($argv[1])) {
    $task = implode(" ", array_slice($argv, 1)) . PHP_EOL;
    file_put_contents(FILE_NAME, $task, FILE_APPEND);
    exit(1);
} else die("Debes insertar una tarea" . PHP_EOL);
