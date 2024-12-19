<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_280bd2ea11ef9e0fae160e529d36f1a80301a7f22ce719786c1e33c4bee7a8ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_c838080420d1a887ca2d9522ff08e9decbcaf202f59532d3c0ef205ed7b2e773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c838080420d1a887ca2d9522ff08e9decbcaf202f59532d3c0ef205ed7b2e773->enter($__internal_c838080420d1a887ca2d9522ff08e9decbcaf202f59532d3c0ef205ed7b2e773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_1fa7b45dc0739f07b22e897c02d0d3b6c17eeaaaadc39746f4d991923dbb935e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fa7b45dc0739f07b22e897c02d0d3b6c17eeaaaadc39746f4d991923dbb935e->enter($__internal_1fa7b45dc0739f07b22e897c02d0d3b6c17eeaaaadc39746f4d991923dbb935e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c838080420d1a887ca2d9522ff08e9decbcaf202f59532d3c0ef205ed7b2e773->leave($__internal_c838080420d1a887ca2d9522ff08e9decbcaf202f59532d3c0ef205ed7b2e773_prof);

        
        $__internal_1fa7b45dc0739f07b22e897c02d0d3b6c17eeaaaadc39746f4d991923dbb935e->leave($__internal_1fa7b45dc0739f07b22e897c02d0d3b6c17eeaaaadc39746f4d991923dbb935e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c6f01ef05e67912b108eec7597f49ab7f3213bf5a02cdb667ee76d7a0651bf7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6f01ef05e67912b108eec7597f49ab7f3213bf5a02cdb667ee76d7a0651bf7e->enter($__internal_c6f01ef05e67912b108eec7597f49ab7f3213bf5a02cdb667ee76d7a0651bf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d83009fa895b107a183124e1936b3e548c4854bd42ffca90617594fe0c8e969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d83009fa895b107a183124e1936b3e548c4854bd42ffca90617594fe0c8e969->enter($__internal_7d83009fa895b107a183124e1936b3e548c4854bd42ffca90617594fe0c8e969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d83009fa895b107a183124e1936b3e548c4854bd42ffca90617594fe0c8e969->leave($__internal_7d83009fa895b107a183124e1936b3e548c4854bd42ffca90617594fe0c8e969_prof);

        
        $__internal_c6f01ef05e67912b108eec7597f49ab7f3213bf5a02cdb667ee76d7a0651bf7e->leave($__internal_c6f01ef05e67912b108eec7597f49ab7f3213bf5a02cdb667ee76d7a0651bf7e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_440aa15c6de7c167be27ab03810fb4ebbd8829bb548754314e01ec6920a7ae9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_440aa15c6de7c167be27ab03810fb4ebbd8829bb548754314e01ec6920a7ae9c->enter($__internal_440aa15c6de7c167be27ab03810fb4ebbd8829bb548754314e01ec6920a7ae9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_1d545356ea5e48660d881b0993e3930ae376e7269881e0fe383575cd991c28a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d545356ea5e48660d881b0993e3930ae376e7269881e0fe383575cd991c28a5->enter($__internal_1d545356ea5e48660d881b0993e3930ae376e7269881e0fe383575cd991c28a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d545356ea5e48660d881b0993e3930ae376e7269881e0fe383575cd991c28a5->leave($__internal_1d545356ea5e48660d881b0993e3930ae376e7269881e0fe383575cd991c28a5_prof);

        
        $__internal_440aa15c6de7c167be27ab03810fb4ebbd8829bb548754314e01ec6920a7ae9c->leave($__internal_440aa15c6de7c167be27ab03810fb4ebbd8829bb548754314e01ec6920a7ae9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3ca206ecc681ef61dbc7c0c1cff82b45ec75667060ac529cddb9ffe39722d09c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ca206ecc681ef61dbc7c0c1cff82b45ec75667060ac529cddb9ffe39722d09c->enter($__internal_3ca206ecc681ef61dbc7c0c1cff82b45ec75667060ac529cddb9ffe39722d09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ff50358745e79258e2f556336800346650b72dc309b7e97216ed123d51be639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff50358745e79258e2f556336800346650b72dc309b7e97216ed123d51be639->enter($__internal_1ff50358745e79258e2f556336800346650b72dc309b7e97216ed123d51be639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1ff50358745e79258e2f556336800346650b72dc309b7e97216ed123d51be639->leave($__internal_1ff50358745e79258e2f556336800346650b72dc309b7e97216ed123d51be639_prof);

        
        $__internal_3ca206ecc681ef61dbc7c0c1cff82b45ec75667060ac529cddb9ffe39722d09c->leave($__internal_3ca206ecc681ef61dbc7c0c1cff82b45ec75667060ac529cddb9ffe39722d09c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
