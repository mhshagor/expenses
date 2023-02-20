<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class PortfolioLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('portfolio.layouts.app');
    }
}
