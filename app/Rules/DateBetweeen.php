<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class DateBetweeen implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
       $startDate= Carbon::parse($value);
       $endDate=Carbon::now()->addWeek();

       return $value>= now() && $value <= $endDate;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Please choose a valid date.';
    }
}