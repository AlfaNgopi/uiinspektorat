<?php
    function get_menu()
    {
        $ci = & get_instance();
        $menu = $ci->db->query("SELECT * FROM menu")->result_array();

        return $menu;
    }