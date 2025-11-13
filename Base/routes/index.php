<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->index(),
    'login'         => (new HomeController)->login(),
    'register'         => (new HomeController)->register(),
    'logout'         => (new HomeController)->logout(),

    //admin
    'admin-dashboard'         => (new DashboardController )->index(),

    'admin-list-tour_categories'         => (new TourcategoryController  )->index(),
    'admin-create-tour_categories'         => (new TourcategoryController  )->create(),
    'admin-update-tour_categories'         => (new TourcategoryController )->update(),
    'admin-delete-tour_categories'         => (new TourcategoryController )->delete(),


        'admin-list-users'         => (new UserController  )->index(),
    'admin-create-users'         => (new UserController  )->create(),
    'admin-update-users'         => (new UserController )->update(),
    'admin-delete-users'         => (new UserController )->delete(),


};