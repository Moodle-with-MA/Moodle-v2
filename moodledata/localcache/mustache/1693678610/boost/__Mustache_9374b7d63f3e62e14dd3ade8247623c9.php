<?php

class __Mustache_9374b7d63f3e62e14dd3ade8247623c9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<table class="admintable generaltable">
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th class="header">';
        $value = $context->find('str');
        $buffer .= $this->section1d3c62b1bb835474153bd4ebb212a04a($context, $indent, $value);
        $buffer .= '</th>
';
        $value = $context->find('infocolumnname');
        $buffer .= $this->sectionF2097ad43a7cdbc45684140a9a26380c($context, $indent, $value);
        $buffer .= $indent . '            <th class="header">';
        $value = $context->find('str');
        $buffer .= $this->sectionAc2bc0ecd0cf6ebdb226c5b0fd9ccb33($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th class="header">';
        $value = $context->find('str');
        $buffer .= $this->sectionEb099ab999c06e47d17b67dbba041120($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th class="header">';
        $value = $context->find('str');
        $buffer .= $this->sectionB12ba1c13bfa13127d0b663ac60a4999($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th class="header">';
        $value = $context->find('str');
        $buffer .= $this->sectionA7af089d2483eb5c3fe67f2720b8b42e($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        $value = $context->find('plugins');
        $buffer .= $this->section212ecf332c5404035bd31cb585d99d86($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';

        return $buffer;
    }

    private function section1d3c62b1bb835474153bd4ebb212a04a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'name, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'name, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2097ad43a7cdbc45684140a9a26380c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <th class="header">{{infocolumnname}}</th>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <th class="header">';
                $value = $this->resolveValue($context->find('infocolumnname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAc2bc0ecd0cf6ebdb226c5b0fd9ccb33(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'order, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'order, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb099ab999c06e47d17b67dbba041120(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'isenabled, plugin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'isenabled, plugin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB12ba1c13bfa13127d0b663ac60a4999(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settings, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settings, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA7af089d2483eb5c3fe67f2720b8b42e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'uninstall, plugin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'uninstall, plugin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA50970b2fe55af3f1c718d3de53e2380(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <td>
                {{info}}
            </td>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('info'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '            </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbab6a3838881fe2bf74d2d8c6c92d86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' up, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' up, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section847c6c68498056a450be0cb5a2f48131(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/up, moodle, {{#str}} up, moodle {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/up, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->sectionFbab6a3838881fe2bf74d2d8c6c92d86($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE7b5cf0960755f09428fd4949efba1c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{{moveuplink}}}">
                        {{#pix}}t/up, moodle, {{#str}} up, moodle {{/str}}{{/pix}}
                    </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('moveuplink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('pix');
                $buffer .= $this->section847c6c68498056a450be0cb5a2f48131($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE9467b53b3eceb080957d0d3af88efbf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'spacer, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'spacer, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC80e3945cb82f8d0b6ad7d9735d054b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' down, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' down, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24594b4351aa9260cad3c436da97f4a2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/down, moodle, {{#str}} down, moodle {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/down, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->sectionC80e3945cb82f8d0b6ad7d9735d054b5($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE569a7dce0f7fc62f85f2a39dd2cb068(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{{movedownlink}}}">
                        {{#pix}}t/down, moodle, {{#str}} down, moodle {{/str}}{{/pix}}
                    </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('movedownlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('pix');
                $buffer .= $this->section24594b4351aa9260cad3c436da97f4a2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section001abe8c86a4b2f834f962b4149c4388(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enable, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' enable, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFd6181b932012d82e954dbb88512b5b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/show, moodle, {{#str}} enable, moodle {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/show, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->section001abe8c86a4b2f834f962b4149c4388($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section193aede4ed28e5efa9242539d65960dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{#pix}}i/show, moodle, {{#str}} enable, moodle {{/str}}{{/pix}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->sectionFd6181b932012d82e954dbb88512b5b5($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9062d7b96158946a9a700b109f3cf1e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' disable, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' disable, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81f18ed7ca808785b921641f94459665(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'i/hide, moodle, {{#str}} disable, moodle {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'i/hide, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->section9062d7b96158946a9a700b109f3cf1e4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72b33bf0f41cff05c3a0eaf030c9de55(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'settings,plugin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'settings,plugin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90c3375805766dcd33c1aa1688110eea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{{settingslink}}}">{{#str}}settings,plugin{{/str}}</a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('settingslink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section72b33bf0f41cff05c3a0eaf030c9de55($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD50dfc3e95d4e187fb84e0f965bcfb35(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'uninstall,plugin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'uninstall,plugin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section419382c4bb23a791ee647aa6ead28d23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{{uninstalllink}}}">{{#str}}uninstall,plugin{{/str}}</a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('uninstalllink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionD50dfc3e95d4e187fb84e0f965bcfb35($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section212ecf332c5404035bd31cb585d99d86(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr {{^enabled}}class="dimmed_text"{{/enabled}}>
            <td>{{plugin}}</td>
            {{#infocolumnname}}
            <td>
                {{info}}
            </td>
            {{/infocolumnname}}
            <td class="text-nowrap">
                {{#moveuplink}}
                    <a href="{{{moveuplink}}}">
                        {{#pix}}t/up, moodle, {{#str}} up, moodle {{/str}}{{/pix}}
                    </a>
                {{/moveuplink}}
                {{^moveuplink}}
                    {{#pix}}spacer, moodle{{/pix}}
                {{/moveuplink}}

                {{#movedownlink}}
                    <a href="{{{movedownlink}}}">
                        {{#pix}}t/down, moodle, {{#str}} down, moodle {{/str}}{{/pix}}
                    </a>
                {{/movedownlink}}
                {{^movedownlink}}
                    {{#pix}}spacer, moodle{{/pix}}
                {{/movedownlink}}
            </td>
            <td>
                <a href="{{{togglelink}}}">
                    {{#toggletarget}}
                    {{#pix}}i/show, moodle, {{#str}} enable, moodle {{/str}}{{/pix}}
                    {{/toggletarget}}
                    {{^toggletarget}}
                    {{#pix}}i/hide, moodle, {{#str}} disable, moodle {{/str}}{{/pix}}
                    {{/toggletarget}}
                </a>
            </td>
            <td>
                {{#settingslink}}
                    <a href="{{{settingslink}}}">{{#str}}settings,plugin{{/str}}</a>
                {{/settingslink}}
            </td>
            <td>
                {{#uninstalllink}}
                    <a href="{{{uninstalllink}}}">{{#str}}uninstall,plugin{{/str}}</a>
                {{/uninstalllink}}
            </td>
        </tr>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <tr ';
                $value = $context->find('enabled');
                if (empty($value)) {
                    
                    $buffer .= 'class="dimmed_text"';
                }
                $buffer .= '>
';
                $buffer .= $indent . '            <td>';
                $value = $this->resolveValue($context->find('plugin'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $value = $context->find('infocolumnname');
                $buffer .= $this->sectionA50970b2fe55af3f1c718d3de53e2380($context, $indent, $value);
                $buffer .= $indent . '            <td class="text-nowrap">
';
                $value = $context->find('moveuplink');
                $buffer .= $this->sectionE7b5cf0960755f09428fd4949efba1c1($context, $indent, $value);
                $value = $context->find('moveuplink');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $context->find('pix');
                    $buffer .= $this->sectionE9467b53b3eceb080957d0d3af88efbf($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '
';
                $value = $context->find('movedownlink');
                $buffer .= $this->sectionE569a7dce0f7fc62f85f2a39dd2cb068($context, $indent, $value);
                $value = $context->find('movedownlink');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $context->find('pix');
                    $buffer .= $this->sectionE9467b53b3eceb080957d0d3af88efbf($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <a href="';
                $value = $this->resolveValue($context->find('togglelink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $value = $context->find('toggletarget');
                $buffer .= $this->section193aede4ed28e5efa9242539d65960dc($context, $indent, $value);
                $value = $context->find('toggletarget');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $context->find('pix');
                    $buffer .= $this->section81f18ed7ca808785b921641f94459665($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $value = $context->find('settingslink');
                $buffer .= $this->section90c3375805766dcd33c1aa1688110eea($context, $indent, $value);
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $value = $context->find('uninstalllink');
                $buffer .= $this->section419382c4bb23a791ee647aa6ead28d23($context, $indent, $value);
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
