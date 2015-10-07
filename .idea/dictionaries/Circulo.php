<?php
namespace Figura;
require_once 'Punto.php';

/**
 * Created by PhpStorm.
 * User: sara
 * Date: 7/10/15
 * Time: 19:26
 */

class Círculo extends Figura
{

    /**
     * @var Punto
     */
    private $_radio;

    /**
     * Círculo constructor.
     * @param $_radio
     */
    public function __construct($_radio, Punto $_origen)
    {
        $this->_origen = $origen;
        $this->_radio = $_radio;
    }

    /**
     * @return mixed
     */
    public function getRadio()
    {
        return $this->_radio;
    }

    /**
     * @param mixed $radio
     */
    public function setRadio($radio)
    {
        $this->_radio = $radio;
    }

    /**
     * @return string
     */
    public function area()
    {
        $resultado = 3.1416 * Math.pow($this->_radio, 2);
        return $resultado;
    }

    /**
     * @return int
     */
    public function perímetro()
    {
        $resultado = 2 * 3.1416 * $this->_radio;
        return $resultado;
    }

    /**
     * @param double $
     */
    public function escalar($p)
    {
        $this->setRadio(($this->_radio + $this->_radio) * ($p / 100));

    }

    /**
     * @return string
     */
    public function __toString()
    {
        return 'Circulo[' . $origenToString . ', ' . $this->_radio . ']';
    }

}
