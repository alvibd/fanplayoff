<?php

namespace App\Rules;

use App\Model\League;
use Illuminate\Contracts\Validation\Rule;

class LeagueFull implements Rule
{
    private $league;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(League $league)
    {
        $this->league = $league;
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
        if($this->league->teams()->count() < $this->league->no_of_teams) return true;
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'This League is Already Full';
    }
}
