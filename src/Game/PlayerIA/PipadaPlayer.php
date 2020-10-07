<?php

namespace Hackathon\PlayerIA;

use Hackathon\Game\Result;

/**
 * Class PipadaPlayers
 * @package Hackathon\PlayerIA
 * @author Celian NOEL
 * Strat : L'onjectif est de counter une IA idiote qui cherche juste a gagner au prochain coup par rapport a ce qui a été joué avant
 */
class PipadaPlayer extends Player
{
    protected $mySide;
    protected $opponentSide;
    protected $result;

    public function getChoice()
    {
              
        $oponentlast = $this->result->getLastChoiceFor($this->opponentSide);
        $lastscore = $this->result->getLastScoreFor($this->mySide);
        
        if ($lastscore < 1)
        {
            if ( $oponentlast == "rock"){
                return parent::paperChoice();
            }
            if ($oponentlast == "paper"){
                return parent::scissorsChoice();
            }
            return parent::rockChoice();
        }
        if ( $oponentlast == "rock"){
            return parent::rockChoice();
        }
        if ($oponentlast == "paper"){
            return parent::paperChoice();
        }
        return parent::scissorsChoice();
    }
};
