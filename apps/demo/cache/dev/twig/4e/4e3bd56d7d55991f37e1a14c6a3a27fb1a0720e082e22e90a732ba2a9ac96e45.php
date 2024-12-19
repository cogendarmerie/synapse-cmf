<?php

/* SynapseCmfBundle:Component:text.html.twig */
class __TwigTemplate_8252b97f67cd25cca47e6dbfaf3fae8cf876bccad9ce2871f04c74554646fa3a extends Twig_Template
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
        $__internal_d06bf860c69e74fe81ae0af9c9c6a8bc857ee905332c42f4bafad523c09e3613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d06bf860c69e74fe81ae0af9c9c6a8bc857ee905332c42f4bafad523c09e3613->enter($__internal_d06bf860c69e74fe81ae0af9c9c6a8bc857ee905332c42f4bafad523c09e3613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Component:text.html.twig"));

        $__internal_bd3742f0e2841fae492655f93f0b0a17f2bb07e12bf3fa309e2ef2f966acac22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd3742f0e2841fae492655f93f0b0a17f2bb07e12bf3fa309e2ef2f966acac22->enter($__internal_bd3742f0e2841fae492655f93f0b0a17f2bb07e12bf3fa309e2ef2f966acac22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Component:text.html.twig"));

        // line 1
        echo "<section>
  <h3>";
        // line 2
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")));
        echo "</h3>
  <article>";
        // line 3
        echo (($this->getAttribute($this->getAttribute(($context["config"] ?? $this->getContext($context, "config")), "html", array()), "enabled", array())) ? (($context["text"] ?? $this->getContext($context, "text"))) : (twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")))));
        echo "</article>
</section>
";
        
        $__internal_d06bf860c69e74fe81ae0af9c9c6a8bc857ee905332c42f4bafad523c09e3613->leave($__internal_d06bf860c69e74fe81ae0af9c9c6a8bc857ee905332c42f4bafad523c09e3613_prof);

        
        $__internal_bd3742f0e2841fae492655f93f0b0a17f2bb07e12bf3fa309e2ef2f966acac22->leave($__internal_bd3742f0e2841fae492655f93f0b0a17f2bb07e12bf3fa309e2ef2f966acac22_prof);

    }

    public function getTemplateName()
    {
        return "SynapseCmfBundle:Component:text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section>
  <h3>{{ title|e }}</h3>
  <article>{{ config.html.enabled ? text|raw : text|e }}</article>
</section>
", "SynapseCmfBundle:Component:text.html.twig", "/var/www/html/src/Synapse/Cmf/Bundle/Resources/views/Component/text.html.twig");
    }
}
