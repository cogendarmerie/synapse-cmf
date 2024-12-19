<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5ed3c0f1573f0d1bd67080a523e8a9b84870eee810132512d0ac242367115188 extends Twig_Template
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
        $__internal_438af10fac73e89642eb67089a157c6b6b54e9a4e6878f5a54df84daaee42f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_438af10fac73e89642eb67089a157c6b6b54e9a4e6878f5a54df84daaee42f12->enter($__internal_438af10fac73e89642eb67089a157c6b6b54e9a4e6878f5a54df84daaee42f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a2edffbab86a36e4312c6103a326caee28152dae602c7bb918333ef4f662abbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2edffbab86a36e4312c6103a326caee28152dae602c7bb918333ef4f662abbb->enter($__internal_a2edffbab86a36e4312c6103a326caee28152dae602c7bb918333ef4f662abbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_438af10fac73e89642eb67089a157c6b6b54e9a4e6878f5a54df84daaee42f12->leave($__internal_438af10fac73e89642eb67089a157c6b6b54e9a4e6878f5a54df84daaee42f12_prof);

        
        $__internal_a2edffbab86a36e4312c6103a326caee28152dae602c7bb918333ef4f662abbb->leave($__internal_a2edffbab86a36e4312c6103a326caee28152dae602c7bb918333ef4f662abbb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
