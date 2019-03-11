<?php
/**
 * Txwitch
 *
 * @author Alexander Makhin <henarozz@gmail.com>
 */
namespace Txwitch\Model;

/**
 * Game Model Class
 *
 * @package Txwitch\Model
 */
class Game
{
    /**
     *
     * @var string
     */
    protected $id;
    
    /**
     *
     * @var string
     */
    protected $name;
    
    /**
     *
     * @var string
     */
    protected $boxArtUrl;
    
    /**
     * Game Model constructor
     *
     * @param string $id
     * @param string $name
     */
    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
    
    /**
     * Getter method for <id> attribute
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    
    /**
     * Getter method for <name> attribute
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * Getter method for <boxArtUrl> attribute
     *
     * @return string
     */
    public function getBoxArtUrl(): string
    {
        return $this->boxArtUrl;
    }
    
    /**
     * Setter method for <boxArtUrl> attribute
     *
     * @param string $url
     */
    public function setBoxArtUrl(string $url): void
    {
        $this->boxArtUrl = $url;
    }
}
