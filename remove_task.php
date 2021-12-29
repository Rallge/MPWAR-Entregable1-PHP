<?php
// Usage: php remove_task.php
define("FILE_NAME", implode(DIRECTORY_SEPARATOR, array(dirname(__FILE__), "files", "tasks_to_do.txt")));
define("REMOVE_FILE_NAME", implode(DIRECTORY_SEPARATOR, array(dirname(__FILE__), "files", "completed_tasks.txt")));

if (!isset($argv[1])) {
    die("No existen tareas a eliminar" . PHP_EOL);
}

$task = implode(" ", array_slice($argv, 1)) . PHP_EOL;
if (!file_exists(FILE_NAME)) {
    die("No hay tareas pendientes para eliminar" . PHP_EOL);
}
$pendingTasks = file(FILE_NAME);
if (array_search($task, $pendingTasks) >= 0) {
    unset($pendingTasks[array_search($task, $pendingTasks)]);
    file_put_contents(REMOVE_FILE_NAME, $task, FILE_APPEND);
}
file_put_contents(FILE_NAME, $pendingTasks);
exit(1);
