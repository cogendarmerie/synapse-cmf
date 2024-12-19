<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_1b8ff376ddd2d0510b5338c77cc357d4a018aa32ec0f49c96382fb4360c85944 extends Twig_Template
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
        $__internal_9ae72f53f84dba06bc4337c13d9decdecf4ffeceaab34efc51bb66268ea4c821 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae72f53f84dba06bc4337c13d9decdecf4ffeceaab34efc51bb66268ea4c821->enter($__internal_9ae72f53f84dba06bc4337c13d9decdecf4ffeceaab34efc51bb66268ea4c821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_d608f4410c18c7a23a04e2a910ed9d7457339ae4c122f6e66ed759d8aec9d12c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d608f4410c18c7a23a04e2a910ed9d7457339ae4c122f6e66ed759d8aec9d12c->enter($__internal_d608f4410c18c7a23a04e2a910ed9d7457339ae4c122f6e66ed759d8aec9d12c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9ae72f53f84dba06bc4337c13d9decdecf4ffeceaab34efc51bb66268ea4c821->leave($__internal_9ae72f53f84dba06bc4337c13d9decdecf4ffeceaab34efc51bb66268ea4c821_prof);

        
        $__internal_d608f4410c18c7a23a04e2a910ed9d7457339ae4c122f6e66ed759d8aec9d12c->leave($__internal_d608f4410c18c7a23a04e2a910ed9d7457339ae4c122f6e66ed759d8aec9d12c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
