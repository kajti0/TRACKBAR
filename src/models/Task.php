<?php

class Task
{
    private $title;
    private $description;
    private $created_at;
    private $due_at;
    private $created_by;


    public function __construct($title, $description, $due_at, $created_by = '0', $created_at = '0')
    {
        $this->title = $title;
        $this->description = $description;
        $this->created_at = $created_at;
        $this->due_at = $due_at;
        $this->created_by = $created_by;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getDescription() :?string
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getDueAt()
    {
        return $this->due_at;
    }

    public function setDueAt($due_at): void
    {
        $this->due_at = $due_at;
    }

    public function getCreatedBy()
    {
        return $this->created_by;
    }

    public function setCreatedBy($created_by): void
    {
        $this->created_by = $created_by;
    }

}