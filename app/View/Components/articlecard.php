<?php

namespace App\View\Components;

use Illuminate\View\Component;

class articlecard extends Component
{
    public $title;
    public $subtitle;
    public $uploadDtm;
    public $cover;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $subtitle, $uploadDtm, $cover)
    {
        //
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->uploadDtm = $uploadDtm;
        $this->cover = $cover;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.articlecard');
    }
}
