<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_94df93114f8b2b7e5fd660422fc2a3626cb5286208c5c6f1ba4060b3eb1e6699 extends Twig_Template
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
        $__internal_07536150bab38cde8af00b0c5660ddb8c2a56bd65e0f177b39539a406f4c29f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07536150bab38cde8af00b0c5660ddb8c2a56bd65e0f177b39539a406f4c29f8->enter($__internal_07536150bab38cde8af00b0c5660ddb8c2a56bd65e0f177b39539a406f4c29f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_165053ebc2e87a4843636b7b748f64c53e77e2b59bbb92e8bf6685d905e4ed32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165053ebc2e87a4843636b7b748f64c53e77e2b59bbb92e8bf6685d905e4ed32->enter($__internal_165053ebc2e87a4843636b7b748f64c53e77e2b59bbb92e8bf6685d905e4ed32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_07536150bab38cde8af00b0c5660ddb8c2a56bd65e0f177b39539a406f4c29f8->leave($__internal_07536150bab38cde8af00b0c5660ddb8c2a56bd65e0f177b39539a406f4c29f8_prof);

        
        $__internal_165053ebc2e87a4843636b7b748f64c53e77e2b59bbb92e8bf6685d905e4ed32->leave($__internal_165053ebc2e87a4843636b7b748f64c53e77e2b59bbb92e8bf6685d905e4ed32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
