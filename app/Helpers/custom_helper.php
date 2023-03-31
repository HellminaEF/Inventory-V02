<?php
function userLogin()
{
    $db = \config\Database::connect();
    return $db->table('user')->where('id', session('id'))->get()->getRow();
}
