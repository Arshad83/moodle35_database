<?php

class __Mustache_98cdea6feb1aafbde9937987bb0921cd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        // 'children' section
        $value = $context->find('children');
        $buffer .= $this->sectionAe05b6460c98e025a09d39ae3670464c($context, $indent, $value);

        return $buffer;
    }

    private function section0461da78b611f583af79f859b010018d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li><a href="{{{url}}}" title="{{{title}}}">{{{text}}}</a></li>
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
                
                $buffer .= $indent . '                <li><a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= $value;
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= $value;
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= $value;
                $buffer .= '</a></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83f474825f73d2ebda5eadd5bc236eb4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <li>
                <ul class="list-unstyled ml-3">
                    {{> theme_boost/custom_menu_footer }}
                </ul>
            </li>
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
                
                $buffer .= $indent . '            <li>
';
                $buffer .= $indent . '                <ul class="list-unstyled ml-3">
';
                if ($partial = $this->mustache->loadPartial('theme_boost/custom_menu_footer')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '            </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe05b6460c98e025a09d39ae3670464c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{^divider}}
            {{#url}}
                <li><a href="{{{url}}}" title="{{{title}}}">{{{text}}}</a></li>
            {{/url}}
            {{^url}}
                <li>{{{text}}}</li>
            {{/url}}
        {{/divider}}
        {{#haschildren}}
            <li>
                <ul class="list-unstyled ml-3">
                    {{> theme_boost/custom_menu_footer }}
                </ul>
            </li>
        {{/haschildren}}
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
                
                // 'divider' inverted section
                $value = $context->find('divider');
                if (empty($value)) {
                    
                    // 'url' section
                    $value = $context->find('url');
                    $buffer .= $this->section0461da78b611f583af79f859b010018d($context, $indent, $value);
                    // 'url' inverted section
                    $value = $context->find('url');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                <li>';
                        $value = $this->resolveValue($context->find('text'), $context);
                        $buffer .= $value;
                        $buffer .= '</li>
';
                    }
                }
                // 'haschildren' section
                $value = $context->find('haschildren');
                $buffer .= $this->section83f474825f73d2ebda5eadd5bc236eb4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
