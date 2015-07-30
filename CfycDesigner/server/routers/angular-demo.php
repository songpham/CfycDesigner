<?php
$app->get('/angular-demo', function () use ($app) {
    $app->render('angular-demo/index.php'); // <-- SUCCESS
});
$app->post('/angular-demo', function () use ($app) {
    $request = $app->request();
    $app->render('angular-demo/indexPost.php', array('body' => $request->getBody())); // <-- SUCCESS
});
$app->delete('/angular-demo/:id', function ($id) use ($app) {
    $app->render('angular-demo/indexDelete.php', array('id' => $id)); // <-- SUCCESS
});
$app->get('/angular-demo/index', function () use ($app) {
    $app->render('angular-demo/index.php'); // <-- SUCCESS
});