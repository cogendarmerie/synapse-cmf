<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_a2af9bef7e591a7a063f8d0895626363ddc1e671b772be262e83d60a6a14d882 extends Twig_Template
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
        $__internal_6eb489b03a65ae837f3b3a2364a28cfa6408338b367ff551b5085f4d190ce353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb489b03a65ae837f3b3a2364a28cfa6408338b367ff551b5085f4d190ce353->enter($__internal_6eb489b03a65ae837f3b3a2364a28cfa6408338b367ff551b5085f4d190ce353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_95015c95828d80a1321acbdf5f9a09487cc9af146a77cd2881e81162494ce3ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95015c95828d80a1321acbdf5f9a09487cc9af146a77cd2881e81162494ce3ba->enter($__internal_95015c95828d80a1321acbdf5f9a09487cc9af146a77cd2881e81162494ce3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_6eb489b03a65ae837f3b3a2364a28cfa6408338b367ff551b5085f4d190ce353->leave($__internal_6eb489b03a65ae837f3b3a2364a28cfa6408338b367ff551b5085f4d190ce353_prof);

        
        $__internal_95015c95828d80a1321acbdf5f9a09487cc9af146a77cd2881e81162494ce3ba->leave($__internal_95015c95828d80a1321acbdf5f9a09487cc9af146a77cd2881e81162494ce3ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
