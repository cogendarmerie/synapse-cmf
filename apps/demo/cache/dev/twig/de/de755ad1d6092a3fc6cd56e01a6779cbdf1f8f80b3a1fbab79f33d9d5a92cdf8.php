<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_4ee529df2d4c623ffb32c27fbda6a5af0138b9baa02753f32202cffbabcf7b3c extends Twig_Template
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
        $__internal_201d4b6215084bfde8e2ba9987118bbe34709e4d61bd5f3e52c016cda9f600a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201d4b6215084bfde8e2ba9987118bbe34709e4d61bd5f3e52c016cda9f600a6->enter($__internal_201d4b6215084bfde8e2ba9987118bbe34709e4d61bd5f3e52c016cda9f600a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_177bf7859beeb661860b08c71dfc928283c884bd584b910c00cb77919727617c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_177bf7859beeb661860b08c71dfc928283c884bd584b910c00cb77919727617c->enter($__internal_177bf7859beeb661860b08c71dfc928283c884bd584b910c00cb77919727617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_201d4b6215084bfde8e2ba9987118bbe34709e4d61bd5f3e52c016cda9f600a6->leave($__internal_201d4b6215084bfde8e2ba9987118bbe34709e4d61bd5f3e52c016cda9f600a6_prof);

        
        $__internal_177bf7859beeb661860b08c71dfc928283c884bd584b910c00cb77919727617c->leave($__internal_177bf7859beeb661860b08c71dfc928283c884bd584b910c00cb77919727617c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
