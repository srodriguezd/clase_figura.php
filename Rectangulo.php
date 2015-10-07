<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 7/10/15
 * Time: 20:03
 */

namespace Figura;
require_once 'Figura.php';
require_once 'Punto.php';
require_once 'Cuadrado.php';

class Rectangulo extends Figura
{
    protected $_alto;

    /**
     * @param $alto
     * @param $ancho
     * @param Punto $origen
     */
    public function construct__Rectángulo($alto, $ancho, Punto $origen) {
        $this->_origen = $origen;
        $this->alto = $alto;
        $this->ancho = $ancho;
    }

    /**
     * @return mixed
     */
    public function getAlto()
    {
        return $this->_alto;
    }

    /**
     * @param mixed $alto
     */
    public function setAlto($alto)
    {
        $this->_alto = $alto;
    }


    /**
     * @param int $p
     */
    public function escalar($p) {
        $this->_alto = $this->_alto * $p;
        $this->_ancho =  $this->_ancho * $p;
    }

    /**
     * @return mixed
     */
    public function perímetro()
    {
        return $this->_ancho * 2 + $this->_ancho * 2;
        $this->_ancho *= n;
    }

    /**
     * @return mixed
     */
    public function area() {
        return $this->_ancho * $this->_ancho;
    }

    public function __toString(){
        return super.toString();
    }
}