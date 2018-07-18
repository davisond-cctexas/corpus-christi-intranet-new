<?php

/* themes/gavias_upco/templates/page/footer.html.twig */
class __TwigTemplate_64f42750bcc37558145914fb0ba7a9100a26ee43823b2d609cf094e5128d2e09 extends Twig_Template
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
        $tags = array("if" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 1
        if ($this->getAttribute(($context["page"] ?? null), "message", array())) {
            // line 2
            echo "  <div class=\"gva-drupal-message-status\">
    ";
            // line 3
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "message", array()), "html", null, true));
            echo "
  </div>
";
        }
        // line 6
        echo "  
<footer id=\"footer\" class=\"footer\">
  <div class=\"footer-inner\">
    
    ";
        // line 10
        if ($this->getAttribute(($context["page"] ?? null), "before_footer", array())) {
            // line 11
            echo "     <div class=\"footer-top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <div class=\"before-footer clearfix area\">
                  ";
            // line 16
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "before_footer", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>     
        </div>   
      </div> 
     ";
        }
        // line 23
        echo "     
     <div class=\"footer-center\">
        <div class=\"container\">      
           <div class=\"row\">
              ";
        // line 27
        if ($this->getAttribute(($context["page"] ?? null), "footer_first", array())) {
            // line 28
            echo "                <div class=\"footer-first col-lg-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_size"] ?? null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_first_size"] ?? null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 29
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 32
        echo "
              ";
        // line 33
        if ($this->getAttribute(($context["page"] ?? null), "footer_second", array())) {
            // line 34
            echo "               <div class=\"footer-second col-lg-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_second_size"] ?? null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_second_size"] ?? null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 38
        echo "
              ";
        // line 39
        if ($this->getAttribute(($context["page"] ?? null), "footer_third", array())) {
            // line 40
            echo "                <div class=\"footer-third col-lg-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_size"] ?? null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_third_size"] ?? null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 44
        echo "
              ";
        // line 45
        if ($this->getAttribute(($context["page"] ?? null), "footer_four", array())) {
            // line 46
            echo "                 <div class=\"footer-four col-lg-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_four_size"] ?? null), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer_four_size"] ?? null), "html", null, true));
            echo " col-sm-12 col-xs-12 column\">
                  ";
            // line 47
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_four", array()), "html", null, true));
            echo "
                </div> 
              ";
        }
        // line 50
        echo "           </div>   
        </div>
    </div>  
    ";
        // line 53
        if ($this->getAttribute(($context["page"] ?? null), "after_footer", array())) {
            // line 54
            echo "      <div class=\"footer-bottom\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
              <div class=\"after-footer clearfix area\">
                  ";
            // line 59
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "after_footer", array()), "html", null, true));
            echo "
              </div>
            </div>
          </div>     
        </div>   
      </div> 
    ";
        }
        // line 66
        echo "  </div>   

  ";
        // line 68
        if ($this->getAttribute(($context["page"] ?? null), "copyright", array())) {
            // line 69
            echo "    <div class=\"copyright\">
      <div class=\"container\">
        <div class=\"copyright-inner\">
            ";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "copyright", array()), "html", null, true));
            echo "
        </div>   
      </div>   
    </div>
  ";
        }
        // line 77
        echo " 
</footer>

";
    }

    public function getTemplateName()
    {
        return "themes/gavias_upco/templates/page/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 77,  189 => 72,  184 => 69,  182 => 68,  178 => 66,  168 => 59,  161 => 54,  159 => 53,  154 => 50,  148 => 47,  141 => 46,  139 => 45,  136 => 44,  130 => 41,  123 => 40,  121 => 39,  118 => 38,  112 => 35,  105 => 34,  103 => 33,  100 => 32,  94 => 29,  87 => 28,  85 => 27,  79 => 23,  69 => 16,  62 => 11,  60 => 10,  54 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/gavias_upco/templates/page/footer.html.twig", "/var/www/html/themes/gavias_upco/templates/page/footer.html.twig");
    }
}
