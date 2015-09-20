<?php

/* @gantry-admin/pages/about/about.html.twig */
class __TwigTemplate_fe61320b13074e8a6ea9eebc7a43f686ba951fabcfa3f3158ff0a7473696c633 extends Twig_Template
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
        return $this->loadTemplate(((((isset($context["ajax"]) ? $context["ajax"] : null) - (isset($context["suffix"]) ? $context["suffix"] : null))) ? ("@gantry-admin/partials/ajax.html.twig") : ("@gantry-admin/partials/base.html.twig")), "@gantry-admin/pages/about/about.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_gantry($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"g-grid overview-header\">
        <div class=\"g-block\">
            <h2 class=\"theme-title\">
                ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "icon", array())) {
            echo "<i class=\"fa fa-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "icon", array()), "html", null, true);
            echo "\"></i>";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "title", array()), "html", null, true);
        echo "
            </h2>
            <span class=\"theme-version\">v";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "version", array()), "html", null, true);
        echo "</span>
            <div>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_BY"), "html", null, true);
        echo " <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "author", array()), "link", array()), "html", null, true);
        echo "\" aria-label=\"Template Author's Website\" tabindex=\"1\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "author", array()), "name", array()), "html", null, true);
        echo "</a></div>
        </div>
        <div class=\"g-block\">
            <span class=\"float-right\">
                <button class=\"button button-back-to-conf\"><i class=\"fa fa-fw fa-arrow-left\"></i> <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_BACK_SETUP"), "html", null, true);
        echo "</span></button>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "support", array()), "link", array()), "html", null, true);
        echo "\" class=\"button button-primary\"><i class=\"fa fa-support\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_SUPPORT"), "html", null, true);
        echo "</span></a>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["gantry"]) ? $context["gantry"] : null), "theme", array()), "documentation", array()), "link", array()), "html", null, true);
        echo "\" class=\"button button-primary\"><i class=\"fa fa-book\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_DOCUMENTATION"), "html", null, true);
        echo "</span></a>
            </span>
        </div>
    </div>

    <div class=\"g-grid overview-details\">
        <div class=\"g-block size-35\">
             <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->urlFunc($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "thumbnail", array())), "html", null, true);
        echo "\" class=\"preview-image\" alt=\"\">
        </div>

        <div class=\"g-block\">
            <p>Hydrogen is the default theme for the Gantry 5 framework. It features a lightweight design and basic configuration settings to help get acquainted with Gantry 5's many features and options.</p>
            <ul class=\"overview-list\">
                <li><i class=\"fa fa-asterisk\"></i>Clean, minimalistic design</li>
                <li><i class=\"fa fa-asterisk\"></i>Fast and lightweight</li>
                <li><i class=\"fa fa-asterisk\"></i>Includes preset styles and outlines</li>
            </ul>
        </div>
    </div>

    ";
        // line 36
        $this->loadTemplate("@gantry-admin/partials/gantry-details.html.twig", "@gantry-admin/pages/about/about.html.twig", 36)->display($context);
    }

    public function getTemplateName()
    {
        return "@gantry-admin/pages/about/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 36,  83 => 23,  71 => 16,  65 => 15,  61 => 14,  50 => 10,  46 => 9,  35 => 7,  30 => 4,  27 => 3,  18 => 1,);
    }
}
// {% extends ajax-suffix ? "@gantry-admin/partials/ajax.html.twig" : "@gantry-admin/partials/base.html.twig" %}
// 
// {% block gantry %}
//     <div class="g-grid overview-header">
//         <div class="g-block">
//             <h2 class="theme-title">
//                 {% if gantry.theme.icon %}<i class="fa fa-{{ gantry.theme.icon }}"></i>{% endif %} {{ gantry.theme.title }}
//             </h2>
//             <span class="theme-version">v{{ gantry.theme.version }}</span>
//             <div>{{ 'GANTRY5_PLATFORM_BY'|trans }} <a href="{{ gantry.theme.author.link }}" aria-label="Template Author's Website" tabindex="1">{{ gantry.theme.author.name }}</a></div>
//         </div>
//         <div class="g-block">
//             <span class="float-right">
//                 <button class="button button-back-to-conf"><i class="fa fa-fw fa-arrow-left"></i> <span>{{ 'GANTRY5_PLATFORM_BACK_SETUP'|trans }}</span></button>
//                 <a href="{{ gantry.theme.support.link }}" class="button button-primary"><i class="fa fa-support"></i> <span>{{ 'GANTRY5_PLATFORM_SUPPORT'|trans }}</span></a>
//                 <a href="{{ gantry.theme.documentation.link }}" class="button button-primary"><i class="fa fa-book"></i> <span>{{ 'GANTRY5_PLATFORM_DOCUMENTATION'|trans }}</span></a>
//             </span>
//         </div>
//     </div>
// 
//     <div class="g-grid overview-details">
//         <div class="g-block size-35">
//              <img src="{{ url(info.thumbnail) }}" class="preview-image" alt="">
//         </div>
// 
//         <div class="g-block">
//             <p>Hydrogen is the default theme for the Gantry 5 framework. It features a lightweight design and basic configuration settings to help get acquainted with Gantry 5's many features and options.</p>
//             <ul class="overview-list">
//                 <li><i class="fa fa-asterisk"></i>Clean, minimalistic design</li>
//                 <li><i class="fa fa-asterisk"></i>Fast and lightweight</li>
//                 <li><i class="fa fa-asterisk"></i>Includes preset styles and outlines</li>
//             </ul>
//         </div>
//     </div>
// 
//     {% include '@gantry-admin/partials/gantry-details.html.twig' %}
// {% endblock %}
// 
