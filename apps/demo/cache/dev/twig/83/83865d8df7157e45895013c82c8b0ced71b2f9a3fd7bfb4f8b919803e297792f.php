<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_28b12bdd7d7b10d6230e5c0bc3cc0569ea66f517f64654ce5d1273c672dce741 extends Twig_Template
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
        $__internal_e021b1f72440925ad160d22b1c1b8a26fcc9ff3371024e111a328c69f9d73552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e021b1f72440925ad160d22b1c1b8a26fcc9ff3371024e111a328c69f9d73552->enter($__internal_e021b1f72440925ad160d22b1c1b8a26fcc9ff3371024e111a328c69f9d73552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2af8e0a6707aea51bd66eec7e8dbebf85ad4c2ec082a3352c46965263c4dcdda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2af8e0a6707aea51bd66eec7e8dbebf85ad4c2ec082a3352c46965263c4dcdda->enter($__internal_2af8e0a6707aea51bd66eec7e8dbebf85ad4c2ec082a3352c46965263c4dcdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e021b1f72440925ad160d22b1c1b8a26fcc9ff3371024e111a328c69f9d73552->leave($__internal_e021b1f72440925ad160d22b1c1b8a26fcc9ff3371024e111a328c69f9d73552_prof);

        
        $__internal_2af8e0a6707aea51bd66eec7e8dbebf85ad4c2ec082a3352c46965263c4dcdda->leave($__internal_2af8e0a6707aea51bd66eec7e8dbebf85ad4c2ec082a3352c46965263c4dcdda_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
