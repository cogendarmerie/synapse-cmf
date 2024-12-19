<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_acb18651d6d0deb3725144e1192ef258a38b73c6d3b48c792455ef6c5560ebc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf388c6e66aff3366493a4a53fcd489f27b3169f76d08b8a7eb15b2b90d8bda2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf388c6e66aff3366493a4a53fcd489f27b3169f76d08b8a7eb15b2b90d8bda2->enter($__internal_bf388c6e66aff3366493a4a53fcd489f27b3169f76d08b8a7eb15b2b90d8bda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4619ea12d79439feade7811137fbdcefd65aa0f79cdcd0d392b8b8deffa21700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4619ea12d79439feade7811137fbdcefd65aa0f79cdcd0d392b8b8deffa21700->enter($__internal_4619ea12d79439feade7811137fbdcefd65aa0f79cdcd0d392b8b8deffa21700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bf388c6e66aff3366493a4a53fcd489f27b3169f76d08b8a7eb15b2b90d8bda2->leave($__internal_bf388c6e66aff3366493a4a53fcd489f27b3169f76d08b8a7eb15b2b90d8bda2_prof);

        
        $__internal_4619ea12d79439feade7811137fbdcefd65aa0f79cdcd0d392b8b8deffa21700->leave($__internal_4619ea12d79439feade7811137fbdcefd65aa0f79cdcd0d392b8b8deffa21700_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1f3f2fcfce10966edab79ca52a6eb67afe90180748601b11c688c917f95e053 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1f3f2fcfce10966edab79ca52a6eb67afe90180748601b11c688c917f95e053->enter($__internal_a1f3f2fcfce10966edab79ca52a6eb67afe90180748601b11c688c917f95e053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a237869dbbeb49c1c173f897c2c033d45f03e7a5c176a878bb5946194e44db82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a237869dbbeb49c1c173f897c2c033d45f03e7a5c176a878bb5946194e44db82->enter($__internal_a237869dbbeb49c1c173f897c2c033d45f03e7a5c176a878bb5946194e44db82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a237869dbbeb49c1c173f897c2c033d45f03e7a5c176a878bb5946194e44db82->leave($__internal_a237869dbbeb49c1c173f897c2c033d45f03e7a5c176a878bb5946194e44db82_prof);

        
        $__internal_a1f3f2fcfce10966edab79ca52a6eb67afe90180748601b11c688c917f95e053->leave($__internal_a1f3f2fcfce10966edab79ca52a6eb67afe90180748601b11c688c917f95e053_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
