<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f5acb045ea1787042bf1f53e2df763a8cc7bdf4eb5de6a4a894db547c3e73004 extends Twig_Template
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
        $__internal_864013b8f4c07b8d1db6b155e8d0ea2783242e5db711f94c7f3e9acf76c868fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864013b8f4c07b8d1db6b155e8d0ea2783242e5db711f94c7f3e9acf76c868fd->enter($__internal_864013b8f4c07b8d1db6b155e8d0ea2783242e5db711f94c7f3e9acf76c868fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_525405966f405b1efbe84fc557708f667ff67c67835c58c5cb9ac7d8e0f6de51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525405966f405b1efbe84fc557708f667ff67c67835c58c5cb9ac7d8e0f6de51->enter($__internal_525405966f405b1efbe84fc557708f667ff67c67835c58c5cb9ac7d8e0f6de51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_864013b8f4c07b8d1db6b155e8d0ea2783242e5db711f94c7f3e9acf76c868fd->leave($__internal_864013b8f4c07b8d1db6b155e8d0ea2783242e5db711f94c7f3e9acf76c868fd_prof);

        
        $__internal_525405966f405b1efbe84fc557708f667ff67c67835c58c5cb9ac7d8e0f6de51->leave($__internal_525405966f405b1efbe84fc557708f667ff67c67835c58c5cb9ac7d8e0f6de51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
