<?php
class View {
    public function render($template, $data = []) {
        include_once($template);
    }
}
