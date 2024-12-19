<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3b931ae9ff8673e1c1b46507217e17e3bf0d9748e8b0ff3881c4c1045d9d29f5 extends Twig_Template
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
        $__internal_7c1735938d9179cc8b6a75c613866d5bea1417194ab42a1e168f7a5218aa9624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c1735938d9179cc8b6a75c613866d5bea1417194ab42a1e168f7a5218aa9624->enter($__internal_7c1735938d9179cc8b6a75c613866d5bea1417194ab42a1e168f7a5218aa9624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_60c0158bc07a879ec5525492701234ad8606b3946f2736954eb7e4c00ba550f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c0158bc07a879ec5525492701234ad8606b3946f2736954eb7e4c00ba550f8->enter($__internal_60c0158bc07a879ec5525492701234ad8606b3946f2736954eb7e4c00ba550f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7c1735938d9179cc8b6a75c613866d5bea1417194ab42a1e168f7a5218aa9624->leave($__internal_7c1735938d9179cc8b6a75c613866d5bea1417194ab42a1e168f7a5218aa9624_prof);

        
        $__internal_60c0158bc07a879ec5525492701234ad8606b3946f2736954eb7e4c00ba550f8->leave($__internal_60c0158bc07a879ec5525492701234ad8606b3946f2736954eb7e4c00ba550f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
