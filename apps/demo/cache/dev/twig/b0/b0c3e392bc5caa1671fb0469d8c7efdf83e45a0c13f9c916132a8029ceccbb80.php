<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2154917a4390566057970777e623631ab1e6459e3439cee421e5876547c0aad9 extends Twig_Template
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
        $__internal_2e4ad6167611a4016c136910c1320af9030d9328e8a2f9730b1bea146ddc6728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e4ad6167611a4016c136910c1320af9030d9328e8a2f9730b1bea146ddc6728->enter($__internal_2e4ad6167611a4016c136910c1320af9030d9328e8a2f9730b1bea146ddc6728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a7248ca85a67fa02b71d264f420c5dee1cff82542ca1aece93468b4d852ddc43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7248ca85a67fa02b71d264f420c5dee1cff82542ca1aece93468b4d852ddc43->enter($__internal_a7248ca85a67fa02b71d264f420c5dee1cff82542ca1aece93468b4d852ddc43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_2e4ad6167611a4016c136910c1320af9030d9328e8a2f9730b1bea146ddc6728->leave($__internal_2e4ad6167611a4016c136910c1320af9030d9328e8a2f9730b1bea146ddc6728_prof);

        
        $__internal_a7248ca85a67fa02b71d264f420c5dee1cff82542ca1aece93468b4d852ddc43->leave($__internal_a7248ca85a67fa02b71d264f420c5dee1cff82542ca1aece93468b4d852ddc43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
