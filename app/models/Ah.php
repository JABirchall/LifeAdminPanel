<?php

class Ah extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=false)
     */
    public $type;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=false)
     */
    public $amount;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $item;

    /**
     *
     * @var integer
     * @Column(type="integer", length=100, nullable=false)
     */
    public $price;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $seller;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $sellername;

    /**
     *
     * @var integer
     * @Column(type="integer", length=5, nullable=false)
     */
    public $status;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $time;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("maldenlife");
        $this->setSource("ah");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'ah';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ah[]|Ah|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Ah|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
