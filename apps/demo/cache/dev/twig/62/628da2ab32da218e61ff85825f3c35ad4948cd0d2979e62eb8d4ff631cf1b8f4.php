<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_2bf5945f730041405b1870590bd078ab39f8b29275655f7d070a3ae276af70d9 extends Twig_Template
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
        $__internal_f7462f4be0bbc65da02508a6bd76b6fa4bbe3932764a2c1ba4a964893be888cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7462f4be0bbc65da02508a6bd76b6fa4bbe3932764a2c1ba4a964893be888cc->enter($__internal_f7462f4be0bbc65da02508a6bd76b6fa4bbe3932764a2c1ba4a964893be888cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c49991e300a49ca21a537a39359040321b9b83241e63e8335e50b25e4a73c275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c49991e300a49ca21a537a39359040321b9b83241e63e8335e50b25e4a73c275->enter($__internal_c49991e300a49ca21a537a39359040321b9b83241e63e8335e50b25e4a73c275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f7462f4be0bbc65da02508a6bd76b6fa4bbe3932764a2c1ba4a964893be888cc->leave($__internal_f7462f4be0bbc65da02508a6bd76b6fa4bbe3932764a2c1ba4a964893be888cc_prof);

        
        $__internal_c49991e300a49ca21a537a39359040321b9b83241e63e8335e50b25e4a73c275->leave($__internal_c49991e300a49ca21a537a39359040321b9b83241e63e8335e50b25e4a73c275_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
