<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_bf7e76247aa147263c7311cd150aabded2a89abce26d62c64c9bd1e77be4c425 extends Twig_Template
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
        $__internal_5b723af0df113e9ac146e6ba9d54eeb3b95e39c6b1a07c21629440e118a1f156 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b723af0df113e9ac146e6ba9d54eeb3b95e39c6b1a07c21629440e118a1f156->enter($__internal_5b723af0df113e9ac146e6ba9d54eeb3b95e39c6b1a07c21629440e118a1f156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d70b70bdab84a0c7f6609bb7576e6eaf215e4ca91a01bb93a50c5761e7faee9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d70b70bdab84a0c7f6609bb7576e6eaf215e4ca91a01bb93a50c5761e7faee9b->enter($__internal_d70b70bdab84a0c7f6609bb7576e6eaf215e4ca91a01bb93a50c5761e7faee9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5b723af0df113e9ac146e6ba9d54eeb3b95e39c6b1a07c21629440e118a1f156->leave($__internal_5b723af0df113e9ac146e6ba9d54eeb3b95e39c6b1a07c21629440e118a1f156_prof);

        
        $__internal_d70b70bdab84a0c7f6609bb7576e6eaf215e4ca91a01bb93a50c5761e7faee9b->leave($__internal_d70b70bdab84a0c7f6609bb7576e6eaf215e4ca91a01bb93a50c5761e7faee9b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
