<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b686344f4111b06ec44388a1b38b83fc2817aad20229ab0b379f0bf769d0de45 extends Twig_Template
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
        $__internal_f66a4f805eca80bbaeaca2f66758eaf3c4967b9850687f3eff95c78f27314d43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66a4f805eca80bbaeaca2f66758eaf3c4967b9850687f3eff95c78f27314d43->enter($__internal_f66a4f805eca80bbaeaca2f66758eaf3c4967b9850687f3eff95c78f27314d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_595e928657dab5400890d9a40cb6d14495c585e3285c7a3267c95deede78a1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595e928657dab5400890d9a40cb6d14495c585e3285c7a3267c95deede78a1f0->enter($__internal_595e928657dab5400890d9a40cb6d14495c585e3285c7a3267c95deede78a1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f66a4f805eca80bbaeaca2f66758eaf3c4967b9850687f3eff95c78f27314d43->leave($__internal_f66a4f805eca80bbaeaca2f66758eaf3c4967b9850687f3eff95c78f27314d43_prof);

        
        $__internal_595e928657dab5400890d9a40cb6d14495c585e3285c7a3267c95deede78a1f0->leave($__internal_595e928657dab5400890d9a40cb6d14495c585e3285c7a3267c95deede78a1f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
