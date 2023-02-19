<?php

namespace App\Console\Commands\DataTables\Medicine;

use App\Jobs\Order\CancelExpiredOrder;
use App\Models\Medicine;
use App\Models\Order;
use Illuminate\Console\Command;
use Overtrue\LaravelPinyin\Facades\Pinyin;

class UpdateMedicinesType extends Command
{
    protected $signature = 'db:medicine:update_type';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set type refer from metric unit';
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
        return Medicine::all()->count();
    }

    public function getType($row)
    {
        $unit = $row->metric_unit_volume_id;
        switch ($unit){
            case 2:
                return 5;
            case 3:
                return 1;
            case 4:
                return 4;
            default:
                return 0;
        }
    }

    public function update()
    {
        Medicine::chunk(100, function($rows){
                foreach($rows as $row) {
                    $row->type = $this->getType($row);
                    $row->save();
                    $this->bar->advance();
                }
            });
    }

}
