<?php

/* SynapseCmfBundle:Component:static.html.twig */
class __TwigTemplate_5e0f8ddf01c0f066f0826c477d07fff1c9e844a38ce7eccf9b98dbee61ea216f extends Twig_Template
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
        $__internal_74d042a39bc7a78c70d832687083948dc11ab65ef5f09a471ca563dfe39c4e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d042a39bc7a78c70d832687083948dc11ab65ef5f09a471ca563dfe39c4e62->enter($__internal_74d042a39bc7a78c70d832687083948dc11ab65ef5f09a471ca563dfe39c4e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Component:static.html.twig"));

        $__internal_0370b07e18dd4e9b91b226827da0060a6aa462888a54dd916edbdf88473c7933 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0370b07e18dd4e9b91b226827da0060a6aa462888a54dd916edbdf88473c7933->enter($__internal_0370b07e18dd4e9b91b226827da0060a6aa462888a54dd916edbdf88473c7933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Component:static.html.twig"));

        // line 1
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context);
        echo "
";
        
        $__internal_74d042a39bc7a78c70d832687083948dc11ab65ef5f09a471ca563dfe39c4e62->leave($__internal_74d042a39bc7a78c70d832687083948dc11ab65ef5f09a471ca563dfe39c4e62_prof);

        
        $__internal_0370b07e18dd4e9b91b226827da0060a6aa462888a54dd916edbdf88473c7933->leave($__internal_0370b07e18dd4e9b91b226827da0060a6aa462888a54dd916edbdf88473c7933_prof);

    }

    public function getTemplateName()
    {
        return "SynapseCmfBundle:Component:static.html.twig";
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
", "SynapseCmfBundle:Component:static.html.twig", "/var/www/html/src/Synapse/Cmf/Bundle/Resources/views/Component/static.html.twig");
    }
}
