<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_bcb2e9808cea4aad69911ff3b90173e2301ccb4020d23205b7070009e354794e extends Twig_Template
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
        $__internal_6a4d64703b82bfc81cafb994e854396222df9b874f7ee9726d6548ccad4b99c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4d64703b82bfc81cafb994e854396222df9b874f7ee9726d6548ccad4b99c6->enter($__internal_6a4d64703b82bfc81cafb994e854396222df9b874f7ee9726d6548ccad4b99c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_4ef76a0798ba7adbf3d796d256becfd6b523f287c3ca504114f874065a11f121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef76a0798ba7adbf3d796d256becfd6b523f287c3ca504114f874065a11f121->enter($__internal_4ef76a0798ba7adbf3d796d256becfd6b523f287c3ca504114f874065a11f121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6a4d64703b82bfc81cafb994e854396222df9b874f7ee9726d6548ccad4b99c6->leave($__internal_6a4d64703b82bfc81cafb994e854396222df9b874f7ee9726d6548ccad4b99c6_prof);

        
        $__internal_4ef76a0798ba7adbf3d796d256becfd6b523f287c3ca504114f874065a11f121->leave($__internal_4ef76a0798ba7adbf3d796d256becfd6b523f287c3ca504114f874065a11f121_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
