<?php
//Verifier la clé (tableau) pour gérer les cas d'erreur en affichant le contenu ou null
function getValue(&$value)
{
    return isset($value) && !empty($value) && $value ? $value : null;
}
//Sert à détacter sur la page ou l'on n'est
function isUri($uri)
{
    return $_SERVER['REQUEST_URI'] === $uri;
}

function addCurrentClassUri($uri)
{
    return isUri($uri) ? 'active' : null;
}


function isAdmin($user)
{
    $emails = [
        '5d0f4c65b9be9e7f7d8d6eb0cee157e1714e7914f7e8bf4151a3538945963b71',
        '02c1452fe64b0885b1b081efecc3be2df7ea9e7faa4ee6db80b1eb3d3005023b',
        '81a1dab3f3314f73208d6f07511c75f01c0e8a459ef78259eb9996b76cabc570',
        '28d7394130c9553a75b96ba5e31ae619ab9ffa7940555a7fa462e5d97dc98197'
    ];

    return in_array(hash('sha256', $user['email']), $emails);
}

function getAvatarUrl($email)
{
    return 'https://www.gravatar.com/avatar/' . md5($email) . '?s=400&default=mp';
}

function middleware($name)
{
    require_once $_SERVER['DOCUMENT_ROOT'] . '/middleware/' . $name . '.php';
}