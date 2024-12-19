<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_d54d629e19d9662c459725edd45adad1810bddd0a7a4e21a2e286dd0a5cbfcb9 extends Twig_Template
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
        $__internal_156972469a755d3e1063390dc506e0e91ec73558c87aa07718c9ebfbde375082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_156972469a755d3e1063390dc506e0e91ec73558c87aa07718c9ebfbde375082->enter($__internal_156972469a755d3e1063390dc506e0e91ec73558c87aa07718c9ebfbde375082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9b671f6054fd121fc293870f172f21176cb1c0d35d780b536ed0e30f90c14ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b671f6054fd121fc293870f172f21176cb1c0d35d780b536ed0e30f90c14ce8->enter($__internal_9b671f6054fd121fc293870f172f21176cb1c0d35d780b536ed0e30f90c14ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_156972469a755d3e1063390dc506e0e91ec73558c87aa07718c9ebfbde375082->leave($__internal_156972469a755d3e1063390dc506e0e91ec73558c87aa07718c9ebfbde375082_prof);

        
        $__internal_9b671f6054fd121fc293870f172f21176cb1c0d35d780b536ed0e30f90c14ce8->leave($__internal_9b671f6054fd121fc293870f172f21176cb1c0d35d780b536ed0e30f90c14ce8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
