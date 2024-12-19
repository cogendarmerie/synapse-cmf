<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f90d0ecd38b50ec10c68561791b044fe64ea10d75df9d23b392b3283a0856820 extends Twig_Template
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
        $__internal_a1af3207f2a5033df7bb74b7ef4f4f795c170f0855b379a9f3b4076a56dc7649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1af3207f2a5033df7bb74b7ef4f4f795c170f0855b379a9f3b4076a56dc7649->enter($__internal_a1af3207f2a5033df7bb74b7ef4f4f795c170f0855b379a9f3b4076a56dc7649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_279acb4c1719ee450375e7c797d95d15fde645e335135fa0d1c78b23071627c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279acb4c1719ee450375e7c797d95d15fde645e335135fa0d1c78b23071627c8->enter($__internal_279acb4c1719ee450375e7c797d95d15fde645e335135fa0d1c78b23071627c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a1af3207f2a5033df7bb74b7ef4f4f795c170f0855b379a9f3b4076a56dc7649->leave($__internal_a1af3207f2a5033df7bb74b7ef4f4f795c170f0855b379a9f3b4076a56dc7649_prof);

        
        $__internal_279acb4c1719ee450375e7c797d95d15fde645e335135fa0d1c78b23071627c8->leave($__internal_279acb4c1719ee450375e7c797d95d15fde645e335135fa0d1c78b23071627c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
