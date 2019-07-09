<?php
class Banda extends Model {
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
    public $nombre;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $genero;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $localidadId;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $provinciaId;

    public $partidoId;

    public $liderId;

    /**
     * @return mixed
     */
    public function getLiderId()
    {
        return $this->liderId;
    }

    /**
     * @param mixed $liderId
     */
    public function setLiderId($liderId)
    {
        $this->liderId = $liderId;
    }

    /**
     * @return mixed
     */
    public function getPartidoId()
    {
        return $this->partidoId;
    }

    /**
     * @param mixed $partidoId
     */
    public function setPartidoId($partidoId)
    {
        $this->partidoId = $partidoId;
    }

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
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $nombre ARGDESCRIPTION
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getGenero() {
        return $this->genero;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $genero ARGDESCRIPTION
     */
    public function setGenero($genero) {
        $this->genero = $genero;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getLocalidadId() {
        return $this->localidadId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $localidadId ARGDESCRIPTION
     */
    public function setLocalidadId($localidadId) {
        $this->localidadId = $localidadId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @return RETURNTYPE RETURNDESCRIPTION
     */
    public function getProvinciaId() {
        return $this->provinciaId;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $provinciaId ARGDESCRIPTION
     */
    public function setProvinciaId($provinciaId) {
        $this->provinciaId = $provinciaId;
    }

    function consultar(){
        
    }

    function registrar(){
        
    }

    function modificar(){
        
    }
    
    function eliminar(){

    }

    function agregarMiembro(){
        
    }

    public function crearBanda()
    {
        $array = [
            "Nombre" => $this->getNombre(),
            "ProvinciaId" => $this->getProvinciaId(),
            "PartidoId" => $this->getPartidoId(),
            "LocalidadId" => $this->getLocalidadId(),
            "LiderId" => $this->getLiderId(),
            "GeneroMusical" => $this->getGenero()
        ];

        $id = $this->insert($array);

        if($id)
            $this->setId($id);

        return $id;
    }

    public function existeBanda()
    {
        return $this->pageRows(0, 1, "Nombre LIKE '" . $this->getNombre() . "'");
    }

    public function traerMisBandas($pk)
    {
        $bandas = array();

        $rows = $this->pageRows(0, PHP_INT_MAX, "LiderId = $pk");

        foreach($rows as $row)
        {
            $banda = new Banda();
            $banda->db->disconnect();
            $banda->setId($row["Id"]);
            $banda->setNombre($row["Nombre"]);
            $banda->setProvinciaId($row["ProvinciaId"]);
            $banda->setPartidoId($row["PartidoId"]);
            $banda->setLocalidadId($row["PartidoId"]);
            $banda->setLiderId($row["LiderId"]);
            $banda->setGenero($row["GeneroMusical"]);
            $bandas[] = $banda;
        }

        return $bandas;
    }
}