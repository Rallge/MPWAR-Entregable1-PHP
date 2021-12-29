<?php
// Usage: php display_tasks.php
define("FILE_NAME", implode(DIRECTORY_SEPARATOR, array(dirname(__FILE__), "files", "tasks_to_do.txt")));

$pendingTasks = null;
if (!file_exists(FILE_NAME)) {
    die("No hay tareas pendientes" . PHP_EOL);
}

$pendingTasks = file(FILE_NAME);
foreach ($pendingTasks as $lineNumber => $lineContent) {
    echo "Task #" . $lineNumber . ": " . $lineContent;
}
exit(1);

