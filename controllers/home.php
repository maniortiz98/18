<?php
class home extends controllers
{
    public function __construct(){
        parent::__construct();

    }
    public function home($params)
    {
      $this->views->getview($this,"home");
    }
    
}
?>