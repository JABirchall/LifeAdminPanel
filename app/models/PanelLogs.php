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
     * @Column(type="string", length=6, nullable=false)
     * @var integer
     */
    public $datetime;

    /**
     * @Column(type="string", length=17, nullable=false)
     * @var string
     */
    public $admin_uid;

    /**
     * @Column(type="string", length=17, nullable=false)
     * @var string
     */
    public $user_uid;

    /**
     * @Column(type="string", nullable=false)
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
        $this->hasOne('admin_uid', "Players", "pid", ["alias" => "admin"]);
        $this->hasOne('user_uid', "Players", "pid", ["alias" => "player"]);
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

    public function beforeSave()
    {
        if($this->datetime instanceof \Carbon\Carbon) {
            $this->datetime = $this->datetime->toDateTimeString();
            return true;
        }

        $this->datetime = \Carbon\Carbon::now()->toDateTimeString();
        return true;
    }

    public function afterFetch()
    {
        $this->datetime = (isset($this->datetime)) ? \Carbon\Carbon::parse($this->datetime) : \Carbon\Carbon::now();
    }

}
