<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class messageBanner extends Component
{
    // Old simple props (kept for backward compatibility)
    // public $msg;
    // public $class;
    // public function __construct($msg = null, $class = null)
    // {
    //     // Old usage: <x-message-banner msg="..." class="success" />
    //     $this->msg = $msg;
    //     $this->class = $class;

    // }
    public $type;
    public $title;
    public $message;
    public $class;

    public function __construct($class = null, $type = 'success', $title = null, $message = null)
    {
        $allowedTypes = ['success', 'error', 'warning', 'info', 'notice'];
        if ($class && in_array($class, $allowedTypes, true)) {
            $type = $class;
        }
        
        if ($message === null) {
            $message = "default message for type: $type"; ;
        }        

        $this->type = in_array($type, $allowedTypes, true) ? $type : 'success';
        $this->title = $title;
        $this->message = $message;
    }

    public function render(): View|Closure|string
    {
        return view('components.message-banner');
    }
}
