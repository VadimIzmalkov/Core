<?php 
namespace Core\Common\Result;

class Result
{
    /**
     * @var boolean
     */
    private $valid;

    /**
     * @var string
     */
    private $message;
    
    /**
     * @var Exception
     */
    private $exception;

    public function __construct($valid = true, $message = self::DEFAULT_MESSAGE, $exception = null)
    {
        $this->valid        = (bool) $valid;
        $this->message      = $message;
        $this->exception    = $exception;
    }

    /**
     * Returns error message when an error occurs
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Tells if the result is valid
     * @return bool
     */
    public function isValid()
    {
        return $this->valid;
    }

    /**
     * Tells if this Result has an exception. Usually only non-valid result should wrap an exception
     * @return bool
     */
    public function hasException()
    {
        return $this->exception instanceof Exception;
    }

    /**
     * Returns the exception wraped by this Result
     * @return \Exception
     */
    public function getException()
    {
        return $this->exception;
    }
}