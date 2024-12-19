<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c898050d81720e0b9f3e84c82772314aa8fad55ca50a01f3204e892ca27401ee extends Twig_Template
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
        $__internal_496349fa8931473a5fb208264a07cf64e3ad5e690e5f66219e126100c4a99fdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_496349fa8931473a5fb208264a07cf64e3ad5e690e5f66219e126100c4a99fdb->enter($__internal_496349fa8931473a5fb208264a07cf64e3ad5e690e5f66219e126100c4a99fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_18f3696196f330d252be0c16a883c6b46e3da1187a54a6c0d634105f5a81f28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f3696196f330d252be0c16a883c6b46e3da1187a54a6c0d634105f5a81f28d->enter($__internal_18f3696196f330d252be0c16a883c6b46e3da1187a54a6c0d634105f5a81f28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_496349fa8931473a5fb208264a07cf64e3ad5e690e5f66219e126100c4a99fdb->leave($__internal_496349fa8931473a5fb208264a07cf64e3ad5e690e5f66219e126100c4a99fdb_prof);

        
        $__internal_18f3696196f330d252be0c16a883c6b46e3da1187a54a6c0d634105f5a81f28d->leave($__internal_18f3696196f330d252be0c16a883c6b46e3da1187a54a6c0d634105f5a81f28d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
