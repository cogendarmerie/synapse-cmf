<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_7c5adb48c499af69d6724524d5013ed41af63fcf2b4d081f1927d88cd5dc5fae extends Twig_Template
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
        $__internal_9dd744c361040b4ad24c1540a47ddb84c6086ae052e48aa119237e298a7b8211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd744c361040b4ad24c1540a47ddb84c6086ae052e48aa119237e298a7b8211->enter($__internal_9dd744c361040b4ad24c1540a47ddb84c6086ae052e48aa119237e298a7b8211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_bd9da5fa5cc03f93028f058951493528755ab1c99d0332f8668c491a9e3baa32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9da5fa5cc03f93028f058951493528755ab1c99d0332f8668c491a9e3baa32->enter($__internal_bd9da5fa5cc03f93028f058951493528755ab1c99d0332f8668c491a9e3baa32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_9dd744c361040b4ad24c1540a47ddb84c6086ae052e48aa119237e298a7b8211->leave($__internal_9dd744c361040b4ad24c1540a47ddb84c6086ae052e48aa119237e298a7b8211_prof);

        
        $__internal_bd9da5fa5cc03f93028f058951493528755ab1c99d0332f8668c491a9e3baa32->leave($__internal_bd9da5fa5cc03f93028f058951493528755ab1c99d0332f8668c491a9e3baa32_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
