<?php

/* SynapseDemoThemeBundle:Template:home.html.twig */
class __TwigTemplate_cbd6ac4ad6181ebe0a4a5c9f310dd30739edc8a96890e4b4295b9344f6c4a65a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseDemoThemeBundle::layout.html.twig", "SynapseDemoThemeBundle:Template:home.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynapseDemoThemeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_698dff391ad0eb3d3f1c669c028ef74920387be8df235dc976d2d9aa86f4eb25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_698dff391ad0eb3d3f1c669c028ef74920387be8df235dc976d2d9aa86f4eb25->enter($__internal_698dff391ad0eb3d3f1c669c028ef74920387be8df235dc976d2d9aa86f4eb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle:Template:home.html.twig"));

        $__internal_6cfc5b76cb8187ac89f78549ba7b09cdecafd61721d0327b56f8a4a48bf4a7fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfc5b76cb8187ac89f78549ba7b09cdecafd61721d0327b56f8a4a48bf4a7fa->enter($__internal_6cfc5b76cb8187ac89f78549ba7b09cdecafd61721d0327b56f8a4a48bf4a7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle:Template:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_698dff391ad0eb3d3f1c669c028ef74920387be8df235dc976d2d9aa86f4eb25->leave($__internal_698dff391ad0eb3d3f1c669c028ef74920387be8df235dc976d2d9aa86f4eb25_prof);

        
        $__internal_6cfc5b76cb8187ac89f78549ba7b09cdecafd61721d0327b56f8a4a48bf4a7fa->leave($__internal_6cfc5b76cb8187ac89f78549ba7b09cdecafd61721d0327b56f8a4a48bf4a7fa_prof);

    }

    public function getTemplateName()
    {
        return "SynapseDemoThemeBundle:Template:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SynapseDemoThemeBundle::layout.html.twig' %}
", "SynapseDemoThemeBundle:Template:home.html.twig", "/var/www/html/src/Synapse/Demo/Bundle/ThemeBundle/Resources/views/Template/home.html.twig");
    }
}
