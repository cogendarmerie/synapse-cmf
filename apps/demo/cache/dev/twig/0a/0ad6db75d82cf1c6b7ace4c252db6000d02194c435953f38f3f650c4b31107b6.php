<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_bfdd106a94a85120ef20166a96191f2f4af26384d4ff0057e0a4c3cbb37ac44a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e747f67077437de7b1a30b35616777c5a7cdab43b637ea8a8d87c3f984e75a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e747f67077437de7b1a30b35616777c5a7cdab43b637ea8a8d87c3f984e75a1->enter($__internal_8e747f67077437de7b1a30b35616777c5a7cdab43b637ea8a8d87c3f984e75a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_8990f7c5d6264b2eef769a4a44551ad7cc8c3d12b3f960ce6802edde1f1814f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8990f7c5d6264b2eef769a4a44551ad7cc8c3d12b3f960ce6802edde1f1814f5->enter($__internal_8990f7c5d6264b2eef769a4a44551ad7cc8c3d12b3f960ce6802edde1f1814f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e747f67077437de7b1a30b35616777c5a7cdab43b637ea8a8d87c3f984e75a1->leave($__internal_8e747f67077437de7b1a30b35616777c5a7cdab43b637ea8a8d87c3f984e75a1_prof);

        
        $__internal_8990f7c5d6264b2eef769a4a44551ad7cc8c3d12b3f960ce6802edde1f1814f5->leave($__internal_8990f7c5d6264b2eef769a4a44551ad7cc8c3d12b3f960ce6802edde1f1814f5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c41911589639f70897263b083b36a6821ca0bcf8bbeae2267e5b3f8c0a185951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c41911589639f70897263b083b36a6821ca0bcf8bbeae2267e5b3f8c0a185951->enter($__internal_c41911589639f70897263b083b36a6821ca0bcf8bbeae2267e5b3f8c0a185951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e19a5012cb1db0ecdec36c18064b79caa2c9d1873037d7827304010f6fdc8015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e19a5012cb1db0ecdec36c18064b79caa2c9d1873037d7827304010f6fdc8015->enter($__internal_e19a5012cb1db0ecdec36c18064b79caa2c9d1873037d7827304010f6fdc8015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_e19a5012cb1db0ecdec36c18064b79caa2c9d1873037d7827304010f6fdc8015->leave($__internal_e19a5012cb1db0ecdec36c18064b79caa2c9d1873037d7827304010f6fdc8015_prof);

        
        $__internal_c41911589639f70897263b083b36a6821ca0bcf8bbeae2267e5b3f8c0a185951->leave($__internal_c41911589639f70897263b083b36a6821ca0bcf8bbeae2267e5b3f8c0a185951_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac283dfe787db827bcfc1a0fd28d1a825ffb0e225dd6236dab0d0caa3c33acf9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac283dfe787db827bcfc1a0fd28d1a825ffb0e225dd6236dab0d0caa3c33acf9->enter($__internal_ac283dfe787db827bcfc1a0fd28d1a825ffb0e225dd6236dab0d0caa3c33acf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_06ec1d23fb247230517ada24cdc0cfed94bfeb1ede3d4f83cfce472aa2a2f74b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06ec1d23fb247230517ada24cdc0cfed94bfeb1ede3d4f83cfce472aa2a2f74b->enter($__internal_06ec1d23fb247230517ada24cdc0cfed94bfeb1ede3d4f83cfce472aa2a2f74b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_06ec1d23fb247230517ada24cdc0cfed94bfeb1ede3d4f83cfce472aa2a2f74b->leave($__internal_06ec1d23fb247230517ada24cdc0cfed94bfeb1ede3d4f83cfce472aa2a2f74b_prof);

        
        $__internal_ac283dfe787db827bcfc1a0fd28d1a825ffb0e225dd6236dab0d0caa3c33acf9->leave($__internal_ac283dfe787db827bcfc1a0fd28d1a825ffb0e225dd6236dab0d0caa3c33acf9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
