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
        $lastscore = $this->result->getLastScoreFor($this->mySide);
        
        if ($lastscore < 1)
        {
            if ( $oponentlast == "rock"){
                return parent::rockChoice();
            }
            if ($oponentlast == "paper"){
                return parent::paperChoice();
            }
            return parent::scissorsChoice();
        }
        if ($lastscore == 3)
        {
            if ( $oponentlast == "rock"){
                return parent::scissorsChoice();
            }
            if ($oponentlast == "paper"){
                return parent::rockChoice();
            }
            return parent::paperChoice();
        }
        else {
            if ( $oponentlast == "rock"){
                return parent::scissorsChoice();
            }
            if ($oponentlast == "paper"){
                return parent::rockChoice();
            }
            return parent::paperChoice();
        }
    }
};
