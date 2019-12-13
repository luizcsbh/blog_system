<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\ENtity()
 */
final class Post
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GenerateValue()
     */
    private ?int $int = null;

    /**
     * @ORM\Column()
     */
    public string $title;

    /**
     * @ORM\Column
     */
    public string $description;

    /**
     * @ORM\Column(type="datetime")
     */
    private \Datetime $createAt;

    public function __construct(string $title, string $description)
    {
        $this->title = $title;
        $this->description = $description;
        $this->createAt = new \Datetime();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCreatedAt(): \Datetime
    {
        return $this->createAt;
    }
}

?>