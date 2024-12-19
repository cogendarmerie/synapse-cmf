<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_14f6e973663be77ead4fe48063033079d2d89cc33978f7595481c20b64771326 extends Twig_Template
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
        $__internal_94b6e38db284395efcf488337e6f05d940bae6655f59933252b9a1120c9587ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94b6e38db284395efcf488337e6f05d940bae6655f59933252b9a1120c9587ef->enter($__internal_94b6e38db284395efcf488337e6f05d940bae6655f59933252b9a1120c9587ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_b3cc5503c68eca403e5609158273c9b1565fe6c80a356040bab8f3097340bab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3cc5503c68eca403e5609158273c9b1565fe6c80a356040bab8f3097340bab6->enter($__internal_b3cc5503c68eca403e5609158273c9b1565fe6c80a356040bab8f3097340bab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        
        $__internal_94b6e38db284395efcf488337e6f05d940bae6655f59933252b9a1120c9587ef->leave($__internal_94b6e38db284395efcf488337e6f05d940bae6655f59933252b9a1120c9587ef_prof);

        
        $__internal_b3cc5503c68eca403e5609158273c9b1565fe6c80a356040bab8f3097340bab6->leave($__internal_b3cc5503c68eca403e5609158273c9b1565fe6c80a356040bab8f3097340bab6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
