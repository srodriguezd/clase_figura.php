<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 6/10/15
 * Time: 15:58
 */

namespace Figura;


class Punto
{
    //Declaración de atributos
    private $_x;
    private $_y;

    //Constructor
    public function __construct($_x, $_y){
        $this->_x = $_x;
        $this->_y = $_y;
    }

    //Definición de métodos
    /**
     * @return mixed
     */
    public function getX()
    {
        return $this->_x;
    }
    /**
     * @return mixed
     */
    public function getY()
    {
        return $this->_y;
    }

    /**
     * @param mixed $x
     */
    public function setX($x)
    {
        $this->_x = $x;
    }

    /**
     * @param mixed $y
     */
    public function setY($y)
    {
        $this->_y = $y;
    }

   public function ___toString(){
     return "("+$this->_x+","+$this->_y+")";
   }

   public  function desplazar($x, $y){
        $this->_x = $this->_x + $x;
        $this->_y = $this->_y + $y;
   }

   public function distancia (Punto $p){
        $resultado = Math.sqrt(Math.pow($p.getX()-$this->_x,2) + Math.pow($p.getY()-$this->_y,2));
        return $resultado;
   }
}