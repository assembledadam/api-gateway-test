<?php

$app = new Phalcon\Mvc\Micro();

$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, 'Not Found')->sendHeaders();
    echo 'Page not found.';
});

// begin route config
$app->get('/api/test', function () {
    echo "HELLO WORLD";
});

$app->handle();
