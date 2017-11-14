<?php

namespace App\Rules;

use App\Model\League;
use Illuminate\Contracts\Validation\Rule;

class AlreadyJoined implements Rule
{
    private $league;
    private $id;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(League $league, $id)
    {
        $this->league = $league;
        $this->id = $id;
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
        if($this->league->teams()->whereOwnerId($this->id)->first())
            return false;
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You Have Already Joined This League';
    }
}
