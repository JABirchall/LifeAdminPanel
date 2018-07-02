<?php

class Containers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=6, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=17, nullable=false)
     */
    public $pid;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $classname;

    /**
     *
     * @var string
     * @Column(type="string", length=64, nullable=true)
     */
    public $pos;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $inventory;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $gear;

    /**
     *
     * @var string
     * @Column(type="string", length=128, nullable=true)
     */
    public $dir;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $active;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $owned;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $insert_time;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("maldenlife");
        $this->setSource("containers");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'containers';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Containers[]|Containers|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Containers|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
