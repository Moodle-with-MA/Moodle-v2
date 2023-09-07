<?php

class __Mustache_67ebeb96fd641c3bb3d99c9969dc8c1a extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->find('body'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';

        return $buffer;
    }
}
