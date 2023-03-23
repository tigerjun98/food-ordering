<?php

namespace App\Modules\Admin\Consultation\Rules;

use App\Models\Medicine;
use App\Models\Prescription;
use Illuminate\Contracts\Validation\Rule;

class TotalDailyDoseQuantityChecker implements Rule
{

    protected $categoryName;
    protected $metric;
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
        $prescriptionId = explode(".", $attribute)[1];

        $category = request()->input('category')[$prescriptionId] ?? null;
        if($category){
            $this->categoryName = Prescription::getCategoryList()[$category];
            $medicineCategory = Medicine::getCategoryList();
            if( array_key_exists($category, $medicineCategory) ){
                $metricId = request()->input('metric')[$prescriptionId];
                $metric = Prescription::getMetricList()[$metricId] ?? '';
                $this->metric = $metric;
                return intval(request()->input('dose_daily')[$prescriptionId]) > 0;
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
        return 'The '.trans('label.prescription_category').' ('.$this->categoryName.') total daily dosage cannot be 0 '.$this->metric.'.';
    }
}