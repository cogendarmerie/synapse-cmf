<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_446357a609bf82ceea1344b67cfab9a416f8ac3f8f1ff0fef8f2f14c0b0201b4 extends Twig_Template
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
        $__internal_3114598b0fdbc02bbe66bb7d7c8f83dfeabfcbafe25698c528f302ae05aba643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3114598b0fdbc02bbe66bb7d7c8f83dfeabfcbafe25698c528f302ae05aba643->enter($__internal_3114598b0fdbc02bbe66bb7d7c8f83dfeabfcbafe25698c528f302ae05aba643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_40be8719f2c396e82b50a2381341f76f8a53d06a2434ce1245037a8d51891987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40be8719f2c396e82b50a2381341f76f8a53d06a2434ce1245037a8d51891987->enter($__internal_40be8719f2c396e82b50a2381341f76f8a53d06a2434ce1245037a8d51891987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_3114598b0fdbc02bbe66bb7d7c8f83dfeabfcbafe25698c528f302ae05aba643->leave($__internal_3114598b0fdbc02bbe66bb7d7c8f83dfeabfcbafe25698c528f302ae05aba643_prof);

        
        $__internal_40be8719f2c396e82b50a2381341f76f8a53d06a2434ce1245037a8d51891987->leave($__internal_40be8719f2c396e82b50a2381341f76f8a53d06a2434ce1245037a8d51891987_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
