<?php

class __Mustache_d92866663fb0166bef75fcdb780d1a1a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->find('fromname'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';

        return $buffer;
    }
}
