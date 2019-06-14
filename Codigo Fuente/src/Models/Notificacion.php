<?php
class Notificacion extends Model {
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
    public $tipoNotificacionId;

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
    public $estadoId;

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
    public function getTipoNotificacionId() {
        return $this->tipoNotificacionId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $tipoNotificacionId ARGDESCRIPTION
     */
    public function setTipoNotificacionId($tipoNotificacionId) {
        $this->tipoNotificacionId = $tipoNotificacionId;
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
    public function getEstadoId() {
        return $this->estadoId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $estadoId ARGDESCRIPTION
     */
    public function setEstadoId($estadoId) {
        $this->estadoId = $estadoId;
    }

    function consultar(){
        
    }

    function notificar(){
        
    }

    function votacionBanda(){
        
    }
    
    function confirmarInvitacion(){

    }
}