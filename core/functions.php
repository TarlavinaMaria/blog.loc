<?php
function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
function dd($data)
{
    dump($data);
    die;
}
function abort($code = 404)
{
    http_response_code($code);
    require_once VIEWS . "/errors/{$code}.tmpl.php";
    die;
}
function loadReqData($fillanble = [])
{
    $data = [];
    foreach ($_POST as $key => $val) {
        if (in_array($key, $fillanble)) {
            $data[$key] = $val;
        }
    }
    return $data;
}
?>