<?php

/* SynapseCmfBundle:Template:default.html.twig */
class __TwigTemplate_83b037c273843e615a50cafccdb6d720049db822e77122a801a8cf039363efde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82c7bf74982df382b5220b7124d3670b9f438975eb14aca517bd6fb1b12a6562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82c7bf74982df382b5220b7124d3670b9f438975eb14aca517bd6fb1b12a6562->enter($__internal_82c7bf74982df382b5220b7124d3670b9f438975eb14aca517bd6fb1b12a6562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Template:default.html.twig"));

        $__internal_31f982da25260d1899eed664eecd047aaccd09c795fc8ec220861565e11e4354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31f982da25260d1899eed664eecd047aaccd09c795fc8ec220861565e11e4354->enter($__internal_31f982da25260d1899eed664eecd047aaccd09c795fc8ec220861565e11e4354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseCmfBundle:Template:default.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <h1>Synapse is ready !</h1>
        <h3>This is the default template.</h3>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_82c7bf74982df382b5220b7124d3670b9f438975eb14aca517bd6fb1b12a6562->leave($__internal_82c7bf74982df382b5220b7124d3670b9f438975eb14aca517bd6fb1b12a6562_prof);

        
        $__internal_31f982da25260d1899eed664eecd047aaccd09c795fc8ec220861565e11e4354->leave($__internal_31f982da25260d1899eed664eecd047aaccd09c795fc8ec220861565e11e4354_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f61d91cf44e356035baa5adde3da50c5c87ec036ddde96d1698f16f61451244b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f61d91cf44e356035baa5adde3da50c5c87ec036ddde96d1698f16f61451244b->enter($__internal_f61d91cf44e356035baa5adde3da50c5c87ec036ddde96d1698f16f61451244b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c39399474a520c0e35d6bcab27ca8337e2c9b2c0a37f2c706235ac873c80c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c39399474a520c0e35d6bcab27ca8337e2c9b2c0a37f2c706235ac873c80c76->enter($__internal_1c39399474a520c0e35d6bcab27ca8337e2c9b2c0a37f2c706235ac873c80c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1c39399474a520c0e35d6bcab27ca8337e2c9b2c0a37f2c706235ac873c80c76->leave($__internal_1c39399474a520c0e35d6bcab27ca8337e2c9b2c0a37f2c706235ac873c80c76_prof);

        
        $__internal_f61d91cf44e356035baa5adde3da50c5c87ec036ddde96d1698f16f61451244b->leave($__internal_f61d91cf44e356035baa5adde3da50c5c87ec036ddde96d1698f16f61451244b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3a679a95683bcaaa752d35f886735a277823b4c764b641e7abeaddcaf62b88c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a679a95683bcaaa752d35f886735a277823b4c764b641e7abeaddcaf62b88c6->enter($__internal_3a679a95683bcaaa752d35f886735a277823b4c764b641e7abeaddcaf62b88c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_81387faf3bf6a4624eda7f3753c68ab949575c1d19b20345fc399a7b13eb18a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81387faf3bf6a4624eda7f3753c68ab949575c1d19b20345fc399a7b13eb18a9->enter($__internal_81387faf3bf6a4624eda7f3753c68ab949575c1d19b20345fc399a7b13eb18a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_81387faf3bf6a4624eda7f3753c68ab949575c1d19b20345fc399a7b13eb18a9->leave($__internal_81387faf3bf6a4624eda7f3753c68ab949575c1d19b20345fc399a7b13eb18a9_prof);

        
        $__internal_3a679a95683bcaaa752d35f886735a277823b4c764b641e7abeaddcaf62b88c6->leave($__internal_3a679a95683bcaaa752d35f886735a277823b4c764b641e7abeaddcaf62b88c6_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b43f742abdccdc420b23b006a62c96963a387b13370faff19f15c646f28f59f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b43f742abdccdc420b23b006a62c96963a387b13370faff19f15c646f28f59f4->enter($__internal_b43f742abdccdc420b23b006a62c96963a387b13370faff19f15c646f28f59f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_466fdd9af6bb4ede6f2ec4e067577177048f354ae176a83d8abf6a05a7e32884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466fdd9af6bb4ede6f2ec4e067577177048f354ae176a83d8abf6a05a7e32884->enter($__internal_466fdd9af6bb4ede6f2ec4e067577177048f354ae176a83d8abf6a05a7e32884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_466fdd9af6bb4ede6f2ec4e067577177048f354ae176a83d8abf6a05a7e32884->leave($__internal_466fdd9af6bb4ede6f2ec4e067577177048f354ae176a83d8abf6a05a7e32884_prof);

        
        $__internal_b43f742abdccdc420b23b006a62c96963a387b13370faff19f15c646f28f59f4->leave($__internal_b43f742abdccdc420b23b006a62c96963a387b13370faff19f15c646f28f59f4_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a4f50c26b5d6c7bd74755eec4718adaad1643a5d1b4b9f9f16123cb5c64e6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a4f50c26b5d6c7bd74755eec4718adaad1643a5d1b4b9f9f16123cb5c64e6b5->enter($__internal_1a4f50c26b5d6c7bd74755eec4718adaad1643a5d1b4b9f9f16123cb5c64e6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_790ec880d4073570e622b9ad4339f3d2272e0cf4adf3bdc5b96a80484a0a9325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_790ec880d4073570e622b9ad4339f3d2272e0cf4adf3bdc5b96a80484a0a9325->enter($__internal_790ec880d4073570e622b9ad4339f3d2272e0cf4adf3bdc5b96a80484a0a9325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_790ec880d4073570e622b9ad4339f3d2272e0cf4adf3bdc5b96a80484a0a9325->leave($__internal_790ec880d4073570e622b9ad4339f3d2272e0cf4adf3bdc5b96a80484a0a9325_prof);

        
        $__internal_1a4f50c26b5d6c7bd74755eec4718adaad1643a5d1b4b9f9f16123cb5c64e6b5->leave($__internal_1a4f50c26b5d6c7bd74755eec4718adaad1643a5d1b4b9f9f16123cb5c64e6b5_prof);

    }

    public function getTemplateName()
    {
        return "SynapseCmfBundle:Template:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 13,  102 => 12,  85 => 6,  67 => 5,  55 => 14,  52 => 13,  50 => 12,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <h1>Synapse is ready !</h1>
        <h3>This is the default template.</h3>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "SynapseCmfBundle:Template:default.html.twig", "/var/www/html/src/Synapse/Cmf/Bundle/Resources/views/Template/default.html.twig");
    }
}
