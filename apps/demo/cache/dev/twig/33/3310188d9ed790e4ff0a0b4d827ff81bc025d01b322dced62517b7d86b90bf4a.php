<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0a20e48522bec266761629324e655b7e419f6fa56dd6a3ecbd5ed1bba8b795f3 extends Twig_Template
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
        $__internal_fc36dd5598d4e06c45ec4188458ed6bfae012eaf90ee003e51e29d9012315471 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc36dd5598d4e06c45ec4188458ed6bfae012eaf90ee003e51e29d9012315471->enter($__internal_fc36dd5598d4e06c45ec4188458ed6bfae012eaf90ee003e51e29d9012315471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_af0523cf4bad4f8b97bd54cf9edc6ca8d1203a9ff637385e317c2086aae20e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0523cf4bad4f8b97bd54cf9edc6ca8d1203a9ff637385e317c2086aae20e60->enter($__internal_af0523cf4bad4f8b97bd54cf9edc6ca8d1203a9ff637385e317c2086aae20e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fc36dd5598d4e06c45ec4188458ed6bfae012eaf90ee003e51e29d9012315471->leave($__internal_fc36dd5598d4e06c45ec4188458ed6bfae012eaf90ee003e51e29d9012315471_prof);

        
        $__internal_af0523cf4bad4f8b97bd54cf9edc6ca8d1203a9ff637385e317c2086aae20e60->leave($__internal_af0523cf4bad4f8b97bd54cf9edc6ca8d1203a9ff637385e317c2086aae20e60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
