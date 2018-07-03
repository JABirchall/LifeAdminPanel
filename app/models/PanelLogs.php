<?php

class PanelLogs extends \Phalcon\Mvc\Model
{

    /**
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=6, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     */
    public $admin_uid;

    /**
     *
     * @var string
     */
    public $user_uid;

    /**
     *
     * @var string
     */
    public $action;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("maldenlife");
        $this->setSource("panellogs");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'panellogs';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Panellogs[]|Panellogs|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Panellogs|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
