<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8549100c1f8906a13c4e8d8fcb664a6db41a63dcdf387e261cd14286bddec119 extends Twig_Template
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
        $__internal_6de2517c1fcb3ea1d5b1eb61bb7c1e34f4f906de25c8a1f4f898c4ebd710bc75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6de2517c1fcb3ea1d5b1eb61bb7c1e34f4f906de25c8a1f4f898c4ebd710bc75->enter($__internal_6de2517c1fcb3ea1d5b1eb61bb7c1e34f4f906de25c8a1f4f898c4ebd710bc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_95bc80b0db96afe5477161c8a5634e8e9850418f6d65adb658566de6bacff301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95bc80b0db96afe5477161c8a5634e8e9850418f6d65adb658566de6bacff301->enter($__internal_95bc80b0db96afe5477161c8a5634e8e9850418f6d65adb658566de6bacff301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_6de2517c1fcb3ea1d5b1eb61bb7c1e34f4f906de25c8a1f4f898c4ebd710bc75->leave($__internal_6de2517c1fcb3ea1d5b1eb61bb7c1e34f4f906de25c8a1f4f898c4ebd710bc75_prof);

        
        $__internal_95bc80b0db96afe5477161c8a5634e8e9850418f6d65adb658566de6bacff301->leave($__internal_95bc80b0db96afe5477161c8a5634e8e9850418f6d65adb658566de6bacff301_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
