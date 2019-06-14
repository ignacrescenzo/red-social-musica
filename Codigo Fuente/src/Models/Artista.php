<?php
class Artista extends Usuario {
    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $generoMusical;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $instrumento;

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
    public function getGeneroMusical() {
        return $this->generoMusical;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $generoMusical ARGDESCRIPTION
     */
    public function setGeneroMusical($generoMusical) {
        $this->generoMusical = $generoMusical;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getInstrumento() {
        return $this->instrumento;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $instrumento ARGDESCRIPTION
     */
    public function setInstrumento($instrumento) {
        $this->instrumento = $instrumento;
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
    function seguirArtista(){
        
    }

    function comprarSuscripcion(){
        
    }

    function cancelarSuscripcion(){
        
    }
    
    function realizarPublicacion(){

    }
    function consultarPerfilArtistico(){
        
    }

    function consultarPublicaciones(){
        
    }

    function consultarDifusiones(){
        
    }
    
    function consultarBandasPropias(){

    }
    function consultarSuscripcion(){
        
    }

    function buscarArtistaOBanda(){
        
    }

    function enviarMensaje(){
        
    }
    
    function reportar(){

    }
    function cambiarSuscripcion(){
        
    }

    function consultarEstadisticas(){
        
    }

    function consultarNotificaciones(){
        
    }
    
    function reaccionar(){

    }
    function comentar(){
        
    }

    function abandonarBanda(){
        
    }

    function difundir(){
        
    }
    
    function descargarContenido(){

    }

    function crearBanda(){
        
    }

    function registrarTarjeta(){
        
    }

    function votar(){
        
    }
    
    function eliminarTarjeta(){

    }

    function responderInvitacion(){
        
    }

}