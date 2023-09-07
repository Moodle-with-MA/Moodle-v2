<?php

class __Mustache_a24d265c0dbba64d3e13d3794cee4b33 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $value = $this->resolveValue($context->find('return_header'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $this->resolveValue($context->find('return_sub_header'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $this->resolveValue($context->find('return_body'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);

        return $buffer;
    }
}
