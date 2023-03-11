<?php
namespace Drupal\hello_42\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\UserInterface;

class Hello42Controller extends ControllerBase {

    public function hello42($name) {
        if ($name != 42){
            return [
                '#type' => 'markup',
                '#markup' => $this->('La respuesta és 42, zopenco, estudiate la guía del autoestopista galàctico.'),
            ];
        } else {
            return [
                '#type' => 'markup',
                '#markup' => $this->('La respuesta és 42, Felicidades'),
            ];
        }
    }
}