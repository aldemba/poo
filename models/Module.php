<?php 
namespace App\Model;
use App\Core\Model; 
class Module extends Model{
    private int $id;
    private string $libelleModule;






    
    public function professeurs():array{
        
        return [];
    }



    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelleModule
     */ 
    public function getLibelleModule()
    {
        return $this->libelleModule;
    }

    /**
     * Set the value of libelleModule
     *
     * @return  self
     */ 
    public function setLibelleModule($libelleModule)
    {
        $this->libelleModule = $libelleModule;

        return $this;
    }
}