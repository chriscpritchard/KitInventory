<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2018-03-20
 * Time: 13:06
 */


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="bags")
 */
class Bag
{
    /**
     * @ORM\ID @ORM\Column(type="guid") @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getID()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
}