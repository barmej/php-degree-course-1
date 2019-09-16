<?php

$user = array(
    'name' => 'Sarah',
    'age' => 20,
    'role' => 'moderator'
);

if( $user['age'] > 15 && $user['role'] == 'moderator'){
    echo 'مرحبا بك ',$user['name'];
}else{
    echo 'ليس لديك صلاحية لمشاهدة هذه الصفحة';
}

?>