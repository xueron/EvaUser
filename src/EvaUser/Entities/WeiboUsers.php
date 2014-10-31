<?php

namespace Eva\EvaUser\Entities;

class WeiboUsers extends \Eva\EvaEngine\Mvc\Model
{
    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $name;

    /**
     *
     * @var string
     */
    public $screenName;

    /**
     *
     * @var string
     */
    public $avatar;

    public function getName()
    {
        return $this->screenName ?: $this->name;
    }

}
