<?php

// Personal Info
function get_personal_info($fieldName) {
    $userInfo = [
        'name' => 'Michał Łukaszewicz',
        'phone' => '73154095',
        'email' => 'michal.lukaszewicz.dev@gmail.com',
        'birthDate' => '04/03/1989'
    ];

    if ($fieldName === null ) {
        return $userInfo;
    } else {
        if (array_key_exists($fieldName, $userInfo)) {
            return $userInfo[$fieldName];
        } else {
            return "Field doesn't exist";
        }
    }
}

// Icons
function get_icon(string $iconName, string $type = 'fab' ): string {
    return "<i class='$type fa-$iconName'></i>";
}




