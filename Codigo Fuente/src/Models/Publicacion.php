<?php
class Publicacion extends Model {
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
    public $bandaId;

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
    public $mensaje;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $multimedia;

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
    public function getBandaId() {
        return $this->bandaId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $bandaId ARGDESCRIPTION
     */
    public function setBandaId($bandaId) {
        $this->bandaId = $bandaId;
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
    public function getMultimedia() {
        return $this->multimedia;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $multimedia ARGDESCRIPTION
     */
    public function setMultimedia($multimedia) {
        $this->multimedia = $multimedia;
    }

    function consultar(){
        
    }

    function crear(){
        
    }

    function difundir(){
        
    }
    
    function eliminar(){

    }

    function descargarMultimedia(){
        
    }

    function cargarMultimedia(){
        
    }
}