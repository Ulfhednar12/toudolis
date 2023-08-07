<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TaskRepository::class)]
class Task
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $TaskName = null;

    #[ORM\Column(length: 255)]
    private ?string $TaskDate = null;

    #[ORM\Column(length: 255)]
    private ?string $Taskdeadline = null;

    #[ORM\Column(length: 255)]
    private ?string $TaskPriority = null;

    #[ORM\Column(length: 255)]
    private ?string $TaskStatus = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTaskName(): ?string
    {
        return $this->TaskName;
    }

    public function setTaskName(string $TaskName): static
    {
        $this->TaskName = $TaskName;

        return $this;
    }

    public function getTaskDate(): ?string
    {
        return $this->TaskDate;
    }

    public function setTaskDate(string $TaskDate): static
    {
        $this->TaskDate = $TaskDate;

        return $this;
    }

    public function getTaskdeadline(): ?string
    {
        return $this->Taskdeadline;
    }

    public function setTaskdeadline(string $Taskdeadline): static
    {
        $this->Taskdeadline = $Taskdeadline;

        return $this;
    }

    public function getTaskPriority(): ?string
    {
        return $this->TaskPriority;
    }

    public function setTaskPriority(string $TaskPriority): static
    {
        $this->TaskPriority = $TaskPriority;

        return $this;
    }

    public function getTaskStatus(): ?string
    {
        return $this->TaskStatus;
    }

    public function setTaskStatus(string $TaskStatus): static
    {
        $this->TaskStatus = $TaskStatus;

        return $this;
    }
}
