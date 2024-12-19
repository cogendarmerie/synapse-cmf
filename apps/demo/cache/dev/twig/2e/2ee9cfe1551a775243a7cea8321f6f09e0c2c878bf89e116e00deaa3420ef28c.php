<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_452e3d300f2e1416ccbc17d4042063e92b1510f7002cd470d21ebf298ab6d8f5 extends Twig_Template
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
        $__internal_e90e943d441e92d1bfe2545371d40a366a694ba9989abec8f436dfc7e25f5e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90e943d441e92d1bfe2545371d40a366a694ba9989abec8f436dfc7e25f5e24->enter($__internal_e90e943d441e92d1bfe2545371d40a366a694ba9989abec8f436dfc7e25f5e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_e0681a581ab51c7c052aa5360ade5c454706cd0f6c61b28863c3a34656014d37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0681a581ab51c7c052aa5360ade5c454706cd0f6c61b28863c3a34656014d37->enter($__internal_e0681a581ab51c7c052aa5360ade5c454706cd0f6c61b28863c3a34656014d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_e90e943d441e92d1bfe2545371d40a366a694ba9989abec8f436dfc7e25f5e24->leave($__internal_e90e943d441e92d1bfe2545371d40a366a694ba9989abec8f436dfc7e25f5e24_prof);

        
        $__internal_e0681a581ab51c7c052aa5360ade5c454706cd0f6c61b28863c3a34656014d37->leave($__internal_e0681a581ab51c7c052aa5360ade5c454706cd0f6c61b28863c3a34656014d37_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
