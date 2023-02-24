<?php

namespace App\Rules;

use App\Models\Medicine;
use Illuminate\Contracts\Validation\Rule;

class RequiredMedicine implements Rule
{

    protected $categoryName;
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
        $medicineCategory = Medicine::getCategoryList();
        $this->categoryName = $medicineCategory[$value] ?? null;

        if($this->categoryName){ // is medicine
            $categoryIds = explode(".", $attribute);
            $categoryId = end($categoryIds);

            if(array_key_exists($value, $medicineCategory)){
                $medicine = request()->input('medicine_id')[$categoryId] ?? null;
                if(!$medicine || count($medicine) == 0){
                    return false;
                }
            }
        }

        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The '.trans('label.prescription_category').' ('.$this->categoryName.') must contain at least one medicine';
    }
}
