<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\Userdetail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class CreateUserdetailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $user,$details;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user,$details)
    {
        $this->user = $user;
        $this->details = $details;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $data = [
            'user' => $this->details['firstName'],
            'firstName' => $this->details['firstName'],
            'lastName' => $this->details['lastName'],
            'phone' => $this->details['phone'],
        ];
        Userdetail::create($data);
    }
}
