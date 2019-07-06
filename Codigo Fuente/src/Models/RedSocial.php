<?php
class RedSocial extends Model {
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
    public $link;

    /**
     * PROPDESCRIPTION
     * 
     * @access public
     * @var PROPTYPE
     */
    public $bandaId;

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
    public function getLink() {
        return $this->link;
    }

    /**
     * METHODDESCRIPTION
     * 
     * @access public
     * @param ARGTYPE $link ARGDESCRIPTION
     */
    public function setLink($link) {
        $this->link = $link;
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

    public function guardarRedSocialBanda()
    {
        $array = [
            "BandaId" => $this->getBandaId(),
            "Link" => $this->getLink()
        ];

        $id = $this->insert($array);

        if($id)
            $this->setId($id);

        return $id;
    }

    public function existeRedSocial()
    {
        return $this->pageRows(0, 1, "Link LIKE '%" . $this->getLink() . "%'");
    }
}