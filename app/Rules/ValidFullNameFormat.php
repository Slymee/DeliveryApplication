<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidFullNameFormat implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $regex = $regex = '/^[a-zA-Z]+ [a-zA-Z]+$/';

        if (!preg_match($regex, $value)) {
            $fail(__('The full name must contain only letters, spaces and complete name.'));
        }
    }
}
