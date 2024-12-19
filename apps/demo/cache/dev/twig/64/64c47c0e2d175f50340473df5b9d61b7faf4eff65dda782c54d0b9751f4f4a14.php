<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8559a17e58b059b11cb15c1cd2c56e8d4095854c2693c0c62496f5cc72a7b054 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fa08d7a1401066b052c205773bfc3a22d117fc5a3212e0dbc3ea73d297fff97d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa08d7a1401066b052c205773bfc3a22d117fc5a3212e0dbc3ea73d297fff97d->enter($__internal_fa08d7a1401066b052c205773bfc3a22d117fc5a3212e0dbc3ea73d297fff97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e1557504e341c0e27a1f52dde269605c498757b45cba6caae432c7f03e30fe8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1557504e341c0e27a1f52dde269605c498757b45cba6caae432c7f03e30fe8f->enter($__internal_e1557504e341c0e27a1f52dde269605c498757b45cba6caae432c7f03e30fe8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa08d7a1401066b052c205773bfc3a22d117fc5a3212e0dbc3ea73d297fff97d->leave($__internal_fa08d7a1401066b052c205773bfc3a22d117fc5a3212e0dbc3ea73d297fff97d_prof);

        
        $__internal_e1557504e341c0e27a1f52dde269605c498757b45cba6caae432c7f03e30fe8f->leave($__internal_e1557504e341c0e27a1f52dde269605c498757b45cba6caae432c7f03e30fe8f_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0f2c4dd022af0911dc375e5ca2cf64aafdeec5f09f896e57155c8ed5ffe2c54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2c4dd022af0911dc375e5ca2cf64aafdeec5f09f896e57155c8ed5ffe2c54a->enter($__internal_0f2c4dd022af0911dc375e5ca2cf64aafdeec5f09f896e57155c8ed5ffe2c54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_216998d19bb1c7ba4be9dace3bc0577ab8cae04328018e991709167bd197585e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_216998d19bb1c7ba4be9dace3bc0577ab8cae04328018e991709167bd197585e->enter($__internal_216998d19bb1c7ba4be9dace3bc0577ab8cae04328018e991709167bd197585e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_216998d19bb1c7ba4be9dace3bc0577ab8cae04328018e991709167bd197585e->leave($__internal_216998d19bb1c7ba4be9dace3bc0577ab8cae04328018e991709167bd197585e_prof);

        
        $__internal_0f2c4dd022af0911dc375e5ca2cf64aafdeec5f09f896e57155c8ed5ffe2c54a->leave($__internal_0f2c4dd022af0911dc375e5ca2cf64aafdeec5f09f896e57155c8ed5ffe2c54a_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a104dad25a527d2f655b3db7c18693de49adb2887e198330a5054334095d240a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a104dad25a527d2f655b3db7c18693de49adb2887e198330a5054334095d240a->enter($__internal_a104dad25a527d2f655b3db7c18693de49adb2887e198330a5054334095d240a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_aacb98f6e16b6ff6e5d96c00d10d2ff7b1f113ab6d9587fe2cd208e69566cf1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aacb98f6e16b6ff6e5d96c00d10d2ff7b1f113ab6d9587fe2cd208e69566cf1b->enter($__internal_aacb98f6e16b6ff6e5d96c00d10d2ff7b1f113ab6d9587fe2cd208e69566cf1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_aacb98f6e16b6ff6e5d96c00d10d2ff7b1f113ab6d9587fe2cd208e69566cf1b->leave($__internal_aacb98f6e16b6ff6e5d96c00d10d2ff7b1f113ab6d9587fe2cd208e69566cf1b_prof);

        
        $__internal_a104dad25a527d2f655b3db7c18693de49adb2887e198330a5054334095d240a->leave($__internal_a104dad25a527d2f655b3db7c18693de49adb2887e198330a5054334095d240a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
