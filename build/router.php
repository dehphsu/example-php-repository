<?php
// Set timezone
date_default_timezone_set("UTC");

$config = array();

// Default index file
$config['index'] = array("index.php", "index.html");

// Optional array of authorized client IPs for a bit of security
$config['hostsAllowed'] = array();

function logAccess($status = 200)
{
    file_put_contents(
        "php://stdout",
        sprintf(
            "[%s] %s:%s [%s]: %s\n",
            date("D M j H:i:s Y"),
            $_SERVER["REMOTE_ADDR"],
            $_SERVER["REMOTE_PORT"],
            $status,
            $_SERVER["REQUEST_URI"]
        )
    );
}

// Parse allowed host list
if (!empty($config['hostsAllowed'])) {
    if (!in_array($_SERVER['REMOTE_ADDR'], $config['hostsAllowed'])) {
        logAccess(403);
        http_response_code(403);
        displayError(403);
        exit;
    }
}

// if requesting a directory then serve the default index
$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$ext = pathinfo($path, PATHINFO_EXTENSION);
if (empty($ext)) {
    foreach ($config['index'] as $strIndex) {
        $path = rtrim($path, "/") . "/";
        if (file_exists($_SERVER["DOCUMENT_ROOT"] . $path.$strIndex)) {
            $path = $path.$strIndex;
            break;
        }
    }
}

// If the file exists then return false and let the server handle it
if (file_exists($_SERVER["DOCUMENT_ROOT"] . $path)) {
    return false;
}

// default behavior
logAccess(404);
http_response_code(404);
displayError(404);

function displayError($code)
{
    $errors = array(
        403 => array(
            'title'       => '403: Forbidden',
            'description' => 'Sorry, the requested resource is not accessible.',
        ),
        404 => array(
            'title'       => '404: Not Found',
            'description' => 'Sorry, the requested resource does not exist.',
        ),
        'default' => array(
            'title'       => 'Error',
            'description' => 'An unknown error has occured.',
        ),
    );
    if (isset($errors[$code])) {
        $selectError = $errors[$code];
    } else {
        $selectError = $errors['default'];
    }
    echo <<<EOT
<!doctype html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <title>{$code}</title>
 </head>
 <body>
  <h1>{$selectError['title']}</h1>
  <p>{$selectError['description']}</p>
 </body>
</html>
EOT;
}
