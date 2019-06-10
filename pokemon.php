<?php
    include "pokeball.php";
    include "target.php";
    
    class Pokemon 
    {
    	public $name;
    	public $life;
    	public $level;
    	public $type;
        public $strength;

    	public function __construct ($name, $life, $level, $type, $strength)
    	{
    		$this->name = $name;
    		$this->life = $life;
    		$this->level = $level;
    		$this->type = $type;
    		$this->strength = $strength;
        }


    // $pokemon = new Pokemon('Carapuce', 100, 5, 'eau', 10);
    
    public function level_up ()
        {
            $this->level += 1;
            $this->life += 5;
            $this->strength += 2;

            $level_up_text = $this->name . ' passe au niveau ' . $this->level .'<br>'. "\nIl gagne 5 pts de vie et 2 pts de force.\n";

            echo $level_up_text.'<br>';
            return true;
        }
    
    public function combat($target) {
        $attack = $this->strength * (rand(900, 1100) / 1000);
        echo $attack.'points de dégâts sont infligés à l\'ennemi <br>';
    }



    }
    
    $target = new target('Salamèche', 100, 5, 'feu', 10);
    $pokemon = new Pokemon('Carapuce', 100, 5, 'eau', 10);
    
    var_dump($target);
    var_dump($target->name);
    $life_target = 0;
    $pokemon->combat($target->name);

        
    var_dump($target);
    // $pokemon->capture($target);
    $pokemon->level_up();



    class Foo
    {
    	public $val = 10;
    }

    $foo = new Foo();
    $bar = clone $foo;

    $bar->val = 5;

    echo $foo->val; //Affichera 10 !

    echo "<img src=\"https://www.pokepedia.fr/images/thumb/c/cc/Carapuce-RFVF.png/250px-Carapuce-RFVF.png\" style=\"float:right;\">";

?>