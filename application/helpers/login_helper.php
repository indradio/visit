<?php

function is_logged_in()
{
    $dt = get_instance();
    if (!$dt->session->userdata('email')) {
        redirect('auth');
    }
}