<?php
/**
 * Txwitch
 *
 * @author Alexander Makhin <henarozz@gmail.com>
 */
namespace Txwitch\Mapper;

use Txwitch\Component\EasyPDO;
use Txwitch\Component\TwitchAPI;
use Txwitch\Mapper\Mapper;
use Txwitch\Model\Game;

/**
 * GamelMapper Class
 *
 * @package Txwitch\Mapper
 */
class GameMapper extends Mapper
{
    /**
     * Database
     *
     * @Inject
     * @var EasyPDO
     */
    protected $db;
    
    /**
     * TwitchAPI
     *
     * @Inject
     * @var TwitchAPI
     */
    protected $twitchApi;
    
    /**
     * GameMapper constructor
     *
     * @Inject
     * @param EasyPDO $db
     * @param TwitchAPI $twitchApi
     */
    public function __construct(EasyPDO $db, TwitchAPI $twitchApi)
    {
        parent::__construct($db, $twitchApi);
    }

    /**
     * Method to get games
     *
     * @return array of Game models
     */
    public function getGames(): array
    {
        $this->twitchApi->setThumbSize(['width' => 240, 'height' => 320]);
        $games = $this->twitchApi->getTopGames();
        
        $result = [];
        
        foreach ($games as $game) {
            $gameModel = new Game($game['id'], $game['name']);
            $gameModel->setBoxArtUrl($game['box_art_url']);
            $result[] = $gameModel;
        }
        
        return $result;
    }
}
