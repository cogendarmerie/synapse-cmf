<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a3184170657f41b2136d709013a77a2d75e0d218d455ce22e0e275bb5f5d0a98 extends Twig_Template
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
        $__internal_459d319b1a058fe0d552069bcfa24ea71cb8ab1b653e4988cb651293b2df2213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459d319b1a058fe0d552069bcfa24ea71cb8ab1b653e4988cb651293b2df2213->enter($__internal_459d319b1a058fe0d552069bcfa24ea71cb8ab1b653e4988cb651293b2df2213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_e38ca101b0f69570f0b5eeefa39bb04e48cb686b5d509d34a9de86ff1393da19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38ca101b0f69570f0b5eeefa39bb04e48cb686b5d509d34a9de86ff1393da19->enter($__internal_e38ca101b0f69570f0b5eeefa39bb04e48cb686b5d509d34a9de86ff1393da19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_459d319b1a058fe0d552069bcfa24ea71cb8ab1b653e4988cb651293b2df2213->leave($__internal_459d319b1a058fe0d552069bcfa24ea71cb8ab1b653e4988cb651293b2df2213_prof);

        
        $__internal_e38ca101b0f69570f0b5eeefa39bb04e48cb686b5d509d34a9de86ff1393da19->leave($__internal_e38ca101b0f69570f0b5eeefa39bb04e48cb686b5d509d34a9de86ff1393da19_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
