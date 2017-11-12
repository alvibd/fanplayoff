<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class ResetPassword implements Rule
{
    private $password;
    private $hashedPassword;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($password, $hashedPassword)
    {
        $this->password = $password;
        $this->hashedPassword = $hashedPassword;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return Hash::check($this->password, $this->hashedPassword);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute does not match your password';
    }
}
