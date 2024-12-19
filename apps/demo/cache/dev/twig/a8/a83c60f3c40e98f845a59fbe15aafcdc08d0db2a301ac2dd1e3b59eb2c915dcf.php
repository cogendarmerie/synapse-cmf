<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_32441d72922ffad8d28ae6ec18ad176b486e99ad2067d730627faadf8fed1d6e extends Twig_Template
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
        $__internal_fe651ae838953678e40a6499e3ab8f4567c7853957256292f495cc72b89e5199 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe651ae838953678e40a6499e3ab8f4567c7853957256292f495cc72b89e5199->enter($__internal_fe651ae838953678e40a6499e3ab8f4567c7853957256292f495cc72b89e5199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_885a81be75b3a637dbb66d483b809f4fa881f0cecb00eb933ba0e01400a7d565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885a81be75b3a637dbb66d483b809f4fa881f0cecb00eb933ba0e01400a7d565->enter($__internal_885a81be75b3a637dbb66d483b809f4fa881f0cecb00eb933ba0e01400a7d565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_fe651ae838953678e40a6499e3ab8f4567c7853957256292f495cc72b89e5199->leave($__internal_fe651ae838953678e40a6499e3ab8f4567c7853957256292f495cc72b89e5199_prof);

        
        $__internal_885a81be75b3a637dbb66d483b809f4fa881f0cecb00eb933ba0e01400a7d565->leave($__internal_885a81be75b3a637dbb66d483b809f4fa881f0cecb00eb933ba0e01400a7d565_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
