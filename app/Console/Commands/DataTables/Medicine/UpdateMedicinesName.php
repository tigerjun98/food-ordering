<?php

namespace App\Console\Commands\DataTables\Medicine;

use App\Jobs\Order\CancelExpiredOrder;
use App\Models\Medicine;
use App\Models\Order;
use Illuminate\Console\Command;
use Overtrue\LaravelPinyin\Facades\Pinyin;

class UpdateMedicinesName extends Command
{
    protected $signature = 'db:medicine:update_name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set name_en to Pinyin from name_cn';
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
        return Medicine::whereNull('name_en')->count();
    }

    public function update()
    {
        Medicine::whereNull('name_en')
            ->chunk(100, function($rows){
                foreach($rows as $row) {
                    $pinyin = implode(' ', Pinyin::convert($row->name_cn));
                    $row->slug = slugify($pinyin);
                    if(!$row->name_en)
                        $row->name_en = $pinyin;
                    $row->save();
                    $this->bar->advance();
                }
            });
    }

}
