<?php

/* menu/empty.html.twig */
class __TwigTemplate_2a84e0f9393d83767529c6bafbc8292ae3d7451a4021c49734f01a67c190e446 extends Twig_Template
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
        echo "<div class=\"card full-width\">
    <h4>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_MENU_EMPTY"), "html", null, true);
        echo "</h4>
    <div class=\"inner-params\">
        <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('GantryTwig')->transFilter("GANTRY5_PLATFORM_MENU_EMPTY_DESC"), "html", null, true);
        echo "</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "menu/empty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 2,  19 => 1,);
    }
}
// <div class="card full-width">
//     <h4>{{ 'GANTRY5_PLATFORM_MENU_EMPTY'|trans }}</h4>
//     <div class="inner-params">
//         <p>{{ 'GANTRY5_PLATFORM_MENU_EMPTY_DESC'|trans }}</p>
//     </div>
// </div>
