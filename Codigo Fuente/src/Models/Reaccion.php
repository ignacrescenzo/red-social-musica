<?php
class Reaccion extends Model {
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
    public $publicacionId;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $artistaId;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $tipoReaccionId;

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
    public function getPublicacionId() {
        return $this->publicacionId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $publicacionId ARGDESCRIPTION
     */
    public function setPublicacionId($publicacionId) {
        $this->publicacionId = $publicacionId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getArtistaId() {
        return $this->artistaId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $artistaId ARGDESCRIPTION
     */
    public function setArtistaId($artistaId) {
        $this->artistaId = $artistaId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getTipoReaccionId() {
        return $this->tipoReaccionId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $tipoReaccionId ARGDESCRIPTION
     */
    public function setTipoReaccionId($tipoReaccionId) {
        $this->tipoReaccionId = $tipoReaccionId;
    }

    function consultar(){
        
    }

    function reaccionar(){
        
    }
}