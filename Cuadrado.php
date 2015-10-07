<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 7/10/15
 * Time: 19:50
 */

namespace Figura;
require_once 'Figura.php';
require_once 'Punto.php';

class Cuadrado extends Figura
{
    protected $_ancho;

    /**
     * Cuadrado constructor.
     * @param $_ancho
     */
    public function __construct($ancho, $origen)
    {
        $this->_origen = $origen;
        $this->_ancho = $ancho;
    }

    /**
     * @return Punto
     */
    public function getAncho()
    {
        return $this->_ancho;
    }

    /**
     * @param Punto $ancho
     */
    public function setAncho($ancho)
    {
        $this->_ancho = $ancho;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "Cuadrado{" + $this->_origen + "ancho=" + $this->_ancho + '}';
    }

    /**
     * @return mixed
     */
    public function area()
    {
    $resultado = ($this->_ancho*$this->_ancho);
    return $resultado;
    }

    /**
     * @return Punto
     */
    public function perímetro()
    {
        $resultado = ($this->_ancho * 4);
        return $resultado;
    }

    /**
     * @param int $p
     */
    public function escalar($p)
   {
       $this->_setAncho(($this->_ancho + $this->_ancho) * ($p / 100));


   }
}