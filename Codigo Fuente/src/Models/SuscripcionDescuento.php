<?php
class SuscripcionDescuento extends Model {
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
    public $descuentoId;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $suscripionId;

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
    public function getDescuentoId() {
        return $this->descuentoId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $descuentoId ARGDESCRIPTION
     */
    public function setDescuentoId($descuentoId) {
        $this->descuentoId = $descuentoId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getSuscripionId() {
        return $this->suscripionId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $suscripionId ARGDESCRIPTION
     */
    public function setSuscripionId($suscripionId) {
        $this->suscripionId = $suscripionId;
    }

    function consultar(){
        
    }

    function crear(){
        
    }
    
    function eliminar(){

    }
}