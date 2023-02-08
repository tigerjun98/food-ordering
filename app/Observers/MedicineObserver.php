<?php

namespace App\Observers;

use App\Models\Medicine;
use Illuminate\Support\Str;
use Overtrue\Pinyin\Pinyin;

class MedicineObserver
{
    /**
     * Handle the Medicine "created" event.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return void
     */

    /**
     * Handle the Medicine "updated" event.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return void
     */
    public function updating(Medicine $medicine)
    {
//        $pinyin = new Pinyin();
//        $converted = $pinyin->convert($medicine->name_cn);
//
//        $medicine->slug = implode('-', $converted);
//
//        if(!$medicine->name_en)
//            $medicine->name_en = $converted;
    }

    public function updated(Medicine $medicine)
    {
        // $medicine->save();
    }

    /**
     * Handle the Medicine "deleted" event.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return void
     */
    public function deleted(Medicine $medicine)
    {
        //
    }

    /**
     * Handle the Medicine "restored" event.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return void
     */
    public function restored(Medicine $medicine)
    {
        //
    }

    /**
     * Handle the Medicine "force deleted" event.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return void
     */
    public function forceDeleted(Medicine $medicine)
    {
        //
    }
}
