<?php

class Players extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=6, nullable=false)
     */
    public $uid;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $aliases;

    /**
     *
     * @var string
     * @Column(type="string", length=17, nullable=false)
     */
    public $pid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $exp_total;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $exp_level;

    /**
     *
     * @var integer
     * @Column(type="integer", length=100, nullable=false)
     */
    public $cash;

    /**
     *
     * @var integer
     * @Column(type="integer", length=100, nullable=false)
     */
    public $bankacc;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $adminlevel;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $coplevel;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $mediclevel;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $donorlevel;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $ganglevel;

    /**
     *
     * @var integer
     * @Column(type="integer", length=4, nullable=false)
     */
    public $banking_pin;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $civ_licenses;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $cop_licenses;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $med_licenses;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $civ_gear;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $cop_gear;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $med_gear;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $civ_stats;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $cop_stats;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $med_stats;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    public $arrested;

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
    public $civ_alive;

    /**
     *
     * @var string
     * @Column(type="string", length=64, nullable=false)
     */
    public $civ_position;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    public $playtime;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $insert_time;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $last_seen;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $exp_perkPoints;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $exp_perks;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $jail_time;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("maldenlife");
        $this->setSource("players");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'players';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Players[]|Players|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Players|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
