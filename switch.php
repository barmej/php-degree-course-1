<?php

$member = array(
    'id' => 1,
    'name' => 'Salem',
    'role' => 'admin' //role تستخدم لتوضيح صلاحيات المستخدم
);

switch($member['role']){
    case 'admin':
        echo 'مرحبا بالمدراء';
        break;

    case 'moderator':
        echo 'مرحبا بالمشرفين';
        break;

    case 'user':
        echo 'مرحبا بالأعضاء';
        break;

    default:
        echo 'ليست لديك صلاحيات';
        break;
}

?>