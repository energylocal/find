<?php
// no direct access
defined('EMONCMS_EXEC') or die('Restricted access');
function find_controller() {
    global $session, $route, $mysqli, $log, $settings;

    // Default route format
    $route->format = 'json';
    
    // Result can be passed back at the end or part way in the controller
    $result = false;
    
    // Read access API's and pages
    if ($route->action == "") {
        $route->format = 'html';
        $content = view("Modules/find/Views/intro.php", array());
        return array('content'=>$content,'page_classes'=>array('collapsed','manual'));
    }
    if ($route->action == "ok") {
        $route->format = 'html';
        $content = view("Modules/find/Views/find.php", array());
        return array('content'=>$content,'page_classes'=>array('collapsed','manual'));
    }
    
    // Pass back result
    return array('content' => $result);
}
