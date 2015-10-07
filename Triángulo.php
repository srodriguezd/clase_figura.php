<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 7/10/15
 * Time: 19:39
 */

namespace Figura;
require_once 'Punto.php';
require_once 'Figura.php';

class Triángulo extends Figura
{
    private $_base;

    private $_altura;

    /**
     * Triángulo constructor.
     * @param $_altura
     * @param $_base
     */
    public function __construct($_altura, $_base, $_origen)
    {
        $this->_origen = $origen;
        $this->_altura = $_altura;
        $this->_base = $_base;
    }

    /**
     * @return Punto
     */
    public function getAltura()
    {
        return $this->_altura;
    }

    /**
     * @param Punto $altura
     */
    public function setAltura($altura)
    {
        $this->_altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->_base;
    }

    /**
     * @param mixed $base
     */
    public function setBase($base)
    {
        $this->_base = $base;
    }

    /**
     * @return float
     */
    public function area()
    {
        $resultado = ($this->_base*$this->_base/2);
        return $resultado;
    }

    /**
     * @return mixed
     */
    public function perímetro()
    {
        $resultado = ($this->_base * 3 ); //Esto si fuera equilátero...
        return $resultado;
    }

    /**
     * @param int $r
     */
    public function escalar($p)
   {
       $this->_setBase(($this->_base) * ($p/100));
       $this->setAltura(($this->_base) * ($p/100));

   }

    /**
     * @return string
     */
    public function __toString()
    {
        return 'Triangulo[' . $this->_origen . ', ' . $this->_base . ', ' . $this->_altura . ']';
    }

}