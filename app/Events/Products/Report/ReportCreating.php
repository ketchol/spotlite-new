<?php
/**
 * Created by PhpStorm.
 * User: ivan.li
 * Date: 10/5/2016
 * Time: 12:56 PM
 */

namespace App\Events\Products\Report;


use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class ReportCreating extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct()
    {
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}