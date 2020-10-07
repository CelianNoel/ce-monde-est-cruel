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
      
        return parent::paperChoice();

    }
};
