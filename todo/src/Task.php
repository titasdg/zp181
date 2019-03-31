<?php 
namespace Tasker;

class Task{
    public $id;
    public $name;
    public $description;
    public $isComplete;

    public function showAll()
    {
        return $this->name;
    }

    public function setIsComplete($isComplete)
    {
        $this->isComplete = $isComplete;

        return $this;
    }
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getIsComplete()
    {
        return $this->isComplete;
    }
}
    

?>