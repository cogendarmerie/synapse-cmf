<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_ca9fb4183ae2354ccca32ee562880366f60be7f5ec3139c8c6fa0e5d45ccc7a5 extends Twig_Template
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
        $__internal_7ef157086e00b4c748ee39198b4e0dea889f6594db4affdd1de36003372ff358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ef157086e00b4c748ee39198b4e0dea889f6594db4affdd1de36003372ff358->enter($__internal_7ef157086e00b4c748ee39198b4e0dea889f6594db4affdd1de36003372ff358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_262883dfff7bf3a47b89d333fb34b9053192529f0e097db85931e1fdd2fc911c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_262883dfff7bf3a47b89d333fb34b9053192529f0e097db85931e1fdd2fc911c->enter($__internal_262883dfff7bf3a47b89d333fb34b9053192529f0e097db85931e1fdd2fc911c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7ef157086e00b4c748ee39198b4e0dea889f6594db4affdd1de36003372ff358->leave($__internal_7ef157086e00b4c748ee39198b4e0dea889f6594db4affdd1de36003372ff358_prof);

        
        $__internal_262883dfff7bf3a47b89d333fb34b9053192529f0e097db85931e1fdd2fc911c->leave($__internal_262883dfff7bf3a47b89d333fb34b9053192529f0e097db85931e1fdd2fc911c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
