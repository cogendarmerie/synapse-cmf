<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1b4da4d7b547745a2659efff2a074b8f86290054a946ddae55b76f87774a0d85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c37989cedcc6a4d8b7bfddccde66b357bf6d54e5baa4866abf2cc147b988241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c37989cedcc6a4d8b7bfddccde66b357bf6d54e5baa4866abf2cc147b988241->enter($__internal_9c37989cedcc6a4d8b7bfddccde66b357bf6d54e5baa4866abf2cc147b988241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c5177e6e1ac293e0329ed773c51234c8af7376bd9f735db66f108892bd6987d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5177e6e1ac293e0329ed773c51234c8af7376bd9f735db66f108892bd6987d8->enter($__internal_c5177e6e1ac293e0329ed773c51234c8af7376bd9f735db66f108892bd6987d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c37989cedcc6a4d8b7bfddccde66b357bf6d54e5baa4866abf2cc147b988241->leave($__internal_9c37989cedcc6a4d8b7bfddccde66b357bf6d54e5baa4866abf2cc147b988241_prof);

        
        $__internal_c5177e6e1ac293e0329ed773c51234c8af7376bd9f735db66f108892bd6987d8->leave($__internal_c5177e6e1ac293e0329ed773c51234c8af7376bd9f735db66f108892bd6987d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aca991309858c05a4946d8882d6e8b7b2292da17eb5860429003a3f15c623e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aca991309858c05a4946d8882d6e8b7b2292da17eb5860429003a3f15c623e99->enter($__internal_aca991309858c05a4946d8882d6e8b7b2292da17eb5860429003a3f15c623e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dc5d55c31580fa5205b519e8938cb640f03ff0a69c2873e19888b4f6055f5475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc5d55c31580fa5205b519e8938cb640f03ff0a69c2873e19888b4f6055f5475->enter($__internal_dc5d55c31580fa5205b519e8938cb640f03ff0a69c2873e19888b4f6055f5475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_dc5d55c31580fa5205b519e8938cb640f03ff0a69c2873e19888b4f6055f5475->leave($__internal_dc5d55c31580fa5205b519e8938cb640f03ff0a69c2873e19888b4f6055f5475_prof);

        
        $__internal_aca991309858c05a4946d8882d6e8b7b2292da17eb5860429003a3f15c623e99->leave($__internal_aca991309858c05a4946d8882d6e8b7b2292da17eb5860429003a3f15c623e99_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fdb2fa02452fdeb37a609dc8543c43c37ccd981fd3a8a8f8f9f31ccf43c4d89a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdb2fa02452fdeb37a609dc8543c43c37ccd981fd3a8a8f8f9f31ccf43c4d89a->enter($__internal_fdb2fa02452fdeb37a609dc8543c43c37ccd981fd3a8a8f8f9f31ccf43c4d89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c64872f0b4b20ed7ad826c495b2b4f0aace6f55c16eb457ab8fae81b14ef62e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64872f0b4b20ed7ad826c495b2b4f0aace6f55c16eb457ab8fae81b14ef62e8->enter($__internal_c64872f0b4b20ed7ad826c495b2b4f0aace6f55c16eb457ab8fae81b14ef62e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c64872f0b4b20ed7ad826c495b2b4f0aace6f55c16eb457ab8fae81b14ef62e8->leave($__internal_c64872f0b4b20ed7ad826c495b2b4f0aace6f55c16eb457ab8fae81b14ef62e8_prof);

        
        $__internal_fdb2fa02452fdeb37a609dc8543c43c37ccd981fd3a8a8f8f9f31ccf43c4d89a->leave($__internal_fdb2fa02452fdeb37a609dc8543c43c37ccd981fd3a8a8f8f9f31ccf43c4d89a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60a38eac255bb01fd5a91d10feabb7cbbf298fda04422b08a285f18bbc673afb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a38eac255bb01fd5a91d10feabb7cbbf298fda04422b08a285f18bbc673afb->enter($__internal_60a38eac255bb01fd5a91d10feabb7cbbf298fda04422b08a285f18bbc673afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72fbd86f20bba8e478f9747082879d82f890b653a3cf85ad2ce707618938942a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fbd86f20bba8e478f9747082879d82f890b653a3cf85ad2ce707618938942a->enter($__internal_72fbd86f20bba8e478f9747082879d82f890b653a3cf85ad2ce707618938942a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_72fbd86f20bba8e478f9747082879d82f890b653a3cf85ad2ce707618938942a->leave($__internal_72fbd86f20bba8e478f9747082879d82f890b653a3cf85ad2ce707618938942a_prof);

        
        $__internal_60a38eac255bb01fd5a91d10feabb7cbbf298fda04422b08a285f18bbc673afb->leave($__internal_60a38eac255bb01fd5a91d10feabb7cbbf298fda04422b08a285f18bbc673afb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
