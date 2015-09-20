<?php

/* forms/override.html.twig */
class __TwigTemplate_135e57c8ff605b2047016d2dfb7c1bf56a7af3b46e179b039faa36c2ca439187 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<input type=\"checkbox\" class=\"settings-param-toggle\" id=\"of-";
        echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)));
        echo "\"";
        echo ((((isset($context["value"]) ? $context["value"] : null) != (isset($context["default_value"]) ? $context["default_value"] : null))) ? (" checked=\"checked\"") : (""));
        echo " role=\"checkbox\" aria-label=\"";
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_OVERRIDE_CHECKBOX"), array("%s" => trim(twig_title_string_filter($this->env, twig_replace_filter(((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)), array("." => " ")))))), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_replace_filter($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_OVERRIDE_CHECKBOX"), array("%s" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "label", array()))), "html", null, true);
        echo "\" />
<label class=\"settings-param-override\" for=\"of-";
        // line 2
        echo twig_escape_filter($this->env, ((isset($context["scope"]) ? $context["scope"] : null) . (isset($context["name"]) ? $context["name"] : null)));
        echo "\"></label>
";
    }

    public function getTemplateName()
    {
        return "forms/override.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  19 => 1,);
    }
}
/* <input type="checkbox" class="settings-param-toggle" id="of-{{ (scope ~ name)|e }}"{{ value != default_value ? ' checked="checked"' }} role="checkbox" aria-label="{{ 'GANTRY5_PLATFORM_OVERRIDE_CHECKBOX'|trans|replace({'%s': (scope ~ name)|replace({'.': ' '})|title|trim}) }}" title="{{ 'GANTRY5_PLATFORM_OVERRIDE_CHECKBOX'|trans|replace({'%s': field.label}) }}" />*/
/* <label class="settings-param-override" for="of-{{ (scope ~ name)|e }}"></label>*/
/* */
