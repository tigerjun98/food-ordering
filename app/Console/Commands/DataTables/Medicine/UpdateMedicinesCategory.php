<?php

namespace App\Console\Commands\DataTables\Medicine;

use App\Jobs\Order\CancelExpiredOrder;
use App\Models\Medicine;
use App\Models\Order;
use App\Modules\Admin\Medicine\Services\MedicineService;
use Illuminate\Console\Command;
use Overtrue\LaravelPinyin\Facades\Pinyin;

class UpdateMedicinesCategory extends Command
{
    protected $signature = 'db:medicine:update_category';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set category refer from type';
    private $bar;
    private Medicine $model;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->bar = '';
        $this->model = new Medicine();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("\n<bg=blue> INFO </><fg=white> Syncing product name. </> \n");
        $start = now();
        $this->bar = $this->output->createProgressBar($this->count());
        $this->bar->start();
        $this->update();
        $this->bar->finish();
        $this->info("<fg=gray> ".$start->diffInMilliseconds(now())." ms </><bg=green> DONE </>");
    }

    public function count(): int
    {
        return Medicine::count();
    }

    public function update()
    {
        $medicineService = (new MedicineService());
        Medicine::chunk(100, function($rows) use($medicineService){
                foreach($rows as $row) {
                    $row->category = $medicineService->getCategory($row->type);
                    $row->save();
                    $this->bar->advance();
                }
            });
    }

}
