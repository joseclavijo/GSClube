<?php

/* @gantry-admin/pages/configurations/assignments/assignments.html.twig */
class __TwigTemplate_80c6de53314f801d17dacebe17be083dcec729f8cd81787f158df50d3618c403 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'gantry' => array($this, 'block_gantry'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/assignments/assignments.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"assignments\">
    ";
        // line 5
        if ((isset($context["assignments"]) ? $context["assignments"] : null)) {
            // line 6
            echo "    <form method=\"post\">
        <span class=\"float-right\">
            <button type=\"submit\" class=\"button button-primary button-save\" data-save=\"Assignments\"><i class=\"fa fa-fw fa-check\"></i> <span>Save Assignments</span></button>
        </span>

        <h2 class=\"page-title\">Assignments</h2>

        <div class=\"g-filters-bar\">
            <div class=\"g-panel-filters\" data-g-global-filter>
                <div class=\"search settings-block\">
                    <input type=\"text\" placeholder=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_GLOBAL_FILTER_ELI"), "html", null, true);
            echo "\" aria-label=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_GLOBAL_FILTER_ELI"), "html", null, true);
            echo "\" role=\"search\">
                    <i class=\"fa fa-fw fa-search\"></i>
                </div>
                <span data-g-assignments-uncheck class=\"g-tooltip g-tooltip-right\" data-title=\"Unselect all menu items\"><i class=\"fa fa-fw fa-toggle-off\"></i></span>
                <span data-g-assignments-check class=\"g-tooltip g-tooltip-right\" data-title=\"Selects all menu items\"><i class=\"fa fa-fw fa-toggle-on\"></i></span>
            </div>
            <label>
                <input type=\"checkbox\" data-assignments-enabledonly /> Hide Unassigned Items
            </label>
        </div>

        <div class=\"cards-wrapper clearfix\">
            ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["assignments"]) ? $context["assignments"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["type"] => $context["types"]) {
                // line 29
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["types"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["name"] => $context["list"]) {
                    // line 30
                    echo "                <div class=\"card settings-block\">
                    <h4>
                        ";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "label", array()));
                    echo "
                        <div class=\"g-panel-filters float-right align-right\">
                            <div class=\"search settings-block\">
                                <input type=\"text\" placeholder=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FILTER_ELI"), "html", null, true);
                    echo "\" aria-label=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FILTER_ELI"), "html", null, true);
                    echo "\">
                                <i class=\"fa fa-fw fa-search\"></i>
                            </div>
                            <span data-g-assignments-uncheck class=\"g-tooltip g-tooltip-right\" data-title=\"Unselect all menu items\"><i class=\"fa fa-fw fa-toggle-off\"></i></span>
                            <span data-g-assignments-check class=\"g-tooltip g-tooltip-right\" data-title=\"Selects all menu items\"><i class=\"fa fa-fw fa-toggle-on\"></i></span>
                        </div>
                    </h4>

                    <div class=\"settings-param-wrapper\">
                        ";
                    // line 44
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["list"], "items", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                        // line 45
                        echo "                            ";
                        $context["path"] = ((((("assignments." . $context["type"]) . ".") . $context["name"]) . ".") . $this->getAttribute($context["link"], "name", array()));
                        // line 46
                        echo "                            ";
                        $context["group"] = (($this->getAttribute($context["link"], "section", array())) ? (("data-g-assignments-group=" . $this->getAttribute($context["link"], "name", array()))) : (("data-g-assignments-parent=" . $this->getAttribute($context["link"], "taxonomy", array()))));
                        // line 47
                        echo "                        <label class=\"settings-param";
                        if ($this->getAttribute($context["link"], "section", array())) {
                            echo " settings-param-section";
                        }
                        echo "\"";
                        echo twig_escape_filter($this->env, (isset($context["group"]) ? $context["group"] : null), "html", null, true);
                        echo ">
                            ";
                        // line 48
                        $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/configurations/assignments/assignments.html.twig", 48)->display(array_merge($context, array("default" => true, "name" => $this->env->getExtension('GantryTwig')->fieldNameFilter(                        // line 50
(isset($context["path"]) ? $context["path"] : null)), "field" => $this->getAttribute(                        // line 51
$context["link"], "field", array()), "value" => (($this->getAttribute(                        // line 52
$context["link"], "value", array(), "any", true, true)) ? ($this->getAttribute($context["link"], "value", array())) : ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => (isset($context["path"]) ? $context["path"] : null)), "method"))), "disabled" => $this->getAttribute(                        // line 53
$context["link"], "disabled", array()))));
                        // line 55
                        echo "                            <span class=\"settings-param-title";
                        if ($this->getAttribute($context["link"], "section", array())) {
                            echo " settings-param-section-title";
                        }
                        echo "\">";
                        // line 56
                        echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "label", array()), "html", null, true);
                        // line 57
                        echo "</span>
                        </label>
                        ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo "                    </div>
                </div>
                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['list'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['types'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "         </div>
    </form>
    ";
        } else {
            // line 67
            echo "    <h2 class=\"page-title\">Assignments</h2>
    ";
            // line 68
            if (((isset($context["configuration"]) ? $context["configuration"] : null) == "default")) {
                // line 69
                echo "    <p>You cannot assign Base Outline.</p>
    ";
            } else {
                // line 71
                echo "    <p>No assignments available!</p>
    ";
            }
            // line 73
            echo "    ";
        }
        // line 74
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/assignments/assignments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 74,  233 => 73,  229 => 71,  225 => 69,  223 => 68,  220 => 67,  215 => 64,  201 => 63,  185 => 60,  169 => 57,  167 => 56,  161 => 55,  159 => 53,  158 => 52,  157 => 51,  156 => 50,  155 => 48,  146 => 47,  143 => 46,  140 => 45,  123 => 44,  109 => 35,  103 => 32,  99 => 30,  81 => 29,  64 => 28,  47 => 16,  35 => 6,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
// {% extends ajax-suffix ? "@gantry-admin/partials/ajax.html.twig" : "@gantry-admin/partials/base.html.twig" %}
// 
// {% block gantry %}
// <div id="assignments">
//     {% if assignments %}
//     <form method="post">
//         <span class="float-right">
//             <button type="submit" class="button button-primary button-save" data-save="Assignments"><i class="fa fa-fw fa-check"></i> <span>Save Assignments</span></button>
//         </span>
// 
//         <h2 class="page-title">Assignments</h2>
// 
//         <div class="g-filters-bar">
//             <div class="g-panel-filters" data-g-global-filter>
//                 <div class="search settings-block">
//                     <input type="text" placeholder="{{ 'GANTRY5_PLATFORM_GLOBAL_FILTER_ELI'|trans }}" aria-label="{{ 'GANTRY5_PLATFORM_GLOBAL_FILTER_ELI'|trans }}" role="search">
//                     <i class="fa fa-fw fa-search"></i>
//                 </div>
//                 <span data-g-assignments-uncheck class="g-tooltip g-tooltip-right" data-title="Unselect all menu items"><i class="fa fa-fw fa-toggle-off"></i></span>
//                 <span data-g-assignments-check class="g-tooltip g-tooltip-right" data-title="Selects all menu items"><i class="fa fa-fw fa-toggle-on"></i></span>
//             </div>
//             <label>
//                 <input type="checkbox" data-assignments-enabledonly /> Hide Unassigned Items
//             </label>
//         </div>
// 
//         <div class="cards-wrapper clearfix">
//             {% for type, types in assignments %}
//                 {% for name, list in types %}
//                 <div class="card settings-block">
//                     <h4>
//                         {{ list.label|e }}
//                         <div class="g-panel-filters float-right align-right">
//                             <div class="search settings-block">
//                                 <input type="text" placeholder="{{ 'GANTRY5_PLATFORM_FILTER_ELI'|trans }}" aria-label="{{ 'GANTRY5_PLATFORM_FILTER_ELI'|trans }}">
//                                 <i class="fa fa-fw fa-search"></i>
//                             </div>
//                             <span data-g-assignments-uncheck class="g-tooltip g-tooltip-right" data-title="Unselect all menu items"><i class="fa fa-fw fa-toggle-off"></i></span>
//                             <span data-g-assignments-check class="g-tooltip g-tooltip-right" data-title="Selects all menu items"><i class="fa fa-fw fa-toggle-on"></i></span>
//                         </div>
//                     </h4>
// 
//                     <div class="settings-param-wrapper">
//                         {% for link in list.items %}
//                             {% set path = 'assignments.' ~ type ~ '.' ~ name ~ '.' ~ link.name %}
//                             {% set group = link.section ? 'data-g-assignments-group=' ~ link.name : 'data-g-assignments-parent=' ~ link.taxonomy %}
//                         <label class="settings-param{% if link.section %} settings-param-section{% endif %}"{{ group }}>
//                             {% include 'forms/fields/enable/enable.html.twig' with {
//                             'default': true,
//                             'name': path|fieldName,
//                             'field': link.field,
//                             'value': link.value is defined ? link.value : gantry.config.get(path),
//                             'disabled': link.disabled
//                             } %}
//                             <span class="settings-param-title{% if link.section %} settings-param-section-title{% endif %}">
//                                 {{- link.label -}}
//                             </span>
//                         </label>
//                         {% endfor %}
//                     </div>
//                 </div>
//                 {% endfor %}
//             {% endfor %}
//          </div>
//     </form>
//     {% else %}
//     <h2 class="page-title">Assignments</h2>
//     {% if configuration == 'default' %}
//     <p>You cannot assign Base Outline.</p>
//     {% else %}
//     <p>No assignments available!</p>
//     {% endif %}
//     {% endif %}
// </div>
// {% endblock %}
// 
