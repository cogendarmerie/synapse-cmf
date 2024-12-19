<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_25c6ef0de5729e3f43cbaf266461b23dde37f323877a27ae28931f3c505a05fc extends Twig_Template
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
        $__internal_dbcbd441e8e693ac6c321014ff7063c5448212f1212f7bdcfd1b21f41ad91cc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbcbd441e8e693ac6c321014ff7063c5448212f1212f7bdcfd1b21f41ad91cc8->enter($__internal_dbcbd441e8e693ac6c321014ff7063c5448212f1212f7bdcfd1b21f41ad91cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d6e6c257a5c179201e602011da4d5aeb0c8cea633c635339ed1396687bc7726b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e6c257a5c179201e602011da4d5aeb0c8cea633c635339ed1396687bc7726b->enter($__internal_d6e6c257a5c179201e602011da4d5aeb0c8cea633c635339ed1396687bc7726b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_dbcbd441e8e693ac6c321014ff7063c5448212f1212f7bdcfd1b21f41ad91cc8->leave($__internal_dbcbd441e8e693ac6c321014ff7063c5448212f1212f7bdcfd1b21f41ad91cc8_prof);

        
        $__internal_d6e6c257a5c179201e602011da4d5aeb0c8cea633c635339ed1396687bc7726b->leave($__internal_d6e6c257a5c179201e602011da4d5aeb0c8cea633c635339ed1396687bc7726b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
