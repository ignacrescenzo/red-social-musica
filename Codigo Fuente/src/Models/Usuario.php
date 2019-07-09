<?php
/**
 * Created by PhpStorm.
 * User: Globons
 * Date: 11/5/2019
 * Time: 11:12
 */

class Usuario extends Model
{
    private $id;
    private $nombre;
    private $apellido;
    private $username;
    private $upassword;
    private $email;
    private $fechaNacimiento;
    private $rolId;
    private $generoId;
    private $provinciaId;
    private $partidoId;
    private $localidadId;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getUpassword()
    {
        return $this->upassword;
    }

    /**
     * @param mixed $upassword
     */
    public function setUpassword($upassword)
    {
        $this->upassword = $upassword;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param mixed $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * @return mixed
     */
    public function getRolId()
    {
        return $this->rolId;
    }

    /**
     * @param mixed $rolId
     */
    public function setRolId($rolId)
    {
        $this->rolId = $rolId;
    }

    /**
     * @return mixed
     */
    public function getGeneroId()
    {
        return $this->generoId;
    }

    /**
     * @param mixed $generoId
     */
    public function setGeneroId($generoId)
    {
        $this->generoId = $generoId;
    }

    /**
     * @return mixed
     */
    public function getProvinciaId()
    {
        return $this->provinciaId;
    }

    /**
     * @param mixed $provinciaId
     */
    public function setProvinciaId($provinciaId)
    {
        $this->provinciaId = $provinciaId;
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
     * @return mixed
     */
    public function getLocalidadId()
    {
        return $this->localidadId;
    }

    /**
     * @param mixed $localidadId
     */
    public function setLocalidadId($localidadId)
    {
        $this->localidadId = $localidadId;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function registrarUsuario()
    {
        $array = [
            "Nombre" => $this->getNombre(),
            "Apellido" => $this->getApellido(),
            "Username" => $this->getUsername(),
            "UPassword" => $this->getUpassword(),
            "FechaNacimiento" => $this->getFechaNacimiento(),
            "Email" => $this->getEmail(),
            "RolId" => $this->getRolId(),
            "GeneroId" => $this->getGeneroId(),
            "ProvinciaId" => $this->getProvinciaId(),
            "PartidoId" => $this->getPartidoId(),
            "LocalidadId" => $this->getLocalidadId()
        ];
        $id = $this->insert($array);

        if($id)
            $this->setId($id);

        return $id;
    }

    public function loguearUsuarioDB ()
    {
        $row = $this->pageRows(0, 1, "(Username LIKE '$this->username' OR Email LIKE '$this->email') AND FechaBaneo IS NULL AND FechaBaja IS NULL AND UPassword LIKE '$this->upassword'");

        if($row) {
            $this->setId($row[0]["Id"]);
            $this->setEmail($row[0]["Email"]);
            $this->setUsername($row[0]["Username"]);
            $this->setRolId($row[0]["RolId"]);
        }

        return $row;
    }

    public function traerUsuario($pk)
    {
        $usuario = $this->selectByPk($pk);

        $this->setNombre($usuario["Nombre"]);
        $this->setApellido($usuario["Apellido"]);
        $this->setUsername($usuario["Username"]);
        $this->setEmail($usuario["Email"]);
        $this->setUpassword($usuario["UPassword"]);
        $this->setFechaNacimiento($usuario["FechaNacimiento"]);
        $this->setGeneroId($usuario["GeneroId"]);
        $this->setProvinciaId($usuario["ProvinciaId"]);
        $this->setPartidoId($usuario["PartidoId"]);
        $this->setLocalidadId($usuario["LocalidadId"]);
    }

    public function actualizarUsuario()
    {
        $array = [
            "Id" => $this->getId(),
            "Nombre" => $this->getNombre(),
            "Apellido" => $this->getApellido(),
            "Email" => $this->getEmail(),
            "UPassword" => $this->getUpassword(),
            "FechaNacimiento" =>  $this->getFechaNacimiento(),
            "GeneroId" =>  $this->getGeneroId(),
            "ProvinciaId" => $this->getProvinciaId(),
            "PartidoId" =>  $this->getPartidoId(),
            "LocalidadId" => $this->getLocalidadId()
        ];

        return $this->update($array);
    }

    function iniciarSesion(){
        
    }

    function cerrarSesion(){
        
    }
    function eliminar(){
        
    }
}