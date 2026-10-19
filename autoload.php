

<?php

spl_autoload_register(function (string $className) {

    $file = __DIR__ . "/classes/"
          . str_replace("\\", "/", $className)
          . ".php";

    if (file_exists($file)) {
        require_once $file;
    }
});
