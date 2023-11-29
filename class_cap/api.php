<?php
interface Template
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

$greeting = new class implements Template {
    public function setVariable($name, $var) {
        // Method implementation
    }
    public function getHtml($template) {
        // Method implementation
    }
};