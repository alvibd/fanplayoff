<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class LeaguePasswordMatch implements Rule
{
    private $league_password;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($league_password)
    {
        $this->league_password = $league_password;
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
        if($value === $this->league_password) return true;
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute does not match league password.';
    }
}
