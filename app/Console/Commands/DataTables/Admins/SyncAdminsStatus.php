<?php

namespace App\Console\Commands\DataTables\Users;

use App\Entity\Enums\StatusEnum;
use App\Jobs\Order\CancelExpiredOrder;
use App\Models\Admin;
use App\Models\Medicine;
use App\Models\Order;
use App\Models\User;
use Illuminate\Console\Command;
use Overtrue\LaravelPinyin\Facades\Pinyin;

class SyncAdminsStatus extends Command
{
    protected $signature = 'db:admins:sync_status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Set status to Active if null';
    private $bar;
    private User $model;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->bar = '';
        $this->model = new Admin();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("\n<bg=blue> INFO </><fg=white> Syncing users status. </> \n");
        $start = now();
        $this->bar = $this->output->createProgressBar($this->count());
        $this->bar->start();
        $this->update();
        $this->bar->finish();
        $this->info("<fg=gray> ".$start->diffInMilliseconds(now())." ms </><bg=green> DONE </>");
    }

    public function count(): int
    {
        return $this->model
            ->whereNull('status')
            ->count();
    }

    public function update()
    {
        $this->model
            ->whereNull('status')
            ->chunk(100, function($rows){
                foreach($rows as $row) {
                    $row->status = StatusEnum::ACTIVE;
                    $row->save();
                    $this->bar->advance();
                }
            });
    }

}
