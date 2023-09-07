<?php

class __Mustache_d57a8833903c191bb4812f37d25e7017 extends Mustache_Template
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
