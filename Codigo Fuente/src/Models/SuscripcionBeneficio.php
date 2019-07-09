<?php
class SuscripcionBeneficio extends Model {
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
    public $beneficioId;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $suscripcionId;

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
    public function getBeneficioId() {
        return $this->beneficioId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $beneficioId ARGDESCRIPTION
     */
    public function setBeneficioId($beneficioId) {
        $this->beneficioId = $beneficioId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getSuscripcionId() {
        return $this->suscripcionId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $suscripcionId ARGDESCRIPTION
     */
    public function setSuscripcionId($suscripcionId) {
        $this->suscripcionId = $suscripcionId;
    }

    function consultar(){
        
    }

    function crear(){
        
    }

    function modificar(){
        
    }
    
    function eliminar(){

    }
}