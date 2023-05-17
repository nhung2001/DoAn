<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class CheckCategory implements Rule
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
    // Lấy danh mục cha từ request
    $parentCategoryId = request()->input('parent_category_id');

    // Kiểm tra xem danh mục con đã tồn tại trong cùng danh mục cha hay chưa
    $exists = DB::table('categories')
               ->where('name', $value)
               ->where('parent_category_id', $parentCategoryId)
               ->exists();

    return !$exists;
}

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The validation error message.';
    }
}
