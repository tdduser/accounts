<?php
/**
 * Created by PhpStorm.
 * User: Bali
 * Date: 2015.08.08.
 * Time: 15:45
 */

namespace Performer;


class DetailsDataObject
{
    protected $age;
    protected $hairColor;

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }

    /**
     * @param mixed $hairColor
     */
    public function setHairColor($hairColor)
    {
        $this->hairColor = $hairColor;
    }


}