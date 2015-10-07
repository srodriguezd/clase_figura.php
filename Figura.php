<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 6/10/15
 * Time: 17:00
 */

namespace Figura;
require_once 'Punto.php';

abstract class Figura {
    /**
     * @var Punto
     */
    protected $_origen;
    /**
     * @var int
     */
    private static $_numFiguras;
    /**
     * @param Punto $_origen
     */

    function __construct(Punto $_origen){
        self::$_numFiguras++;
        $this->_origen = $_origen;
    }

    /**
     * @return int
     */
    public static function getNumFiguras()
    {
        return self::$_numFiguras;
    }

    /**
     * @return Punto
     */
    public function getOrigen()
    {
        return $this->_origen;
    }

    /**
     * @param int $numFiguras
     */
    public static function setNumFiguras($numFiguras)
    {
        self::$_numFiguras = $numFiguras;
    }

    /**
     * @param Punto $origen
     */
    public function setOrigen($origen)
    {
        $this->_origen = $origen;
    }

    /**
     *
     * @return int
     */
    abstract public function area();

    /**
     * @return mixed
     */
    public function numFiguras(){
        return self::$_numFiguras;

    }

    /**
     * @return mixed
     */
    abstract public function perímetro();


    /**
    * @param int $dx
    */
    abstract public function escalar($dx);

    /**
     * @return mixed
     */
     function __toString(){
        return $this->_origen->__toString();
     }



}