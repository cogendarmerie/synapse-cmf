<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_be39266d3459dbe98c6f50b9bee0fd7939514b2ca22c5ebee7e1f48fbdd886c1 extends Twig_Template
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
        $__internal_0c256148b28ab7ed6b0e9338c824e9bfadf3aeb524abbe32ded5b704c7677fd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c256148b28ab7ed6b0e9338c824e9bfadf3aeb524abbe32ded5b704c7677fd6->enter($__internal_0c256148b28ab7ed6b0e9338c824e9bfadf3aeb524abbe32ded5b704c7677fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_ddd528f74f89f82aef2d0b47e1047fa2e7ac8852418926630a2c701ef4e987c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddd528f74f89f82aef2d0b47e1047fa2e7ac8852418926630a2c701ef4e987c0->enter($__internal_ddd528f74f89f82aef2d0b47e1047fa2e7ac8852418926630a2c701ef4e987c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0c256148b28ab7ed6b0e9338c824e9bfadf3aeb524abbe32ded5b704c7677fd6->leave($__internal_0c256148b28ab7ed6b0e9338c824e9bfadf3aeb524abbe32ded5b704c7677fd6_prof);

        
        $__internal_ddd528f74f89f82aef2d0b47e1047fa2e7ac8852418926630a2c701ef4e987c0->leave($__internal_ddd528f74f89f82aef2d0b47e1047fa2e7ac8852418926630a2c701ef4e987c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
