<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_86603b46c07ac3385ac6fe564af45165e828c6e146166405404b3051e3e38ca7 extends Twig_Template
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
        $__internal_db2834a9a7939b280537de880e532dad501aefaee9b9af4b269ee859cb1b9708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2834a9a7939b280537de880e532dad501aefaee9b9af4b269ee859cb1b9708->enter($__internal_db2834a9a7939b280537de880e532dad501aefaee9b9af4b269ee859cb1b9708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bae38f06c0194cb901dc68d7ca70e870b18cc2a93f055f14f70dd506151a1226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae38f06c0194cb901dc68d7ca70e870b18cc2a93f055f14f70dd506151a1226->enter($__internal_bae38f06c0194cb901dc68d7ca70e870b18cc2a93f055f14f70dd506151a1226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_db2834a9a7939b280537de880e532dad501aefaee9b9af4b269ee859cb1b9708->leave($__internal_db2834a9a7939b280537de880e532dad501aefaee9b9af4b269ee859cb1b9708_prof);

        
        $__internal_bae38f06c0194cb901dc68d7ca70e870b18cc2a93f055f14f70dd506151a1226->leave($__internal_bae38f06c0194cb901dc68d7ca70e870b18cc2a93f055f14f70dd506151a1226_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
