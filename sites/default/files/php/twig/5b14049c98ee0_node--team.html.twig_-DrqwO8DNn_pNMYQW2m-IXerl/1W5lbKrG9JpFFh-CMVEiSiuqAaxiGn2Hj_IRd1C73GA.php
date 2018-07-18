<?php

/* themes/gavias_upco/templates/node/node--team.html.twig */
class __TwigTemplate_e362caa711c466f2a69cab8f5e7fbbb19aed02805a437bd7c4d42f2a25b71c50 extends Twig_Template
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
        $tags = array("set" => 2, "if" => 14);
        $filters = array("clean_class" => 4, "e" => 19, "t" => 61, "without" => 96);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'e', 't', 'without'),
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

        // line 2
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 4
($context["node"] ?? null), "bundle", array()))), 2 => (($this->getAttribute(        // line 5
($context["node"] ?? null), "isPromoted", array(), "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 6
($context["node"] ?? null), "isSticky", array(), "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 7
($context["node"] ?? null), "isPublished", array(), "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 8
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass(($context["view_mode"] ?? null)))) : ("")), 6 => "clearfix");
        // line 12
        echo " 
<!-- Start Display article for teaser page -->
";
        // line 14
        if ((($context["teaser"] ?? null) == true)) {
            echo " 
<div";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
            echo ">
  <div class=\"team-block\">
    <div class=\"team-image\">";
            // line 17
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_image", array()), "html", null, true));
            echo "</div>
    <div class=\"team-content\">
      <div class=\"team-name\"><a href=\"";
            // line 19
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["url"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", array()), "value", array())));
            echo "</a></div>
      <div class=\"team-job\">";
            // line 20
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", array()), "value", array())));
            echo "</div>
      <div class=\"socials-team\">
        ";
            // line 22
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", array()), "value", array())) {
                // line 23
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fa fa-facebook\"></i></a>
        ";
            }
            // line 24
            echo " 
        ";
            // line 25
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", array()), "value", array())) {
                // line 26
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fa fa-google\"></i></a>
        ";
            }
            // line 27
            echo " 
        ";
            // line 28
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", array()), "value", array())) {
                // line 29
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fa fa-pinterest\"></i></a>
        ";
            }
            // line 30
            echo " 
        ";
            // line 31
            if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", array()), "value", array())) {
                // line 32
                echo "          <a class=\"gva-social\" href=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", array()), "value", array()), "html", null, true));
                echo "\"><i class=\"fa fa-twitter\"></i></a>
        ";
            }
            // line 33
            echo " 
      </div>
    </div>
  </div>
</div>  

<!-- End Display article for teaser page -->
";
        } else {
            // line 41
            echo "<!-- Start Display article for detail page -->

<article";
            // line 43
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "addClass", array(0 => "node-detail"), "method"), "html", null, true));
            echo ">
  <div class=\"team-single-page\">

    <div class=\"team-name clearfix\">
      <div class=\"name\">";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_name", array()), "value", array())));
            echo "</div>
      <div class=\"job\">";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_position", array()), "value", array())));
            echo "</div>
      <div class=\"line\"><span class=\"one\"></span><span class=\"second\"></span><span class=\"three\"></span></div>
    </div> 
    <div class=\"team-description\">";
            // line 51
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_description", array()), "html", null, true));
            echo "</div>
    <div class=\"team-info\">
      <div class=\"row\">
        <div class=\"col-lg-4 col-sm-12 col-xs-12\">
          <div class=\"team-image\">";
            // line 55
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_image", array()), "html", null, true));
            echo "</div>
        </div>
        <div class=\"col-lg-8 col-sm-12 col-xs-12\">
          <div class=\"team-contact\">
            
            ";
            // line 60
            if ($this->getAttribute(($context["content"] ?? null), "field_team_contact", array())) {
                // line 61
                echo "              <div class=\"heading\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Contact Info")));
                echo "</div>
              <div class=\"content-inner\">";
                // line 62
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_contact", array()), "html", null, true));
                echo "</div>
            ";
            }
            // line 64
            echo "
            ";
            // line 65
            if ($this->getAttribute(($context["node"] ?? null), "field_team_social", array())) {
                // line 66
                echo "              <div class=\"socials\">
                ";
                // line 67
                if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", array()), "value", array())) {
                    // line 68
                    echo "                  <a class=\"gva-social\" href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_facebook", array()), "value", array()), "html", null, true));
                    echo "\"><i class=\"fa fa-facebook\"></i></a>
                ";
                }
                // line 69
                echo " 
                ";
                // line 70
                if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", array()), "value", array())) {
                    // line 71
                    echo "                  <a class=\"gva-social\" href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_google", array()), "value", array()), "html", null, true));
                    echo "\"><i class=\"fa fa-google\"></i></a>
                ";
                }
                // line 72
                echo " 
                ";
                // line 73
                if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", array()), "value", array())) {
                    // line 74
                    echo "                  <a class=\"gva-social\" href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_pinterest", array()), "value", array()), "html", null, true));
                    echo "\"><i class=\"fa fa-pinterest\"></i></a>
                ";
                }
                // line 75
                echo " 
                ";
                // line 76
                if ($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", array()), "value", array())) {
                    // line 77
                    echo "                  <a class=\"gva-social\" href=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_team_twitter", array()), "value", array()), "html", null, true));
                    echo "\"><i class=\"fa fa-twitter\"></i></a>
                ";
                }
                // line 78
                echo " 
              </div>
            ";
            }
            // line 80
            echo " 

          </div>

          ";
            // line 84
            if ($this->getAttribute(($context["content"] ?? null), "field_team_education", array())) {
                // line 85
                echo "            <div class=\"team-education\">
              <div class=\"heading\">";
                // line 86
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Education")));
                echo "</div>
              <div class=\"content-inner\">";
                // line 87
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_education", array()), "html", null, true));
                echo "</div>
            </div>
          ";
            }
            // line 90
            echo "
        </div>
      </div>
    </div> 

    <div";
            // line 95
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => "node__content", 1 => "clearfix"), "method"), "html", null, true));
            echo ">
      ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without(($context["content"] ?? null), "field_team_name", "field_team_contact", "field_team_image", "field_team_contact", "field_team_quote", "field_team_social", "field_team_education", "field_team_position", "field_team_email", "field_team_description", "comment"), "html", null, true));
            echo "
    </div>
    
    ";
            // line 99
            if ($this->getAttribute(($context["content"] ?? null), "field_team_quote", array())) {
                // line 100
                echo "      <div class=\"team-quote\"> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "field_team_quote", array()), "html", null, true));
                echo " </div>
    ";
            }
            // line 102
            echo "
    ";
            // line 103
            if ($this->getAttribute(($context["content"] ?? null), "comment", array())) {
                // line 104
                echo "      <div id=\"node-single-comment\">
        ";
                // line 105
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "comment", array()), "html", null, true));
                echo "
      </div>
    ";
            }
            // line 107
            echo "  

  </div>
</article>

<!-- End Display article for detail page -->
";
        }
        // line 114
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/gavias_upco/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 114,  292 => 107,  286 => 105,  283 => 104,  281 => 103,  278 => 102,  272 => 100,  270 => 99,  264 => 96,  260 => 95,  253 => 90,  247 => 87,  243 => 86,  240 => 85,  238 => 84,  232 => 80,  227 => 78,  221 => 77,  219 => 76,  216 => 75,  210 => 74,  208 => 73,  205 => 72,  199 => 71,  197 => 70,  194 => 69,  188 => 68,  186 => 67,  183 => 66,  181 => 65,  178 => 64,  173 => 62,  168 => 61,  166 => 60,  158 => 55,  151 => 51,  145 => 48,  141 => 47,  134 => 43,  130 => 41,  120 => 33,  114 => 32,  112 => 31,  109 => 30,  103 => 29,  101 => 28,  98 => 27,  92 => 26,  90 => 25,  87 => 24,  81 => 23,  79 => 22,  74 => 20,  68 => 19,  63 => 17,  58 => 15,  54 => 14,  50 => 12,  48 => 8,  47 => 7,  46 => 6,  45 => 5,  44 => 4,  43 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_upco/templates/node/node--team.html.twig", "/var/www/html/themes/gavias_upco/templates/node/node--team.html.twig");
    }
}
