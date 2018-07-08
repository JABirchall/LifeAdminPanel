<?php

class Players extends \Phalcon\Mvc\Model
{

    const UNAUTHORISED = 0,
          MODERATOR = 1,
          ADMINISTRATOR = 2,
          SLT = 3,
          SMT = 4;

    /**
     *
     * @var integer
     */
    public $uid;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $aliases;

    /**
     *
     * @var string
     */
    public $pid;

    /**
     *
     * @var integer
     */
    public $exp_total;

    /**
     *
     * @var integer
     */
    public $exp_level;

    /**
     *
     * @var integer
     */
    public $cash;

    /**
     *
     * @var integer
     */
    public $bankacc;

    /**
     *
     * @var string
     */
    public $adminlevel;

    /**
     *
     * @var string
     */
    public $coplevel;

    /**
     *
     * @var string
     */
    public $mediclevel;

    /**
     *
     * @var string
     */
    public $donorlevel;

    /**
     *
     * @var string
     */
    public $ganglevel;

    /**
     *
     * @var integer
     */
    public $banking_pin;

    /**
     *
     * @var string
     */
    public $civ_licenses;

    /**
     *
     * @var string
     */
    public $cop_licenses;

    /**
     *
     * @var string
     */
    public $med_licenses;

    /**
     *
     * @var string
     */
    public $civ_gear;

    /**
     *
     * @var string
     */
    public $cop_gear;

    /**
     *
     * @var string
     */
    public $med_gear;

    /**
     *
     * @var string
     */
    public $civ_stats;

    /**
     *
     * @var string
     */
    public $cop_stats;

    /**
     *
     * @var string
     */
    public $med_stats;

    /**
     *
     * @var integer
     */
    public $arrested;

    /**
     *
     * @var integer
     */
    public $blacklist;

    /**
     *
     * @var integer
     */
    public $civ_alive;

    /**
     *
     * @var string
     */
    public $civ_position;

    /**
     *
     * @var string
     */
    public $playtime;

    /**
     *
     * @var string
     */
    public $insert_time;

    /**
     *
     * @var string
     */
    public $last_seen;

    /**
     *
     * @var integer
     */
    public $exp_perkPoints;

    /**
     *
     * @var string
     */
    public $exp_perks;

    /**
     *
     * @var integer
     */
    public $jail_time;

    /**
     *
     * @var integer
     */
    public $panelLevel;

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
