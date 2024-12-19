<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_88a696132cf8c0d7e77e817e98dc2074e34ca3464341106f80f4f0c8681e766b extends Twig_Template
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
        $__internal_fe93b07e04a3e907cd949f06a7bb4019b0401179295eebb43b34b0381a45c8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe93b07e04a3e907cd949f06a7bb4019b0401179295eebb43b34b0381a45c8cb->enter($__internal_fe93b07e04a3e907cd949f06a7bb4019b0401179295eebb43b34b0381a45c8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_e607987609f2f9519d748ad702ad583fcfb9195c02af611b25f55297b713d35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e607987609f2f9519d748ad702ad583fcfb9195c02af611b25f55297b713d35e->enter($__internal_e607987609f2f9519d748ad702ad583fcfb9195c02af611b25f55297b713d35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_fe93b07e04a3e907cd949f06a7bb4019b0401179295eebb43b34b0381a45c8cb->leave($__internal_fe93b07e04a3e907cd949f06a7bb4019b0401179295eebb43b34b0381a45c8cb_prof);

        
        $__internal_e607987609f2f9519d748ad702ad583fcfb9195c02af611b25f55297b713d35e->leave($__internal_e607987609f2f9519d748ad702ad583fcfb9195c02af611b25f55297b713d35e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
