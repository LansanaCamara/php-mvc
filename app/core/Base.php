<?php

class Base
{
    /**
     * The default status code for all responses.
     *
     * @var int
     */
    protected $statusCode = 200;

    /**
     * Set a status code.
     *
     * @param $statusCode
     * @return $this
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * Get the status code.
     *
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Set response headers and open the error page.
     *
     * @param $message
     */
    public function respond($message)
    {
        header($_SERVER['SERVER_PROTOCOL'] . $message);
        header("HTTP/1.0 $message");

        render($this->getStatusCode());

        exit();
    }

    /**
     * A particular error response (404 Not Found).
     */
    public function respondNotFound()
    {
        $this->setStatusCode(404)->respond('404 Not Found');
    }
}