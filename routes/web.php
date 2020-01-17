<?php

$router->get('/',"SortController@get");
$router->post('/sort/bubble',"BubbelSortController@post");
$router->post('/sort/quick',"QuickSortController@post");
$router->post('/sort/selection',"SelectionSortController@post");