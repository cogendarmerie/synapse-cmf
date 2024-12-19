<?php

/* SynapseCmfBundle:Component:free.html.twig */
class __TwigTemplate_2101fea8d2dc3f635d8aaf66730e13a5deccb6e9de8afaabf42e40a1f0dda7b8 extends Twig_Template
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
        $__internal_1a36dfb918b2e94c0db82347ca6e60daa26e77f531116768860f80c4779c1556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a36dfb918b2e94c0db82347ca6e60daa26e77f531116768860f80c4779c1556->enter($__internal_1a36dfb918b2e94c0db82347ca6e60daa26e77f531116768860f80c4779c1556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Component:free.html.twig"));

        $__internal_3bacbe1ee36cc4a8a685b96977294ddb8964af00b43483061819b2e910edfa6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bacbe1ee36cc4a8a685b96977294ddb8964af00b43483061819b2e910edfa6c->enter($__internal_3bacbe1ee36cc4a8a685b96977294ddb8964af00b43483061819b2e910edfa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Component:free.html.twig"));

        // line 1
        echo ($context["html"] ?? $this->getContext($context, "html"));
        echo "
";
        
        $__internal_1a36dfb918b2e94c0db82347ca6e60daa26e77f531116768860f80c4779c1556->leave($__internal_1a36dfb918b2e94c0db82347ca6e60daa26e77f531116768860f80c4779c1556_prof);

        
        $__internal_3bacbe1ee36cc4a8a685b96977294ddb8964af00b43483061819b2e910edfa6c->leave($__internal_3bacbe1ee36cc4a8a685b96977294ddb8964af00b43483061819b2e910edfa6c_prof);

    }

    public function getTemplateName()
    {
        return "SynapseCmfBundle:Component:free.html.twig";
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
        return new Twig_Source("{{ html|raw }}
", "SynapseCmfBundle:Component:free.html.twig", "/var/www/html/src/Synapse/Cmf/Bundle/Resources/views/Component/free.html.twig");
    }
}
