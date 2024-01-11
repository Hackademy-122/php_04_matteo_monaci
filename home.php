<?php

abstract class Roof {
    public abstract function buildRoof();
}

abstract class Wall {
    public abstract function buildWall();
}

abstract class Floor {
    public abstract function buildFloor();
}

class HayRoof extends Roof {
    public function buildRoof(){
        return 'fieno';
    }
}

class HayWall extends Wall {
    public function buildWall(){
        return 'fieno';
    }
}

class HayFloor extends Floor {
    public function buildFloor(){
        return 'fieno';
    }
}

class MudRoof extends Roof {
    public function buildRoof(){
        return 'fango';
    }
}

class MudWall extends Wall {
    public function buildWall(){
        return 'fango';
    }
}

class MudFloor extends Floor {
    public function buildFloor(){
        return 'fango';
    }
}

class CementRoof extends Roof {
    public function buildRoof(){
        return 'cemento';
    }
}

class CementWall extends Wall {
    public function buildWall(){
        return 'cemento';
    }
}

class CementFloor extends Floor {
    public function buildFloor(){
        return 'cemento';
    }
}

class Home {

    public $roof;
    public $wall;
    public $floor;

    public function __construct(Roof $_roof, Wall $_wall, Floor $_floor) {
        $this->roof = $_roof;
        $this->wall = $_wall;
        $this->floor = $_floor;
    }

    public function buildHome(){
        if ($this->roof->buildRoof() == $this->wall->buildWall() && $this->roof->buildRoof() == $this->floor->buildFloor()) {
            echo "Tutta la casa è costruita in {$this->floor->buildFloor()}";
        }
        else if ($this->roof->buildRoof() == $this->wall->buildWall()) {
            echo "La casa ha il soffitto e le pareti in {$this->wall->buildWall()} e il pavimento in {$this->floor->buildFloor()}\n";
        } else if ($this->roof->buildRoof() == $this->floor->buildFloor()) {
            echo "La casa ha il soffito e il pavimento in {$this->roof->buildRoof()} e le mura in {$this->wall->buildWall()}\n";
        } else if ($this->wall->buildWall() == $this->floor->buildFloor()) {
            echo "La casa ha le mura e il pavimento in {$this->wall->buildWall()} e il tetto in {$this->roof->buildRoof()}\n";
        } else {
            echo "La casa è fatta con il soffitto in {$this->roof->buildRoof()}, le mura in {$this->wall->buildWall()} e il pavimento in {$this->floor->buildFloor()}\n";
        }
    }
}

$homeOne = new Home (new HayRoof, new HayWall, new MudFloor);
$homeOne -> buildHome();

$homeDue = new home (new MudRoof, new MudWall, new MudFloor);
$homeDue -> buildHome();