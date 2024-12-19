<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_0c72cafc962f5f5cbe98137e64d2c49ea82a652c4ee9cd6f8ea72267f6f6e84e extends Twig_Template
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
        $__internal_15741d50a10b7ac623905623bea0da2c93fd53a48161b3fef765696e4199066e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15741d50a10b7ac623905623bea0da2c93fd53a48161b3fef765696e4199066e->enter($__internal_15741d50a10b7ac623905623bea0da2c93fd53a48161b3fef765696e4199066e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_891c238c7f66ae8ef42b5b624099f2f6d412abebbfb1d842f155104f52650ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_891c238c7f66ae8ef42b5b624099f2f6d412abebbfb1d842f155104f52650ffe->enter($__internal_891c238c7f66ae8ef42b5b624099f2f6d412abebbfb1d842f155104f52650ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_15741d50a10b7ac623905623bea0da2c93fd53a48161b3fef765696e4199066e->leave($__internal_15741d50a10b7ac623905623bea0da2c93fd53a48161b3fef765696e4199066e_prof);

        
        $__internal_891c238c7f66ae8ef42b5b624099f2f6d412abebbfb1d842f155104f52650ffe->leave($__internal_891c238c7f66ae8ef42b5b624099f2f6d412abebbfb1d842f155104f52650ffe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
