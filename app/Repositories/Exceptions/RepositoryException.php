<?php namespace App\Repositories\Exceptions;

use Illuminate\Support\MessageBag;

class RepositoryException extends \Exception {

    /**
     * Errors object.
     *
     * @var Laravel\Messages
     */
    private $errors;

    /**
     * Create a new validate exception instance.
     *
     * @param  Laravel\Validator|Laravel\Messages  $container
     * @return void
     */
    public function __construct(MessageBag $errors)
    {
        $this->errors = $errors;

        parent::__construct(null);
    }

    /**
     * Gets the errors object.
     *
     * @return Laravel\Messages
     */
    public function get()
    {
        return $this->errors;
    }

    /**
     * Alias of get method.
     *
     * @return \Illuminate\Support\MessageBag
     */
    public function getErrors()
    {
        return $this->get();
    }

}