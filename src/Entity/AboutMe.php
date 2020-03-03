<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AboutMeRepository")
 */
class AboutMe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    private $text = "Quam elementum pulvinar etiam non quam lacus suspendisse faucibus interdum. Diam vel quam elementum pulvinar etiam non quam lacus suspendisse. Mi in nulla posuere sollicitudin aliquam ultrices sagittis. Tellus at urna condimentum mattis pellentesque. Tristique senectus et netus et. Tincidunt ornare massa eget egestas purus. Arcu vitae elementum curabitur vitae nunc sed. Eu volutpat odio facilisis mauris. Aliquam purus sit amet luctus venenatis lectus magna fringilla urna. Laoreet id donec ultrices tincidunt arcu. Tortor at auctor urna nunc id. Nunc congue nisi vitae suscipit tellus. Placerat vestibulum lectus mauris ultrices eros. Pellentesque elit ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at. Eu sem integer vitae justo eget magna fermentum.";
    private $name = "test";

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText() :string
    {
        return $this->text;
    }

    public function getName() :string
    {
        return $this->name;
    }

}
