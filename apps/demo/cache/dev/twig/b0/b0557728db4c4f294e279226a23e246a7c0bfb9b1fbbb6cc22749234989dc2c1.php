<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_dd0513b95343118bcc2bf3c18a4f03f0c0da23e68a26984dd545a4b9c6aa69f0 extends Twig_Template
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
        $__internal_ae9391d1404e5b84494ab1e83779666dae30253957c09adaf09da837f3df4b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae9391d1404e5b84494ab1e83779666dae30253957c09adaf09da837f3df4b26->enter($__internal_ae9391d1404e5b84494ab1e83779666dae30253957c09adaf09da837f3df4b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_925bf4162689d17009504fd351c89add46d869801dbd23b27365280161694e24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_925bf4162689d17009504fd351c89add46d869801dbd23b27365280161694e24->enter($__internal_925bf4162689d17009504fd351c89add46d869801dbd23b27365280161694e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ae9391d1404e5b84494ab1e83779666dae30253957c09adaf09da837f3df4b26->leave($__internal_ae9391d1404e5b84494ab1e83779666dae30253957c09adaf09da837f3df4b26_prof);

        
        $__internal_925bf4162689d17009504fd351c89add46d869801dbd23b27365280161694e24->leave($__internal_925bf4162689d17009504fd351c89add46d869801dbd23b27365280161694e24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
