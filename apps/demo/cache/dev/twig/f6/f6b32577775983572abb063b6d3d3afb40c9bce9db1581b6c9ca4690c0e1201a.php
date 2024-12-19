<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_d9960686b85d00d106409a567330061b4335d237e5e22706eedf3f93bf0f93b8 extends Twig_Template
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
        $__internal_34e17d40ef94af89edf1537101503b8bbf6aaf1e7674cc790e6cf33207c136a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34e17d40ef94af89edf1537101503b8bbf6aaf1e7674cc790e6cf33207c136a6->enter($__internal_34e17d40ef94af89edf1537101503b8bbf6aaf1e7674cc790e6cf33207c136a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_05978c7d919d6ede5ee8320478aa6831a430c3d68105b820ebfec5a0f063c6f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05978c7d919d6ede5ee8320478aa6831a430c3d68105b820ebfec5a0f063c6f2->enter($__internal_05978c7d919d6ede5ee8320478aa6831a430c3d68105b820ebfec5a0f063c6f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_34e17d40ef94af89edf1537101503b8bbf6aaf1e7674cc790e6cf33207c136a6->leave($__internal_34e17d40ef94af89edf1537101503b8bbf6aaf1e7674cc790e6cf33207c136a6_prof);

        
        $__internal_05978c7d919d6ede5ee8320478aa6831a430c3d68105b820ebfec5a0f063c6f2->leave($__internal_05978c7d919d6ede5ee8320478aa6831a430c3d68105b820ebfec5a0f063c6f2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
