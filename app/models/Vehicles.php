<?php

class Vehicles extends \Phalcon\Mvc\Model
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
     * @Column(type="string", length=16, nullable=false)
     */
    public $side;

    /**
     *
     * @var string
     * @Column(type="string", length=64, nullable=false)
     */
    public $classname;

    /**
     *
     * @var string
     * @Column(type="string", length=16, nullable=false)
     */
    public $type;

    /**
     *
     * @var string
     * @Column(type="string", length=17, nullable=false)
     */
    public $pid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $alive;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $blacklist;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $active;

    /**
     *
     * @var integer
     * @Column(type="integer", length=20, nullable=false)
     */
    public $plate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $color;

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
     * @Column(type="string", nullable=false)
     */
    public $fuel;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=false)
     */
    public $damage;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $insert_time;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $insure;

    /**
     *
     * @var string
     * @Column(type="string", length=300, nullable=false)
     */
    public $tuning_data;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $vis;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("maldenlife");
        $this->setSource("vehicles");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'vehicles';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Vehicles[]|Vehicles|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Vehicles|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
