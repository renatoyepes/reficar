<?php

/* {# inline_template_start #}<div class="row">
	<div class="col-sm-4 panels-img marginless">
            <div class="icon-circle">
                {{ field_image }}
            </div>
        </div>
	<div class="col-sm-8 panels-txt marginless">
		<h3>{{ title }}</h3>
		<div>{{ body }}</div>
	</div>
</div> */
class __TwigTemplate_56fc9a6d30a52ca7b5c78bd8880622171a0bfcd45ccc1e5cef4719e4aeb9fbc2 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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
        echo "<div class=\"row\">
\t<div class=\"col-sm-4 panels-img marginless\">
            <div class=\"icon-circle\">
                ";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "
            </div>
        </div>
\t<div class=\"col-sm-8 panels-txt marginless\">
\t\t<h3>";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "</h3>
\t\t<div>";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"row\">
\t<div class=\"col-sm-4 panels-img marginless\">
            <div class=\"icon-circle\">
                {{ field_image }}
            </div>
        </div>
\t<div class=\"col-sm-8 panels-txt marginless\">
\t\t<h3>{{ title }}</h3>
\t\t<div>{{ body }}</div>
\t</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 9,  65 => 8,  58 => 4,  53 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"row\">
\t<div class=\"col-sm-4 panels-img marginless\">
            <div class=\"icon-circle\">
                {{ field_image }}
            </div>
        </div>
\t<div class=\"col-sm-8 panels-txt marginless\">
\t\t<h3>{{ title }}</h3>
\t\t<div>{{ body }}</div>
\t</div>
</div>", "");
    }
}
