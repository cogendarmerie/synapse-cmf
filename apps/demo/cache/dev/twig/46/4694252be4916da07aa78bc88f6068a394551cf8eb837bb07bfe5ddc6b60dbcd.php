<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7b0f7511e72755b22c5eb168289dd81897e99995eb51090253568bf3778b61a2 extends Twig_Template
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
        $__internal_9f61b1044e53f41af24d4b81abbe75051c8e5e6c14d55058adfade7f0a1333c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f61b1044e53f41af24d4b81abbe75051c8e5e6c14d55058adfade7f0a1333c2->enter($__internal_9f61b1044e53f41af24d4b81abbe75051c8e5e6c14d55058adfade7f0a1333c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7aaadf07301f3a7cf5979749c375e1cec70dea3c08a39f82f6c199896d5992e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aaadf07301f3a7cf5979749c375e1cec70dea3c08a39f82f6c199896d5992e2->enter($__internal_7aaadf07301f3a7cf5979749c375e1cec70dea3c08a39f82f6c199896d5992e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_9f61b1044e53f41af24d4b81abbe75051c8e5e6c14d55058adfade7f0a1333c2->leave($__internal_9f61b1044e53f41af24d4b81abbe75051c8e5e6c14d55058adfade7f0a1333c2_prof);

        
        $__internal_7aaadf07301f3a7cf5979749c375e1cec70dea3c08a39f82f6c199896d5992e2->leave($__internal_7aaadf07301f3a7cf5979749c375e1cec70dea3c08a39f82f6c199896d5992e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
