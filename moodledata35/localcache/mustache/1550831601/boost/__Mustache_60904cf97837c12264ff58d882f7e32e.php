<?php

class __Mustache_60904cf97837c12264ff58d882f7e32e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<header id="page-header" class="row">
';
        $buffer .= $indent . '    <div class="col-12 pt-3 pb-3">
';
        $buffer .= $indent . '        <div class="card">
';
        $buffer .= $indent . '            <div class="card-body">
';
        $buffer .= $indent . '                <div class="d-flex">
';
        $buffer .= $indent . '                    <div class="mr-auto">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('contextheader'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        // 'settingsmenu' section
        $value = $context->find('settingsmenu');
        $buffer .= $this->sectionE263ae1886b9f45bd4f372744ad770aa($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="d-flex flex-wrap">
';
        // 'hasnavbar' section
        $value = $context->find('hasnavbar');
        $buffer .= $this->section3cf925dc793f08410de325fe96872767($context, $indent, $value);
        $buffer .= $indent . '                    <div class="ml-auto d-flex">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('pageheadingbutton'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div id="course-header">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('courseheader'), $context);
        $buffer .= $value;
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</header>';

        return $buffer;
    }

    private function sectionE263ae1886b9f45bd4f372744ad770aa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="context-header-settings-menu">
                        {{{settingsmenu}}}
                    </div>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="context-header-settings-menu">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('settingsmenu'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3cf925dc793f08410de325fe96872767(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div id="page-navbar">
                        {{{navbar}}}
                    </div>
                    ';
            $result = call_user_func($value, $source, $this->lambdaHelper);
            if (strpos($result, '{{') === false) {
                $buffer .= $result;
            } else {
                $buffer .= $this->mustache
                    ->loadLambda((string) $result)
                    ->renderInternal($context);
            }
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div id="page-navbar">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('navbar'), $context);
                $buffer .= $value;
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
