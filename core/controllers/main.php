<?php

function action_index(){
    //вызываем вью индекса
    require_once 'core/views/index.php';
}

function show_tours(){
    //вызываем вью с таблицами всех туров
    require_once 'core/views/tours.php';
}

function action_contacts(){
    echo 'contacts page';
}

function action_addClients(){
    require_once 'core/views/addClient.php';
}

function action_showemployee(){
    require_once 'core/views/employee.php';
}

function action_clients(){
    require_once 'core/views/clients.php';
}

function action_editClients(){
    require_once 'core/views/editClient.php';
//    require_once 'core/views/addClient.php';
}


function action_registration(){
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $formData = [
            'login' => htmlspecialchars($_POST['login']),
            'password' => trim($_POST['password']),
            'email' => trim($_POST['email']),
        ];

        $rules = [
            'login' => ['required', 'login'],
            'password' => ['required', 'password'],
            'email' => ['required', 'email'],
        ];

        $errors = validateForm($rules, $formData);

        if(empty($errors)) {
            //todo save new user
        }
    }

    renderView('registration', $errors);
}
