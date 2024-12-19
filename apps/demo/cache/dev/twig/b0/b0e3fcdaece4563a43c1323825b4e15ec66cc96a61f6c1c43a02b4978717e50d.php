<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_6e374204b21ee5edf874b0f2965bb56fda507ae38cf5e37f7cd0a42c41aa6852 extends Twig_Template
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
        $__internal_8d8878155b1c43ca793b8131e300e02c7c5f6e40262170d10b5454f5d2f1e634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d8878155b1c43ca793b8131e300e02c7c5f6e40262170d10b5454f5d2f1e634->enter($__internal_8d8878155b1c43ca793b8131e300e02c7c5f6e40262170d10b5454f5d2f1e634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_c1d713c6be8e1255d5572f95a9db56789f2d298e43755bd919a3bfe855f92519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d713c6be8e1255d5572f95a9db56789f2d298e43755bd919a3bfe855f92519->enter($__internal_c1d713c6be8e1255d5572f95a9db56789f2d298e43755bd919a3bfe855f92519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_8d8878155b1c43ca793b8131e300e02c7c5f6e40262170d10b5454f5d2f1e634->leave($__internal_8d8878155b1c43ca793b8131e300e02c7c5f6e40262170d10b5454f5d2f1e634_prof);

        
        $__internal_c1d713c6be8e1255d5572f95a9db56789f2d298e43755bd919a3bfe855f92519->leave($__internal_c1d713c6be8e1255d5572f95a9db56789f2d298e43755bd919a3bfe855f92519_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
