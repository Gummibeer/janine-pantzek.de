<?php

$router->get('/', function () {
    $data = [];
    $data['content'] = load_data_json('home');

    return view('page', $data);
});

foreach(pages() as $route => $page) {
    $router->get($route, function () use ($page) {
        $data = [];
        $data['content'] = load_data_json($page['data']);
        if(isset($page['title'])) {
            $data['title'] = $page['title'];
        }

        return view('page', $data);
    });
}
