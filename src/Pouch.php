<?php
/**
 * Created by PhpStorm.
 * User: chris
 * Date: 2018-03-22
 * Time: 03:14
 */

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pouches")
 */
class Pouch
{
    /**
     * @ORM\ID @ORM\Column(type="guid") @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $name;

    /**
     * @var colour
     * @ORM\Column(type="string")
     */
    private $colour;

    /**
     * @var bag
     * @ORM\ManyToOne(targetEntity="Bag")
     * @ORM\JoinColumn(name="bag_id", referencedColumnName="id")
     */
    private $bag;

    function __construct(string $name, string $colour, bag $bag)
    {
        $this->name = $name;
        $this->colour = $colour;
        $this->bag = $bag;
    }

    public function getID()
    {
        return $this->id;
    }

}