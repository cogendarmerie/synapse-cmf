<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_5a864a5388bd4cb769a88cb482e01f4322b3a2c0c580cec85eb6821ba8dcc2fa extends Twig_Template
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
        $__internal_63e01d309cb9434b900e3b8481f9f91d860bfeddc0d83e5e818b15bfa8b6f818 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e01d309cb9434b900e3b8481f9f91d860bfeddc0d83e5e818b15bfa8b6f818->enter($__internal_63e01d309cb9434b900e3b8481f9f91d860bfeddc0d83e5e818b15bfa8b6f818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b8b10ad45ad915ca289b95b4fd02d616f45def67c1b1b3919fe57782d19a51cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8b10ad45ad915ca289b95b4fd02d616f45def67c1b1b3919fe57782d19a51cc->enter($__internal_b8b10ad45ad915ca289b95b4fd02d616f45def67c1b1b3919fe57782d19a51cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_63e01d309cb9434b900e3b8481f9f91d860bfeddc0d83e5e818b15bfa8b6f818->leave($__internal_63e01d309cb9434b900e3b8481f9f91d860bfeddc0d83e5e818b15bfa8b6f818_prof);

        
        $__internal_b8b10ad45ad915ca289b95b4fd02d616f45def67c1b1b3919fe57782d19a51cc->leave($__internal_b8b10ad45ad915ca289b95b4fd02d616f45def67c1b1b3919fe57782d19a51cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
