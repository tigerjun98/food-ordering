<?php

namespace App\Jobs\Consultation;

use App\Models\Consultation;
use App\Models\Queue;
use App\Modules\Admin\Queue\Services\QueueService;
use App\Modules\Tp\TouchPos\Services\TouchPosCreateSalesService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessConsultedEvent implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        protected Consultation $consultation,
    ) {
        $this->onConnection('database');
    }


    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $queue = $this->consultation->queue
            ->Today()
            ->where('role', Queue::PHARMACY)
            ->where('status', Queue::WAITING)
            ->first();

        (new QueueService())->notifyReceptionist( $queue );
        // (new TouchPosCreateSalesService( $this->consultation ))->createSales();
    }
}
