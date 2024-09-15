<?php
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function url($path)
{
    return "index.php?page=" . $path;
}

function redirect($path)
{
    header("Location: " . url($path));
}
