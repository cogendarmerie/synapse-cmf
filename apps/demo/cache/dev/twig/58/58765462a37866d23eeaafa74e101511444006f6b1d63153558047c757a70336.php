<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_32d44067ec40eccc7ed62fa51f0d0d595c07a0dda102f3717bcdc81778942a52 extends Twig_Template
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
        $__internal_679db9a8618bb1812ed189eaa66746712289e511642c07ded6b57f0dc06fde13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_679db9a8618bb1812ed189eaa66746712289e511642c07ded6b57f0dc06fde13->enter($__internal_679db9a8618bb1812ed189eaa66746712289e511642c07ded6b57f0dc06fde13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_52432753781d4f55b8ed4e3f89a02d6017e5a30b4ecf72a551721d8e1674c7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52432753781d4f55b8ed4e3f89a02d6017e5a30b4ecf72a551721d8e1674c7ba->enter($__internal_52432753781d4f55b8ed4e3f89a02d6017e5a30b4ecf72a551721d8e1674c7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => ($context["exception"] ?? $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_679db9a8618bb1812ed189eaa66746712289e511642c07ded6b57f0dc06fde13->leave($__internal_679db9a8618bb1812ed189eaa66746712289e511642c07ded6b57f0dc06fde13_prof);

        
        $__internal_52432753781d4f55b8ed4e3f89a02d6017e5a30b4ecf72a551721d8e1674c7ba->leave($__internal_52432753781d4f55b8ed4e3f89a02d6017e5a30b4ecf72a551721d8e1674c7ba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
