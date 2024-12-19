<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_e13ddb6f8ec3915d5d25f1af2655b52a0ea523fc03809b895f866d7bb1504b80 extends Twig_Template
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
        $__internal_2fc8cbdea03cd06d4079d9f9f08762621f10265d81453e5af9d75e7c89a897ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fc8cbdea03cd06d4079d9f9f08762621f10265d81453e5af9d75e7c89a897ed->enter($__internal_2fc8cbdea03cd06d4079d9f9f08762621f10265d81453e5af9d75e7c89a897ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_4d7fd0a89dc2f3744aff481a1974ff85e4de6aca22dfbe78a648179ea5db3266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7fd0a89dc2f3744aff481a1974ff85e4de6aca22dfbe78a648179ea5db3266->enter($__internal_4d7fd0a89dc2f3744aff481a1974ff85e4de6aca22dfbe78a648179ea5db3266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2fc8cbdea03cd06d4079d9f9f08762621f10265d81453e5af9d75e7c89a897ed->leave($__internal_2fc8cbdea03cd06d4079d9f9f08762621f10265d81453e5af9d75e7c89a897ed_prof);

        
        $__internal_4d7fd0a89dc2f3744aff481a1974ff85e4de6aca22dfbe78a648179ea5db3266->leave($__internal_4d7fd0a89dc2f3744aff481a1974ff85e4de6aca22dfbe78a648179ea5db3266_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
