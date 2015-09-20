<?php

/* @gantry-admin/ajax/icons.html.twig */
class __TwigTemplate_3dfaacd0cf95847b2caff9b90248aa895fa857685dd8e97b87df28b4d4e119a1 extends Twig_Template
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
        echo "<div class=\"g-particles-header icons-header settings-block clearfix\">
    <div class=\"float-left particle-search-wrapper\">
        <input type=\"text\" placeholder=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SEARCH_ELI"), "html", null, true);
        echo "\"/>
        <span class=\"particle-search-total\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : null), "html", null, true);
        echo "</span>
    </div>
    <div class=\"float-right\">
        ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["option"]) {
            // line 8
            echo "            ";
            if (twig_test_iterable($context["option"])) {
                // line 9
                echo "                <select name=\"type\">
                ";
                // line 10
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["option"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 11
                    echo "                    <option value=\"fa-";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                    echo "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "                </select>
            ";
            } else {
                // line 15
                echo "                <label><input type=\"checkbox\" name=\"fa-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\" value=\"fa-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"/> ";
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "</label>
            ";
            }
            // line 17
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>
</div>

<div class=\"g-particles-main icons-wrapper\">
    <ul>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["icons"]) ? $context["icons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["icon"]) {
            // line 24
            echo "            <li data-g-icon=\"";
            echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
            echo "\"><i class=\"fa fa-fw ";
            echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, $context["icon"], "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['icon'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>
</div>
<div class=\"g-particles-footer settings-block clearfix\">
    <div class=\"float-left g-icon-preview\"></div>
    <div class=\"float-right\">
        <button href=\"#\" class=\"button button-primary\" data-g-select=\"\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SELECT"), "html", null, true);
        echo "</button>
        <button href=\"#\" class=\"button g5-dialog-close\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_CANCEL"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/ajax/icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 32,  109 => 31,  102 => 26,  89 => 24,  85 => 23,  78 => 18,  72 => 17,  62 => 15,  58 => 13,  47 => 11,  43 => 10,  40 => 9,  37 => 8,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
// <div class="g-particles-header icons-header settings-block clearfix">
//     <div class="float-left particle-search-wrapper">
//         <input type="text" placeholder="{{ 'GANTRY5_PLATFORM_SEARCH_ELI'|trans }}"/>
//         <span class="particle-search-total">{{ total }}</span>
//     </div>
//     <div class="float-right">
//         {% for type,option in options %}
//             {% if option is iterable %}
//                 <select name="type">
//                 {% for key,value in option %}
//                     <option value="fa-{{ key }}">{{ value }}</option>
//                 {% endfor %}
//                 </select>
//             {% else %}
//                 <label><input type="checkbox" name="fa-{{ type }}" value="fa-{{ type }}"/> {{ option }}</label>
//             {% endif %}
//         {% endfor %}
//     </div>
// </div>
// 
// <div class="g-particles-main icons-wrapper">
//     <ul>
//         {% for icon in icons %}
//             <li data-g-icon="{{ icon }}"><i class="fa fa-fw {{ icon }}"></i> {{ icon }}</li>
//         {% endfor %}
//     </ul>
// </div>
// <div class="g-particles-footer settings-block clearfix">
//     <div class="float-left g-icon-preview"></div>
//     <div class="float-right">
//         <button href="#" class="button button-primary" data-g-select="">{{ 'GANTRY5_PLATFORM_SELECT'|trans }}</button>
//         <button href="#" class="button g5-dialog-close">{{ 'GANTRY5_PLATFORM_CANCEL'|trans }}</button>
//     </div>
// </div>
// 
