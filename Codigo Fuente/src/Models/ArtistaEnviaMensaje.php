<?php
class ArtistaEnviaMensaje extends Model {
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
    public $artistaOrigenId;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $artistaDestinoId;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $mensaje;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $fecha;

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
    public function getArtistaOrigenId() {
        return $this->artistaOrigenId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $artistaOrigenId ARGDESCRIPTION
     */
    public function setArtistaOrigenId($artistaOrigenId) {
        $this->artistaOrigenId = $artistaOrigenId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getArtistaDestinoId() {
        return $this->artistaDestinoId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $artistaDestinoId ARGDESCRIPTION
     */
    public function setArtistaDestinoId($artistaDestinoId) {
        $this->artistaDestinoId = $artistaDestinoId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getMensaje() {
        return $this->mensaje;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $mensaje ARGDESCRIPTION
     */
    public function setMensaje($mensaje) {
        $this->mensaje = $mensaje;
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

    function consultar(){
        
    }

    function crear(){
        
    }
}