<?php

class Messages extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=12, nullable=false)
     */
    public $uid;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $fromID;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $toID;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $message;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $fromName;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $toName;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $time;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("maldenlife");
        $this->setSource("messages");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'messages';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Messages[]|Messages|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Messages|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
