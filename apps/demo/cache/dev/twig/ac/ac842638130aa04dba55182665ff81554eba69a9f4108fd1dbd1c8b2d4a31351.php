<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c79a09b77a871b34bc787c463bfc1b089ac7b2c10f8d3587c6e6c5580ded4784 extends Twig_Template
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
        $__internal_2c3786e0d1ddf1d767192251bebd888980a096bf6e4c4c41e13e9c63cdc309b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3786e0d1ddf1d767192251bebd888980a096bf6e4c4c41e13e9c63cdc309b3->enter($__internal_2c3786e0d1ddf1d767192251bebd888980a096bf6e4c4c41e13e9c63cdc309b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c989a498e27c654c1d94159dfa0fd17a46a804a0a255a9100929f8d5453e5ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c989a498e27c654c1d94159dfa0fd17a46a804a0a255a9100929f8d5453e5ef1->enter($__internal_c989a498e27c654c1d94159dfa0fd17a46a804a0a255a9100929f8d5453e5ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_2c3786e0d1ddf1d767192251bebd888980a096bf6e4c4c41e13e9c63cdc309b3->leave($__internal_2c3786e0d1ddf1d767192251bebd888980a096bf6e4c4c41e13e9c63cdc309b3_prof);

        
        $__internal_c989a498e27c654c1d94159dfa0fd17a46a804a0a255a9100929f8d5453e5ef1->leave($__internal_c989a498e27c654c1d94159dfa0fd17a46a804a0a255a9100929f8d5453e5ef1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
