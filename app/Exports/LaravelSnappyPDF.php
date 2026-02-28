<?php

namespace App\Exports;

use Barryvdh\Snappy\Facades\SnappyPdf;

class LaravelSnappyPDF
{
    public string $title;
    public string $view;

    /**
     * Create a new class instance.
     */
    public function __construct(string $title, ?string $view = null)
    {
        $this->title = $title;
        $this->view = $view;
    }

    public function response()
    {
        return SnappyPdf::loadView($this->view, [
            'title' => $this->title,
        ])->inline($this->title.'.pdf');
    }
    
}
