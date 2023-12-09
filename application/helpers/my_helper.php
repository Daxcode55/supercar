<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('is_menu_active')) {
    function is_menu_active($menu, $current_controller)
    {
        return ($menu == $current_controller) ? 'active' : '';
    }
}