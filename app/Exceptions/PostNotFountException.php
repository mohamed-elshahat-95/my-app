<?php

namespace App\Exceptions;

use Exception;

class PostNotFountException extends Exception
{
    /**
     * Report the exception.
     */
    public function report(): void
    {
        // ...
    }
 
    /**
     * Render the exception into an HTTP response.
     */
    public function render()
    {
        // return response()->json([
        //     'error' => 'There is no post found with this ID!'
        // ], 404);

        return response()->view('errors.postNotFound');
    }
}
