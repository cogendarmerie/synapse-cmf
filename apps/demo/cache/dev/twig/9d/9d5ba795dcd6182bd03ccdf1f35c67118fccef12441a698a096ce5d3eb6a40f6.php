<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_91c2a7beab30539c92729c987c05dd3f3ce162507eb99887e3e41ffc280f6507 extends Twig_Template
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
        $__internal_275963c6f13ad698117be9b6daaa369ec542aa647a338b55bd748bd7cc369c5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275963c6f13ad698117be9b6daaa369ec542aa647a338b55bd748bd7cc369c5f->enter($__internal_275963c6f13ad698117be9b6daaa369ec542aa647a338b55bd748bd7cc369c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6f7158d2de8b15c33f82c63544ef930228549f4b2ebdf1f12f4f7d5c01d9c957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f7158d2de8b15c33f82c63544ef930228549f4b2ebdf1f12f4f7d5c01d9c957->enter($__internal_6f7158d2de8b15c33f82c63544ef930228549f4b2ebdf1f12f4f7d5c01d9c957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_275963c6f13ad698117be9b6daaa369ec542aa647a338b55bd748bd7cc369c5f->leave($__internal_275963c6f13ad698117be9b6daaa369ec542aa647a338b55bd748bd7cc369c5f_prof);

        
        $__internal_6f7158d2de8b15c33f82c63544ef930228549f4b2ebdf1f12f4f7d5c01d9c957->leave($__internal_6f7158d2de8b15c33f82c63544ef930228549f4b2ebdf1f12f4f7d5c01d9c957_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
