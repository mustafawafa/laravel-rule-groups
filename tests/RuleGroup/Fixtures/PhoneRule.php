<?php


namespace SzuniSoft\RuleGroups\Test\RuleGroup\Fixtures;


use Illuminate\Contracts\Validation\Rule;

class PhoneRule implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '';
    }
}