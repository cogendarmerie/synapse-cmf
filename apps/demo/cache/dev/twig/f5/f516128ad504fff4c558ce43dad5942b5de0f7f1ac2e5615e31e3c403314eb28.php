<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9d10ae4d33706eecd87bee33f0750303e7d9f978ad2b42d289907165f1dd6439 extends Twig_Template
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
        $__internal_6b0251277d452fa1f0dd3752d96050842881ca6a72d7314feba66c96522591ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b0251277d452fa1f0dd3752d96050842881ca6a72d7314feba66c96522591ca->enter($__internal_6b0251277d452fa1f0dd3752d96050842881ca6a72d7314feba66c96522591ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c3a33d422a4f1a1e8bdd279aba86370b18c7ff02505fbbc855fef9ea8e4efc64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3a33d422a4f1a1e8bdd279aba86370b18c7ff02505fbbc855fef9ea8e4efc64->enter($__internal_c3a33d422a4f1a1e8bdd279aba86370b18c7ff02505fbbc855fef9ea8e4efc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6b0251277d452fa1f0dd3752d96050842881ca6a72d7314feba66c96522591ca->leave($__internal_6b0251277d452fa1f0dd3752d96050842881ca6a72d7314feba66c96522591ca_prof);

        
        $__internal_c3a33d422a4f1a1e8bdd279aba86370b18c7ff02505fbbc855fef9ea8e4efc64->leave($__internal_c3a33d422a4f1a1e8bdd279aba86370b18c7ff02505fbbc855fef9ea8e4efc64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
