<?php
/**
 * Txwitch
 *
 * @author Alexander Makhin <henarozz@gmail.com>
 */
namespace Txwitch\Component;

/**
 * Security Component Class
 *
 * @package Txwitch\Component
 */
class Security
{

    /**
     * Method to pass authentication by auth credentials
     *
     * @param array $trueAuthCredentials
     * @param array $userAuthCredentials
     * @return boolean
     */
    public function passAuth(array $trueAuthCredentials = [], array $userAuthCredentials = []): bool
    {
        if ($trueAuthCredentials === $userAuthCredentials &&
                (!empty($trueAuthCredentials) && !empty($userAuthCredentials))
        ) {
            return true;
        } else {
            return false;
        }
    }
    
    /**
     * Method to set auth session to true=
     */
    public function setAuthSession(): void
    {
        $_SESSION['userIsAuthed'] = true;
    }
    
    /**
     * Method to unset auth session
     */
    public function unsetAuthSession(): void
    {
        if (!empty($_SESSION['userIsAuthed'])) {
            unset($_SESSION['userIsAuthed']);
        }
    }
    
    /**
     * Method to check authorization
     *
     * @return boolean
     */
    public function isAuthed(): bool
    {
        if (!empty($_SESSION['userIsAuthed']) && $_SESSION['userIsAuthed'] === true) {
            return true;
        } else {
            return false;
        }
    }
}
