<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidAddressFormat implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $regex = '/^(.+),\s*(\d+),\s*(.+),\s*(.+)$/';

        if (!preg_match($regex, $value)) {
            $fail(__('The address must be in the format "Street Name, Ward Number, City, District".'));
        }
    }
}
