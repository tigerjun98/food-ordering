<?php

namespace Tests\Feature;

use App\Models\Admin;
use App\Models\Consultation;
use App\Models\Queue;
use App\Models\User;
use App\Modules\Admin\Queue\Events\QueueUpdatedEvent;
use App\Modules\Admin\Queue\Services\QueueService;
use Database\Factories\QueueFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class QueueTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
//    public function test_add_new_patient_to_queue()
//    {
//        $user = User::factory()->create();
//        $admin = Admin::factory()->create();
//        $reqData = (new QueueFactory)->definition();
//        $reqData['id'] = new_id();
//        $reqData['user_id'] = $user->id;
//
//        $response = $this->actingAs($admin, 'admin')->post(
//            route('admin.queue.store'), $reqData
//        );
//
//        $response->assertStatus(200);
//    }
//
//    public function test_add_new_priority_patient_to_queue()
//    {
//        $user = User::factory()->create();
//        $admin = Admin::factory()->create();
//        $reqData = (new QueueFactory)->definition();
//        $reqData['id'] = new_id();
//        $reqData['user_id'] = $user->id;
//        $reqData['priority'] = 1;
//
//        $response = $this->actingAs($admin, 'admin')->post(
//            route('admin.queue.store'), $reqData
//        );
//
//
//        $response->assertStatus(200);
//    }

//    public function test_add_new_patient_event()
//    {
//        $queue = Queue::factory()->create();
//        $waitingCount = (new QueueService())->countWaitingPatient();
//        QueueUpdatedEvent::dispatch( Queue::NEW_QUEUE, $waitingCount.' patient are waiting!', $queue);
//    }

//    public function test_patient_consulted_event()
//    {
//        $queue = Queue::whereNotNull('consultation_id')->first();
//
//        if(!$queue){
//            $consultationId = Consultation::all()->random()->id;
//            $queue = Queue::Today()->first();
//            $queue->consultation_id = $consultationId;
//            $queue->save();
//        }
//
//        QueueUpdatedEvent::dispatch( Queue::CONSULTED, 'New patient pls', $queue);
//
//    }
}
