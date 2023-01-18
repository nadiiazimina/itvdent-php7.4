<?php

class EmptyStringException extends Exception
{

}

class NotAStringError extends Error
{

}

// class NewThrowable implements Throwable
// {
//     public function getMessage()
//     {

//     }

//     public function getCode()
//     {
        
//     }

//     public function getFile()
//     {
        
//     }

//     public function getLine()
//     {
        
//     }

//     public function getTrace()
//     {
        
//     }

//     public function getTraceAsString()
//     {
        
//     }

//     public function getPrevious()
//     {
        
//     }

//     public function __toString()
//     {
        
//     }
// }



class User
{
    private $username;

    public function setUsername(string $username)
    {
        if(mb_strlen($username) > 0 && mb_strlen($username) < 50)
        {
            $this->username = $username;
        }
        elseif(mb_strlen($username) > 0 && mb_strlen($username) > 50)
        {
        throw new NotAStringError("too long $username");

        }
        else
        {
    
        throw new EmptyStringException("incorrect value $username");

        }
    } 
}

