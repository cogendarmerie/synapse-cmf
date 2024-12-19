<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_a4f38c58d98254d1984c5bf45f5848b23f5e5d1f29f026a8a85c20b92e037aac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae05356d7ad7221d16f0f7152e7d564dd86c1595df86c8b6485aa8fec656afd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae05356d7ad7221d16f0f7152e7d564dd86c1595df86c8b6485aa8fec656afd0->enter($__internal_ae05356d7ad7221d16f0f7152e7d564dd86c1595df86c8b6485aa8fec656afd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_b976871325bb787c2cb68cedc69b13ff2df1d637151e6a30659b4363e13b7e62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b976871325bb787c2cb68cedc69b13ff2df1d637151e6a30659b4363e13b7e62->enter($__internal_b976871325bb787c2cb68cedc69b13ff2df1d637151e6a30659b4363e13b7e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae05356d7ad7221d16f0f7152e7d564dd86c1595df86c8b6485aa8fec656afd0->leave($__internal_ae05356d7ad7221d16f0f7152e7d564dd86c1595df86c8b6485aa8fec656afd0_prof);

        
        $__internal_b976871325bb787c2cb68cedc69b13ff2df1d637151e6a30659b4363e13b7e62->leave($__internal_b976871325bb787c2cb68cedc69b13ff2df1d637151e6a30659b4363e13b7e62_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_79b59cdd84ff7577980c693597da8c211a55e211729b36549a67d3385f320c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b59cdd84ff7577980c693597da8c211a55e211729b36549a67d3385f320c3d->enter($__internal_79b59cdd84ff7577980c693597da8c211a55e211729b36549a67d3385f320c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_26adf70d4d05990d9ec557a6c63bc14583982cc204f9a44c6b64b839e3eb50db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26adf70d4d05990d9ec557a6c63bc14583982cc204f9a44c6b64b839e3eb50db->enter($__internal_26adf70d4d05990d9ec557a6c63bc14583982cc204f9a44c6b64b839e3eb50db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_26adf70d4d05990d9ec557a6c63bc14583982cc204f9a44c6b64b839e3eb50db->leave($__internal_26adf70d4d05990d9ec557a6c63bc14583982cc204f9a44c6b64b839e3eb50db_prof);

        
        $__internal_79b59cdd84ff7577980c693597da8c211a55e211729b36549a67d3385f320c3d->leave($__internal_79b59cdd84ff7577980c693597da8c211a55e211729b36549a67d3385f320c3d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
