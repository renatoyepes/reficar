<?php

/* modules/contrib/swiper/templates/swiper.html.twig */
class __TwigTemplate_78d1519792e842e4c616a6527d50e365d313f7b0481ada71e77be6ca084aa85b extends Twig_Template
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
        $tags = array("if" => 19);
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

        // line 14
        echo "
<div";
        // line 15
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 16
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "list", array()), "html", null, true));
        echo "

  ";
        // line 19
        echo "  ";
        if ($this->getAttribute(($context["settings"] ?? null), "pagination", array())) {
            // line 20
            echo "    <div class=\"swiper-pagination\"></div>
  ";
        }
        // line 22
        echo "
  ";
        // line 24
        echo "  ";
        if ($this->getAttribute(($context["settings"] ?? null), "navButtons", array())) {
            // line 25
            echo "    <div class=\"swiper-button-prev\"></div>
    <div class=\"swiper-button-next\"></div>
  ";
        }
        // line 28
        echo "
  ";
        // line 30
        echo "  ";
        if ($this->getAttribute(($context["settings"] ?? null), "scrollbar", array())) {
            // line 31
            echo "    <div class=\"swiper-scrollbar\"></div>
  ";
        }
        // line 33
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/swiper/templates/swiper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 33,  79 => 31,  76 => 30,  73 => 28,  68 => 25,  65 => 24,  62 => 22,  58 => 20,  55 => 19,  50 => 16,  46 => 15,  43 => 14,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/contrib/swiper/templates/swiper.html.twig", "D:\\Projects\\reficar\\modules\\contrib\\swiper\\templates\\swiper.html.twig");
    }
}
