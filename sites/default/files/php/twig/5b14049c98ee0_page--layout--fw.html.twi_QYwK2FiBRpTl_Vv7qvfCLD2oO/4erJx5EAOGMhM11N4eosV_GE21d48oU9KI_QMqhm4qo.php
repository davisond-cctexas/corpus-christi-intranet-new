<?php

/* themes/gavias_upco/templates/page/page-layout/page--layout--fw.html.twig */
class __TwigTemplate_41b1095eb390c40ac9fc2cb6825c1f4bc8859389814852930e4d923399ca0355 extends Twig_Template
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
        $tags = array("include" => 9, "if" => 11);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include', 'if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 7
        echo "
<div class=\"body-page gva-body-page\">
   ";
        // line 9
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_upco/templates/page/page-layout/page--layout--fw.html.twig", 9)->display($context);
        // line 10
        echo "\t
\t";
        // line 11
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", array())) {
            // line 12
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 13
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumbs", array()), "html", null, true));
            echo "
\t\t</div>
\t";
        }
        // line 16
        echo "
\t<div role=\"main\" class=\"main main-page\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 20
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", array())) {
            // line 21
            echo "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 22
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideshow_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 24
        echo "\t

\t\t";
        // line 26
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 27
            echo "\t\t\t<div class=\"help\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 30
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 35
        echo "
\t\t";
        // line 36
        if ($this->getAttribute(($context["page"] ?? null), "fw_before_content", array())) {
            // line 37
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 38
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fw_before_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 41
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 43
        if ($this->getAttribute(($context["page"] ?? null), "before_content", array())) {
            // line 44
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "before_content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 54
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container-full\">
\t\t\t\t";
        // line 59
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main-no-sidebar.html.twig"), "themes/gavias_upco/templates/page/page-layout/page--layout--fw.html.twig", 59)->display($context);
        // line 60
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 63
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 64
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 66
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 70
        echo "
\t\t";
        // line 71
        if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
            // line 72
            echo "\t\t\t<div class=\"area after_content\">
\t\t\t\t<div class=\"container-fw\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 75
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 80
        echo "\t\t
\t\t";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "fw_after_content", array())) {
            // line 82
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 83
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fw_after_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 86
        echo "
\t</div>

</div>

";
        // line 91
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_upco/templates/page/page-layout/page--layout--fw.html.twig", 91)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/gavias_upco/templates/page/page-layout/page--layout--fw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 91,  193 => 86,  187 => 83,  184 => 82,  182 => 81,  179 => 80,  171 => 75,  166 => 72,  164 => 71,  161 => 70,  154 => 66,  150 => 64,  148 => 63,  143 => 60,  141 => 59,  134 => 54,  125 => 48,  119 => 44,  117 => 43,  113 => 41,  107 => 38,  104 => 37,  102 => 36,  99 => 35,  91 => 30,  86 => 27,  84 => 26,  80 => 24,  74 => 22,  71 => 21,  69 => 20,  63 => 16,  57 => 13,  54 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_upco/templates/page/page-layout/page--layout--fw.html.twig", "/var/www/html/themes/gavias_upco/templates/page/page-layout/page--layout--fw.html.twig");
    }
}
