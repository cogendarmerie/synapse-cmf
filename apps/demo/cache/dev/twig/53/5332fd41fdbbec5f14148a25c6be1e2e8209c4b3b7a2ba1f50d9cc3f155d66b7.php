<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_00f41ccfdec9314ba6da07c02ae1d8b53f90e10ac819937c231ea8b6dbbcfaac extends Twig_Template
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
        $__internal_a2b65d1de461e3206c6f19f6481a29bb582f44b8bd03536c17547ede77917112 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2b65d1de461e3206c6f19f6481a29bb582f44b8bd03536c17547ede77917112->enter($__internal_a2b65d1de461e3206c6f19f6481a29bb582f44b8bd03536c17547ede77917112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_7a748288d655453cc5262a6dc8519382cb285bb16f3c1059a0be3f569a7d6172 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a748288d655453cc5262a6dc8519382cb285bb16f3c1059a0be3f569a7d6172->enter($__internal_7a748288d655453cc5262a6dc8519382cb285bb16f3c1059a0be3f569a7d6172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_a2b65d1de461e3206c6f19f6481a29bb582f44b8bd03536c17547ede77917112->leave($__internal_a2b65d1de461e3206c6f19f6481a29bb582f44b8bd03536c17547ede77917112_prof);

        
        $__internal_7a748288d655453cc5262a6dc8519382cb285bb16f3c1059a0be3f569a7d6172->leave($__internal_7a748288d655453cc5262a6dc8519382cb285bb16f3c1059a0be3f569a7d6172_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
