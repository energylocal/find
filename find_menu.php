<?php

    $domain = "messages";
    bindtextdomain($domain, "Modules/find/locale");
    bind_textdomain_codeset($domain, 'UTF-8');

    $menu_right[] = array(
        'id'=>"find_menu",
        'name'=>_("Find Devices"),
        'path'=>"find",
        'order' => 0,
        'icon'=>'icon-search icon-white'
    );
