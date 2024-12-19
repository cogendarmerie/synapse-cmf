<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_150bc42142b568eaf58efc03713af2924f8c5f4d9ba33aabdfb5fb950d522f56 extends Twig_Template
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
        $__internal_ac5c52734a157cf55d577842cb34cc4aebb8634b19790382f079888857fc38ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5c52734a157cf55d577842cb34cc4aebb8634b19790382f079888857fc38ca->enter($__internal_ac5c52734a157cf55d577842cb34cc4aebb8634b19790382f079888857fc38ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_17b172fbfc4885e006d8d71c2d4298b9f49363ef157b4a9efa28bcae0ecb6e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b172fbfc4885e006d8d71c2d4298b9f49363ef157b4a9efa28bcae0ecb6e78->enter($__internal_17b172fbfc4885e006d8d71c2d4298b9f49363ef157b4a9efa28bcae0ecb6e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_ac5c52734a157cf55d577842cb34cc4aebb8634b19790382f079888857fc38ca->leave($__internal_ac5c52734a157cf55d577842cb34cc4aebb8634b19790382f079888857fc38ca_prof);

        
        $__internal_17b172fbfc4885e006d8d71c2d4298b9f49363ef157b4a9efa28bcae0ecb6e78->leave($__internal_17b172fbfc4885e006d8d71c2d4298b9f49363ef157b4a9efa28bcae0ecb6e78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
