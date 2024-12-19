<?php

/* SynapseCmfBundle:Component:gallery.html.twig */
class __TwigTemplate_730d59c0713a0d8b265d3304074ddcf38a6486c3df6bf690c14bfd4747d46b0c extends Twig_Template
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
        $__internal_d2f4f5c9fb85d1fe9e0f96f535b18670e87939dea8aede4c77d79ef7f072e43a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2f4f5c9fb85d1fe9e0f96f535b18670e87939dea8aede4c77d79ef7f072e43a->enter($__internal_d2f4f5c9fb85d1fe9e0f96f535b18670e87939dea8aede4c77d79ef7f072e43a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Component:gallery.html.twig"));

        $__internal_bf5ff3ba02175e2ac1a4fc2755906cc1b88987648c6dbf526c68f0b931c93ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5ff3ba02175e2ac1a4fc2755906cc1b88987648c6dbf526c68f0b931c93ab7->enter($__internal_bf5ff3ba02175e2ac1a4fc2755906cc1b88987648c6dbf526c68f0b931c93ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Component:gallery.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
";
        
        $__internal_d2f4f5c9fb85d1fe9e0f96f535b18670e87939dea8aede4c77d79ef7f072e43a->leave($__internal_d2f4f5c9fb85d1fe9e0f96f535b18670e87939dea8aede4c77d79ef7f072e43a_prof);

        
        $__internal_bf5ff3ba02175e2ac1a4fc2755906cc1b88987648c6dbf526c68f0b931c93ab7->leave($__internal_bf5ff3ba02175e2ac1a4fc2755906cc1b88987648c6dbf526c68f0b931c93ab7_prof);

    }

    public function getTemplateName()
    {
        return "SynapseCmfBundle:Component:gallery.html.twig";
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
        return new Twig_Source("{{ dump() }}
", "SynapseCmfBundle:Component:gallery.html.twig", "/var/www/html/src/Synapse/Cmf/Bundle/Resources/views/Component/gallery.html.twig");
    }
}
