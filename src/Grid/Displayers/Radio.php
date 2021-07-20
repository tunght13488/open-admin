<?php

namespace OpenAdmin\Admin\Grid\Displayers;

use Illuminate\Support\Arr;
use OpenAdmin\Admin\Admin;

class Radio extends AbstractDisplayer
{
    public function display($options = [])
    {
        return Admin::component('admin::grid.inline-edit.radio', [
            'key'      => $this->getKey(),
            'name'     => $this->getPayloadName(),
            'value'    => $this->getValue(),
            'resource' => $this->getResource(),
            'trigger'  => "ie-trigger-{$this->getClassName()}",
            'target'   => "ie-template-{$this->getClassName()}",
            'display'  => Arr::get($options, $this->getValue(), ''),
            'options'  => $options,
        ]);
    }
}
