<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_3b5de0f126a094f11ec3a51683012fe3f5eb683fe72234915eab87da842ac168 extends Twig_Template
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
        $__internal_9f7be781681f5ade7a21ae6e82f820cf5525e6008cf02ed7f2a4797c9054d8bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f7be781681f5ade7a21ae6e82f820cf5525e6008cf02ed7f2a4797c9054d8bd->enter($__internal_9f7be781681f5ade7a21ae6e82f820cf5525e6008cf02ed7f2a4797c9054d8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_204ef1d02015695da07c307b01078b18fc095cd4f0ef18a9942cec5061868bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204ef1d02015695da07c307b01078b18fc095cd4f0ef18a9942cec5061868bba->enter($__internal_204ef1d02015695da07c307b01078b18fc095cd4f0ef18a9942cec5061868bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9f7be781681f5ade7a21ae6e82f820cf5525e6008cf02ed7f2a4797c9054d8bd->leave($__internal_9f7be781681f5ade7a21ae6e82f820cf5525e6008cf02ed7f2a4797c9054d8bd_prof);

        
        $__internal_204ef1d02015695da07c307b01078b18fc095cd4f0ef18a9942cec5061868bba->leave($__internal_204ef1d02015695da07c307b01078b18fc095cd4f0ef18a9942cec5061868bba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
