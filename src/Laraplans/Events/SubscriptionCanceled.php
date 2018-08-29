<?php

namespace Ofumbi\Laraplans\Events;

use Ofumbi\Laraplans\Models\PlanSubscription;
use Illuminate\Queue\SerializesModels;

class SubscriptionCanceled
{
    use SerializesModels;

    /**
     * @var \Laraplans\Models\PlanSubscription
     */
    public $subscription;

    /**
     * Create a new event instance.
     *
     * @param  \Laraplans\Models\PlanSubscription  $subscription
     * @return void
     */
    public function __construct(PlanSubscription $subscription)
    {
        $this->subscription = $subscription;
    }
}
