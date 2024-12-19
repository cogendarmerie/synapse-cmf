<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_ee139577770d734086b636a7a36044208342bc79147e8f47ea3249a00045ce1d extends Twig_Template
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
        $__internal_33a976008f0919d13904e210012fc4fae09bb797e5c88b42a89274797629fe7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a976008f0919d13904e210012fc4fae09bb797e5c88b42a89274797629fe7b->enter($__internal_33a976008f0919d13904e210012fc4fae09bb797e5c88b42a89274797629fe7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_0ccd2ba7f1ad85c7443247ddc3e1cff2848597d7f75289db1ece46a9584e0cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ccd2ba7f1ad85c7443247ddc3e1cff2848597d7f75289db1ece46a9584e0cd7->enter($__internal_0ccd2ba7f1ad85c7443247ddc3e1cff2848597d7f75289db1ece46a9584e0cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_33a976008f0919d13904e210012fc4fae09bb797e5c88b42a89274797629fe7b->leave($__internal_33a976008f0919d13904e210012fc4fae09bb797e5c88b42a89274797629fe7b_prof);

        
        $__internal_0ccd2ba7f1ad85c7443247ddc3e1cff2848597d7f75289db1ece46a9584e0cd7->leave($__internal_0ccd2ba7f1ad85c7443247ddc3e1cff2848597d7f75289db1ece46a9584e0cd7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
