<?php

namespace App\View\Components\workFlow;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class editors extends Component
{
   public $workFlowBackground;
   public $workFlowText;
   public $workFlowIcon;

    public function __construct($workFlowBackground,$workFlowText, $workFlowIcon)
    {
        $this->workFlowBackground = $workFlowBackground;
            $this->workFlowIcon = $workFlowIcon;
        $this->workFlowText = $workFlowText;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.work-flow.editors');
    }
}
