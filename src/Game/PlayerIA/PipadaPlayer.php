<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class PipadaPlayers
 * @package Hackathon\PlayerIA
 * @author Celian NOEL
 */
class PipadaPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
        $oponentlast = $this->result->getLastChoiceFor($this->opponentSide);

        if ( $oponentlast == "rock"){
            return parent::paperChoice();
        }
        if ($oponentlast == "paper"){
            return parent::scissorsChoice();
        }
        return parent::rockChoice();

    }
};
