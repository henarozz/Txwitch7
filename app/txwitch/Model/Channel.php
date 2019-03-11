<?php
/**
 * Txwitch
 *
 * @author Alexander Makhin <henarozz@gmail.com>
 */
namespace Txwitch\Model;

/**
 * Channel Model Class
 *
 * @package Txwitch\Model
 */
class Channel
{
    /**
     *
     * @var string
     */
    protected $name;
    
    /**
     *
     * @var string
     */
    protected $userId;
    
    /**
     *
     * @var array
     */
    protected $playlist;
    
    /**
     * Channel Model constructor
     *
     * @param string $name
     * @param string $userId
     */
    public function __construct(string $name, string $userId)
    {
        $this->name = $name;
        $this->userId = $userId;
    }
    
    /**
     * Getter method for <name> attribute
     *
     * @return string|null name of channel
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    
    /**
     * Getter method for <userId> attribute
     *
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }
    
    /**
     * Getter method for <playlist> attribute
     *
     * @return array playlist of channel
     */
    public function getPlaylist(): array
    {
        return $this->playlist;
    }
    
    /**
     * Setter method for <playlist> attribute
     *
     * @param array $playlist of channel
     */
    public function setPlaylist(array $playlist = []): void
    {
        $this->playlist = $playlist;
    }
}
