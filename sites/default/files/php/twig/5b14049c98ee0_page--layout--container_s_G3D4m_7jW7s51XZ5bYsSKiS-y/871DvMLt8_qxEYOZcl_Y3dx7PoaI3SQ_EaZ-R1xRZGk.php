<?php

/* themes/gavias_upco/templates/page/page-layout/page--layout--container_sidebar.html.twig */
class __TwigTemplate_daaed2e0d3e881431f69b8fc90b60b9215a29d29cb07c0f0802568aa617d1eff extends Twig_Template
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
        $tags = array("include" => 8, "if" => 10);
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
        echo "<div class=\"body-page gva-body-page\">
   ";
        // line 8
        $this->loadTemplate(($context["header_skin"] ?? null), "themes/gavias_upco/templates/page/page-layout/page--layout--container_sidebar.html.twig", 8)->display($context);
        // line 9
        echo "\t
   ";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumbs", array())) {
            // line 11
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 12
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumbs", array()), "html", null, true));
            echo "
\t\t</div>
\t";
        }
        // line 15
        echo "\t
\t<div role=\"main\" class=\"main main-page\">
\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 19
        if ($this->getAttribute(($context["page"] ?? null), "slideshow_content", array())) {
            // line 20
            echo "\t\t\t<div class=\"slideshow_content area\">
\t\t\t\t";
            // line 21
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "slideshow_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 23
        echo "\t

\t\t";
        // line 25
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 26
            echo "\t\t\t<div class=\"help\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"content-inner\">
\t\t\t\t\t\t";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 34
        echo "
\t\t";
        // line 35
        if ($this->getAttribute(($context["page"] ?? null), "fw_before_content", array())) {
            // line 36
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 37
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fw_before_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 40
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t";
        // line 42
        if ($this->getAttribute(($context["page"] ?? null), "before_content", array())) {
            // line 43
            echo "\t\t\t<div class=\"before_content area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "before_content", array()), "html", null, true));
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 53
        echo "\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<div id=\"content\" class=\"content content-full\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 58
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/main.html.twig"), "themes/gavias_upco/templates/page/page-layout/page--layout--container_sidebar.html.twig", 58)->display($context);
        // line 59
        echo "\t\t\t</div>
\t\t</div>

\t\t";
        // line 62
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 63
            echo "\t\t\t<div class=\"highlighted area\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t";
            // line 65
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 69
        echo "
\t\t";
        // line 70
        if ($this->getAttribute(($context["page"] ?? null), "after_content", array())) {
            // line 71
            echo "\t\t\t<div class=\"area after_content\">
\t\t\t\t<div class=\"container-fw\">
\t          \t<div class=\"content-inner\">
\t\t\t\t\t\t ";
            // line 74
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_content", array()), "html", null, true));
            echo "
\t          \t</div>
        \t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 79
        echo "\t\t
\t\t";
        // line 80
        if ($this->getAttribute(($context["page"] ?? null), "fw_after_content", array())) {
            // line 81
            echo "\t\t\t<div class=\"fw-before-content area\">
\t\t\t\t";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "fw_after_content", array()), "html", null, true));
            echo "
\t\t\t</div>
\t\t";
        }
        // line 85
        echo "\t</div>
</div>

";
        // line 88
        $this->loadTemplate((($context["directory"] ?? null) . "/templates/page/footer.html.twig"), "themes/gavias_upco/templates/page/page-layout/page--layout--container_sidebar.html.twig", 88)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/gavias_upco/templates/page/page-layout/page--layout--container_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 88,  192 => 85,  186 => 82,  183 => 81,  181 => 80,  178 => 79,  170 => 74,  165 => 71,  163 => 70,  160 => 69,  153 => 65,  149 => 63,  147 => 62,  142 => 59,  140 => 58,  133 => 53,  124 => 47,  118 => 43,  116 => 42,  112 => 40,  106 => 37,  103 => 36,  101 => 35,  98 => 34,  90 => 29,  85 => 26,  83 => 25,  79 => 23,  73 => 21,  70 => 20,  68 => 19,  62 => 15,  56 => 12,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_upco/templates/page/page-layout/page--layout--container_sidebar.html.twig", "/var/www/html/themes/gavias_upco/templates/page/page-layout/page--layout--container_sidebar.html.twig");
    }
}
