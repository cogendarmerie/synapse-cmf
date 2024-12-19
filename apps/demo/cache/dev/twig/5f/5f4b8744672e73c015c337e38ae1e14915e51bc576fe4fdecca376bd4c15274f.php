<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2e00fa835852bfbd76b092fd62f014d81f21cb9f2129a472224490964197e5f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be293e352e8204f2b44b13bad13c10ba5a4a88f63d76f53a95f3206ee81313f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be293e352e8204f2b44b13bad13c10ba5a4a88f63d76f53a95f3206ee81313f8->enter($__internal_be293e352e8204f2b44b13bad13c10ba5a4a88f63d76f53a95f3206ee81313f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_625f10ed16c9bc459c573669c89d8a6cb28c4b1a9ac45e0cf217e323a855e468 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625f10ed16c9bc459c573669c89d8a6cb28c4b1a9ac45e0cf217e323a855e468->enter($__internal_625f10ed16c9bc459c573669c89d8a6cb28c4b1a9ac45e0cf217e323a855e468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be293e352e8204f2b44b13bad13c10ba5a4a88f63d76f53a95f3206ee81313f8->leave($__internal_be293e352e8204f2b44b13bad13c10ba5a4a88f63d76f53a95f3206ee81313f8_prof);

        
        $__internal_625f10ed16c9bc459c573669c89d8a6cb28c4b1a9ac45e0cf217e323a855e468->leave($__internal_625f10ed16c9bc459c573669c89d8a6cb28c4b1a9ac45e0cf217e323a855e468_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_eba6607961778a09c14b1ddab703203ca4ff138b4b6c74a287a2991bf4e2bee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eba6607961778a09c14b1ddab703203ca4ff138b4b6c74a287a2991bf4e2bee9->enter($__internal_eba6607961778a09c14b1ddab703203ca4ff138b4b6c74a287a2991bf4e2bee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0dc0ce113125482ea55cbed22a9e8535e5c007652776644b0da5b4a1656d0816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc0ce113125482ea55cbed22a9e8535e5c007652776644b0da5b4a1656d0816->enter($__internal_0dc0ce113125482ea55cbed22a9e8535e5c007652776644b0da5b4a1656d0816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0dc0ce113125482ea55cbed22a9e8535e5c007652776644b0da5b4a1656d0816->leave($__internal_0dc0ce113125482ea55cbed22a9e8535e5c007652776644b0da5b4a1656d0816_prof);

        
        $__internal_eba6607961778a09c14b1ddab703203ca4ff138b4b6c74a287a2991bf4e2bee9->leave($__internal_eba6607961778a09c14b1ddab703203ca4ff138b4b6c74a287a2991bf4e2bee9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_710684e9b2e062f425a423437e6e8b95c14ad6168938b050d599382e4e173568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710684e9b2e062f425a423437e6e8b95c14ad6168938b050d599382e4e173568->enter($__internal_710684e9b2e062f425a423437e6e8b95c14ad6168938b050d599382e4e173568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f5a183e93d6f87a2189ac19052f1670c5afdbfa159592fe9bd0fec5f5b212061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a183e93d6f87a2189ac19052f1670c5afdbfa159592fe9bd0fec5f5b212061->enter($__internal_f5a183e93d6f87a2189ac19052f1670c5afdbfa159592fe9bd0fec5f5b212061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f5a183e93d6f87a2189ac19052f1670c5afdbfa159592fe9bd0fec5f5b212061->leave($__internal_f5a183e93d6f87a2189ac19052f1670c5afdbfa159592fe9bd0fec5f5b212061_prof);

        
        $__internal_710684e9b2e062f425a423437e6e8b95c14ad6168938b050d599382e4e173568->leave($__internal_710684e9b2e062f425a423437e6e8b95c14ad6168938b050d599382e4e173568_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
