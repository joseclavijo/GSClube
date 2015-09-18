<?php

/* @gantry-admin/pages/configurations/content/content.html.twig */
class __TwigTemplate_00fcf82301cc3432ce441c878e9c28885866fbd3c3113105ba31884299443c42 extends Twig_Template
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
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/configurations/content/content.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["stored_data"] = $this->env->getExtension('GantryTwig')->jsonDecodeFilter(_twig_default_filter($this->env->getExtension('GantryTwig')->getCookie("g5-collapsed"), "{}"));
        // line 5
        echo "    <div id=\"content-settings\">
        <form method=\"post\">
            <div data-set-page=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["page_id"]) ? $context["page_id"] : null), "html", null, true);
        echo "\" data-set-root=\"\">
                <span class=\"float-right\">
                    <button type=\"submit\" class=\"button button-primary button-save\" data-save=\"Content Settings\">
                    <i class=\"fa fa-fw fa-check\"></i> <span>Save Content Settings</span></button>
                </span>
                ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["content"]) ? $context["content"] : null));
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
        foreach ($context['_seq'] as $context["group"] => $context["list"]) {
            // line 13
            echo "                    <h2 class=\"page-title\">
                        <span class=\"title\">";
            // line 14
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["group"]), "html", null, true);
            echo "</span>
                    </h2>

                    <div class=\"g-filter-actions\">
                        <div class=\"g-panel-filters\" data-g-global-filter=\"\">
                            <div class=\"search settings-block\">
                                <input type=\"text\" data-g-collapse-filter placeholder=\"";
            // line 20
            echo twig_escape_filter($this->env, (($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FILTER") . " ") . twig_capitalize_string_filter($this->env, $context["group"])), "html", null, true);
            echo "...\" aria-label=\"";
            echo twig_escape_filter($this->env, (($this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_FILTER") . " ") . twig_capitalize_string_filter($this->env, $context["group"])), "html", null, true);
            echo "...\" role=\"search\">
                                <i class=\"fa fa-fw fa-search\"></i>
                            </div>
                            <button class=\"button\" type=\"button\" data-g-collapse-all=\"true\"><i class=\"fa fa-fw fa-toggle-up\"></i> ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_COLLAPSE_ALL"), "html", null, true);
            echo "</button>
                            <button class=\"button\" type=\"button\" data-g-collapse-all=\"false\"><i class=\"fa fa-fw fa-toggle-down\"></i> ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EXPAND_ALL"), "html", null, true);
            echo "</button>
                        </div>
                    </div>

                    <div class=\"cards-wrapper g-grid\">
                        ";
            // line 29
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["list"]);
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
            foreach ($context['_seq'] as $context["id"] => $context["item"]) {
                // line 30
                echo "                            ";
                if ( !$this->getAttribute($context["item"], "hidden", array())) {
                    // line 31
                    echo "                                ";
                    $context["prefix"] = (((("content." . $context["group"]) . ".") . $context["id"]) . ".");
                    // line 32
                    echo "                                ";
                    $context["collapsed"] = ($this->getAttribute($this->getAttribute($context["item"], "form", array()), "collapsed", array()) || $this->getAttribute((isset($context["stored_data"]) ? $context["stored_data"] : null), (isset($context["prefix"]) ? $context["prefix"] : null)));
                    // line 33
                    echo "                                ";
                    $context["labels"] = array("collapse" => $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_COLLAPSE"), "expand" => $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_EXPAND"));
                    // line 34
                    echo "                                <div class=\"card settings-block";
                    echo (((isset($context["collapsed"]) ? $context["collapsed"] : null)) ? (" g-collapsed") : (""));
                    echo "\">
                                    <h4 data-g-collapse=\"";
                    // line 35
                    echo twig_escape_filter($this->env, twig_jsonencode_filter(twig_array_merge((isset($context["labels"]) ? $context["labels"] : null), array("collapsed" => (((isset($context["collapsed"]) ? $context["collapsed"] : null)) ? (true) : (false)), "id" => (isset($context["prefix"]) ? $context["prefix"] : null), "target" => "~ .inner-params"))), "html_attr");
                    echo "\" data-g-collapse-id=\"";
                    echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : null), "html", null, true);
                    echo "\"";
                    echo (((isset($context["overrideable"]) ? $context["overrideable"] : null)) ? (" class=\"card-overrideable\"") : (""));
                    echo ">
                                        <span class=\"g-collapse g-tooltip\" data-title=\"";
                    // line 36
                    echo twig_escape_filter($this->env, (((isset($context["collapsed"]) ? $context["collapsed"] : null)) ? ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "expand", array())) : ($this->getAttribute((isset($context["labels"]) ? $context["labels"] : null), "collapse", array()))), "html", null, true);
                    echo "\"><i class=\"fa fa-fw  fa-caret-up\"></i></span>
                                        <span class=\"g-title\">";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                    echo "</span>
                                        <input type=\"hidden\" name=\"content[";
                    // line 38
                    echo twig_escape_filter($this->env, $context["group"], "html", null, true);
                    echo "][";
                    echo twig_escape_filter($this->env, $context["id"], "html", null, true);
                    echo "]\"/>
                                        ";
                    // line 39
                    if ($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "form", array()), "fields", array()), "enabled", array())) {
                        // line 40
                        echo "                                            ";
                        $this->loadTemplate("forms/fields/enable/enable.html.twig", "@gantry-admin/pages/configurations/content/content.html.twig", 40)->display(array_merge($context, array("default" => true, "scope" => (isset($context["prefix"]) ? $context["prefix"] : null), "name" => "enabled", "field" => $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "form", array()), "fields", array()), "enabled", array()), "value" => $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "get", array(0 => ((isset($context["prefix"]) ? $context["prefix"] : null) . "enabled")), "method"))));
                        // line 41
                        echo "
                                            ";
                        // line 42
                        if ((isset($context["overrideable"]) ? $context["overrideable"] : null)) {
                            // line 43
                            echo "                                                ";
                            $this->loadTemplate("forms/override.html.twig", "@gantry-admin/pages/configurations/content/content.html.twig", 43)->display(array_merge($context, array("scope" => (isset($context["prefix"]) ? $context["prefix"] : null), "name" => "enabled", "field" => array("label" => (("Enabled of the " . $this->getAttribute((isset($context["particle"]) ? $context["particle"] : null), "name", array())) . " Particle")))));
                            // line 44
                            echo "                                            ";
                        }
                        // line 45
                        echo "                                        ";
                    }
                    // line 46
                    echo "                                    </h4>

                                    <div class=\"inner-params\">
                                        ";
                    // line 49
                    $this->loadTemplate("forms/fields.html.twig", "@gantry-admin/pages/configurations/content/content.html.twig", 49)->display(array_merge($context, array("overrideable" => (isset($context["overrideable"]) ? $context["overrideable"] : null), "blueprints" => $this->getAttribute($context["item"], "form", array()), "skip" => array(0 => "enabled"), "data" => $this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "config", array()), "prefix" => (isset($context["prefix"]) ? $context["prefix"] : null))));
                    // line 50
                    echo "                                    </div>
                                </div>
                            ";
                }
                // line 53
                echo "                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['group'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
                <div class=\"g-footer-actions\">
                    <span class=\"float-right\">
                        <button type=\"submit\" class=\"button button-primary button-save\" data-save=\"Content Settings\">
                            <i class=\"fa fa-fw fa-check\"></i> <span>Save Content Settings</span></button>
                    </span>
                </div>
            </div>
        </form>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/configurations/content/content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 56,  195 => 54,  181 => 53,  176 => 50,  174 => 49,  169 => 46,  166 => 45,  163 => 44,  160 => 43,  158 => 42,  155 => 41,  152 => 40,  150 => 39,  144 => 38,  140 => 37,  136 => 36,  128 => 35,  123 => 34,  120 => 33,  117 => 32,  114 => 31,  111 => 30,  94 => 29,  86 => 24,  82 => 23,  74 => 20,  65 => 14,  62 => 13,  45 => 12,  37 => 7,  33 => 5,  30 => 4,  27 => 3,  18 => 1,);
    }
}
// {% extends ajax-suffix ? "@gantry-admin/partials/ajax.html.twig" : "@gantry-admin/partials/base.html.twig" %}
// 
// {% block gantry %}
//     {% set stored_data = get_cookie('g5-collapsed')|default('{}')|json_decode %}
//     <div id="content-settings">
//         <form method="post">
//             <div data-set-page="{{ page_id }}" data-set-root="">
//                 <span class="float-right">
//                     <button type="submit" class="button button-primary button-save" data-save="Content Settings">
//                     <i class="fa fa-fw fa-check"></i> <span>Save Content Settings</span></button>
//                 </span>
//                 {% for group, list in content %}
//                     <h2 class="page-title">
//                         <span class="title">{{ group|capitalize }}</span>
//                     </h2>
// 
//                     <div class="g-filter-actions">
//                         <div class="g-panel-filters" data-g-global-filter="">
//                             <div class="search settings-block">
//                                 <input type="text" data-g-collapse-filter placeholder="{{ 'GANTRY5_PLATFORM_FILTER'|trans ~ ' ' ~ group|capitalize }}..." aria-label="{{ 'GANTRY5_PLATFORM_FILTER'|trans ~ ' ' ~ group|capitalize }}..." role="search">
//                                 <i class="fa fa-fw fa-search"></i>
//                             </div>
//                             <button class="button" type="button" data-g-collapse-all="true"><i class="fa fa-fw fa-toggle-up"></i> {{ 'GANTRY5_PLATFORM_COLLAPSE_ALL'|trans }}</button>
//                             <button class="button" type="button" data-g-collapse-all="false"><i class="fa fa-fw fa-toggle-down"></i> {{ 'GANTRY5_PLATFORM_EXPAND_ALL'|trans }}</button>
//                         </div>
//                     </div>
// 
//                     <div class="cards-wrapper g-grid">
//                         {% for id, item in list %}
//                             {% if not item.hidden %}
//                                 {% set prefix = 'content.' ~ group ~ '.' ~ id ~ '.' %}
//                                 {% set collapsed = item.form.collapsed or attribute(stored_data, prefix) %}
//                                 {% set labels = {collapse: 'GANTRY5_PLATFORM_COLLAPSE'|trans, expand: 'GANTRY5_PLATFORM_EXPAND'|trans} %}
//                                 <div class="card settings-block{{ collapsed ? ' g-collapsed' : '' }}">
//                                     <h4 data-g-collapse="{{ labels|merge({collapsed: collapsed ? true : false, id: prefix, target: '~ .inner-params' })|json_encode|e('html_attr') }}" data-g-collapse-id="{{ prefix }}"{{ overrideable ? ' class="card-overrideable"' : '' }}>
//                                         <span class="g-collapse g-tooltip" data-title="{{ collapsed ? labels.expand : labels.collapse }}"><i class="fa fa-fw  fa-caret-up"></i></span>
//                                         <span class="g-title">{{ item.name }}</span>
//                                         <input type="hidden" name="content[{{ group }}][{{ id }}]"/>
//                                         {% if item.form.fields.enabled %}
//                                             {% include 'forms/fields/enable/enable.html.twig' with {'default': true, 'scope': prefix, 'name': 'enabled', 'field': item.form.fields.enabled, 'value': gantry.config.get(prefix ~ 'enabled')} %}
// 
//                                             {% if overrideable %}
//                                                 {% include 'forms/override.html.twig' with {'scope': prefix, 'name': 'enabled', 'field': {'label': 'Enabled of the ' ~ particle.name ~ ' Particle' }} %}
//                                             {% endif %}
//                                         {% endif %}
//                                     </h4>
// 
//                                     <div class="inner-params">
//                                         {% include 'forms/fields.html.twig' with {'overrideable': overrideable, 'blueprints': item.form, skip: ['enabled'], data: gantry.config, "prefix": prefix} %}
//                                     </div>
//                                 </div>
//                             {% endif %}
//                         {% endfor %}
//                     </div>
//                 {% endfor %}
// 
//                 <div class="g-footer-actions">
//                     <span class="float-right">
//                         <button type="submit" class="button button-primary button-save" data-save="Content Settings">
//                             <i class="fa fa-fw fa-check"></i> <span>Save Content Settings</span></button>
//                     </span>
//                 </div>
//             </div>
//         </form>
//     </div>
// {% endblock %}
// 
