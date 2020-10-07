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
        $myscore = $this->result->getLastScoreFor($this->mySide);
        
       
        if ( $myscore == 1){
            return parent::paperChoice();
        }
        if ($myscore == 3){
            return parent::scissorsChoice();
        }
        return parent::rockChoice();
        
    }
};
