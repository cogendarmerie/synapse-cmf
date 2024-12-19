<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_e050075e283a58c35cc3de3c0e465be92647a161b27b9e554028cc7d6f86dbfc extends Twig_Template
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
        $__internal_2c9dc716b3d814ee56d3d5365ed90cdd67a1f84929782b830daeb03673c669e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c9dc716b3d814ee56d3d5365ed90cdd67a1f84929782b830daeb03673c669e4->enter($__internal_2c9dc716b3d814ee56d3d5365ed90cdd67a1f84929782b830daeb03673c669e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9ef7c83c9caa617f9a9ffa3cc6e37769dfd85a80c0d2ce74089f0622289c08b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef7c83c9caa617f9a9ffa3cc6e37769dfd85a80c0d2ce74089f0622289c08b4->enter($__internal_9ef7c83c9caa617f9a9ffa3cc6e37769dfd85a80c0d2ce74089f0622289c08b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2c9dc716b3d814ee56d3d5365ed90cdd67a1f84929782b830daeb03673c669e4->leave($__internal_2c9dc716b3d814ee56d3d5365ed90cdd67a1f84929782b830daeb03673c669e4_prof);

        
        $__internal_9ef7c83c9caa617f9a9ffa3cc6e37769dfd85a80c0d2ce74089f0622289c08b4->leave($__internal_9ef7c83c9caa617f9a9ffa3cc6e37769dfd85a80c0d2ce74089f0622289c08b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
