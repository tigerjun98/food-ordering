<?php

namespace App\Console;

use App\Models\Log;
use App\Models\OrderDetail;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Artisan;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $this->cancelExpiredOrder();
            $this->clearExpiredResetPasswordToken();
//            Artisan::call('')
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function cancelExpiredOrder()
    {
        $date = new \DateTime();
        $date->modify('-15 minutes');
        $formatted_date = $date->format('Y-m-d H:i:s');

        $orders = OrderDetail::where('status', 0)
            ->where('created_at','<=',$formatted_date)
            ->orderBy('created_at', 'asc')
            ->get();

        foreach ($orders as $order){
            try {
                \DB::beginTransaction();
                $order->status = 6;
                $order->save();
                \DB::commit();

            } catch (\Exception $e) {
                \DB::rollback();
                Log::create([
                    'status'    => 'error',
                    'message'   => $e->getMessage()
                ]);
            }
        }
    }

    protected function clearExpiredResetPasswordToken()
    {
        $date = new \DateTime();
        $date->modify('-60 minutes');
        $formatted_date = $date->format('Y-m-d H:i:s');

        \DB::table('password_resets')
            ->where('new_user', 0)
            ->where('created_at','<=',$formatted_date)
            ->delete();
    }

    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
