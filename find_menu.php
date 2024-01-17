<?php

    $domain = "messages";
    bindtextdomain($domain, "Modules/find/locale");
    bind_textdomain_codeset($domain, 'UTF-8');

    $name = "Find Devices";
    if ($session["lang"]=="cy_GB") $name = "Darganfod Dyfais";

    /*
    $menu_right[] = array(
        'id'=>"find_menu",
        'name'=>$name,
        'path'=>"find",
        'order' => 0,
        'icon'=>'icon-search icon-white'
    );*/
