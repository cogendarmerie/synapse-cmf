<?php

/* MajoraFrameworkExtraBundle:Form:widgets.html.twig */
class __TwigTemplate_74b6b20c8620e645299da9b250c477cf9555a833595ed0049b13892e3a266f5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'translatable_text_widget' => array($this, 'block_translatable_text_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c26cf12b17d024a4400b875dc7d89757b57d230cb594bf1b7471dece3e7e5f85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26cf12b17d024a4400b875dc7d89757b57d230cb594bf1b7471dece3e7e5f85->enter($__internal_c26cf12b17d024a4400b875dc7d89757b57d230cb594bf1b7471dece3e7e5f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MajoraFrameworkExtraBundle:Form:widgets.html.twig"));

        $__internal_4bdba15f76390dc48a956025fd415bde018557e535179ee218e27b814624c274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bdba15f76390dc48a956025fd415bde018557e535179ee218e27b814624c274->enter($__internal_4bdba15f76390dc48a956025fd415bde018557e535179ee218e27b814624c274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MajoraFrameworkExtraBundle:Form:widgets.html.twig"));

        // line 1
        $this->displayBlock('translatable_text_widget', $context, $blocks);
        
        $__internal_c26cf12b17d024a4400b875dc7d89757b57d230cb594bf1b7471dece3e7e5f85->leave($__internal_c26cf12b17d024a4400b875dc7d89757b57d230cb594bf1b7471dece3e7e5f85_prof);

        
        $__internal_4bdba15f76390dc48a956025fd415bde018557e535179ee218e27b814624c274->leave($__internal_4bdba15f76390dc48a956025fd415bde018557e535179ee218e27b814624c274_prof);

    }

    public function block_translatable_text_widget($context, array $blocks = array())
    {
        $__internal_3486dc889ce7477a0a9442846992b1fd15872f646023ce4a6707ec12d01f92be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3486dc889ce7477a0a9442846992b1fd15872f646023ce4a6707ec12d01f92be->enter($__internal_3486dc889ce7477a0a9442846992b1fd15872f646023ce4a6707ec12d01f92be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatable_text_widget"));

        $__internal_78d1cb8f562fe5b42413a226b64d171ebc288287c57ceceb8b4d000a70f72224 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d1cb8f562fe5b42413a226b64d171ebc288287c57ceceb8b4d000a70f72224->enter($__internal_78d1cb8f562fe5b42413a226b64d171ebc288287c57ceceb8b4d000a70f72224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatable_text_widget"));

        // line 2
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["locale"] => $context["child"]) {
            // line 3
            echo "        <div class=\"input-group localized\">
          ";
            // line 4
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "
          <div class=\"input-group-addon flag-icon-background flag-icon-";
            // line 5
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_replace_filter($context["locale"], array("en" => "gb"))), "html", null, true);
            echo "\"></div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['locale'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_78d1cb8f562fe5b42413a226b64d171ebc288287c57ceceb8b4d000a70f72224->leave($__internal_78d1cb8f562fe5b42413a226b64d171ebc288287c57ceceb8b4d000a70f72224_prof);

        
        $__internal_3486dc889ce7477a0a9442846992b1fd15872f646023ce4a6707ec12d01f92be->leave($__internal_3486dc889ce7477a0a9442846992b1fd15872f646023ce4a6707ec12d01f92be_prof);

    }

    public function getTemplateName()
    {
        return "MajoraFrameworkExtraBundle:Form:widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 5,  52 => 4,  49 => 3,  44 => 2,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block translatable_text_widget %}
    {% for locale, child in form.children %}
        <div class=\"input-group localized\">
          {{ form_widget(child) }}
          <div class=\"input-group-addon flag-icon-background flag-icon-{{ locale|replace({'en': 'gb'})|lower }}\"></div>
        </div>
    {% endfor %}
{% endblock %}
", "MajoraFrameworkExtraBundle:Form:widgets.html.twig", "/var/www/html/vendor/majora/framework-extra-bundle/src/Majora/Bundle/FrameworkExtraBundle/Resources/views/Form/widgets.html.twig");
    }
}
