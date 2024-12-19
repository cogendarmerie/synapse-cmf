<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2d5d7e2dfd4ebffab10a2254bbacb1285aa0a2d55b0eef4b42791534ae71dd01 extends Twig_Template
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
        $__internal_382e1d020814594f5af5c378acdfa28de2562e1e8ba10afd1fa98709a78f97ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382e1d020814594f5af5c378acdfa28de2562e1e8ba10afd1fa98709a78f97ae->enter($__internal_382e1d020814594f5af5c378acdfa28de2562e1e8ba10afd1fa98709a78f97ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_c58eef6980bc3ba21afc9e4442e90442e889ac9db434ed140acd5f67d80f8fca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58eef6980bc3ba21afc9e4442e90442e889ac9db434ed140acd5f67d80f8fca->enter($__internal_c58eef6980bc3ba21afc9e4442e90442e889ac9db434ed140acd5f67d80f8fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_382e1d020814594f5af5c378acdfa28de2562e1e8ba10afd1fa98709a78f97ae->leave($__internal_382e1d020814594f5af5c378acdfa28de2562e1e8ba10afd1fa98709a78f97ae_prof);

        
        $__internal_c58eef6980bc3ba21afc9e4442e90442e889ac9db434ed140acd5f67d80f8fca->leave($__internal_c58eef6980bc3ba21afc9e4442e90442e889ac9db434ed140acd5f67d80f8fca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
