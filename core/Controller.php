<?php

class Controller {
    protected function render($view, $data = []) {
        // Extract data for use in views
        extract($data);
        // Include the view file
        require_once "../app/Views/{$view}.php";
    }
}
?>