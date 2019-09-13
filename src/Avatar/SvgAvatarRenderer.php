<?php

namespace App\Avatar;

class SvgAvatarRenderer
{
    private $template;

    public function __construct(string $template) {
        $this->template= $template;
    }

    public function render(AvatarMatrix $matrix) {
        $matrix->build();

        $result = $matrix->getMatrix();

        ob_start(); //debut de la tamporisation

        include $this->template;
        
        return ob_get_clean();
    }
}