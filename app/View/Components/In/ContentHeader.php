<?php

namespace App\View\Components\In;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContentHeader extends Component
{
    /**
     * Create a new component instance.
     */
    public $pageTitle;
    public $role;
    public function __construct($role,$pageTitle)
    {
        //
        $this->pageTitle = $pageTitle;
        $this->role = $role;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.in.content-header');
    }
}
