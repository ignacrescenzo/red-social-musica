<?php
class Cobranza extends Model {
    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $id;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $fecha;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $operacion;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $tarjetaDeCreditoId;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $administradorId;

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getId() {
        return $this->id;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $id ARGDESCRIPTION
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getFecha() {
        return $this->fecha;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $fecha ARGDESCRIPTION
     */
    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getOperacion() {
        return $this->operacion;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $operacion ARGDESCRIPTION
     */
    public function setOperacion($operacion) {
        $this->operacion = $operacion;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getTarjetaDeCreditoId() {
        return $this->tarjetaDeCreditoId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $tarjetaDeCreditoId ARGDESCRIPTION
     */
    public function setTarjetaDeCreditoId($tarjetaDeCreditoId) {
        $this->tarjetaDeCreditoId = $tarjetaDeCreditoId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getAdministradorId() {
        return $this->administradorId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $administradorId ARGDESCRIPTION
     */
    public function setAdministradorId($administradorId) {
        $this->administradorId = $administradorId;
    }

    function consultar(){
        
    }
}