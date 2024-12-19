<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_75c4c647537324d3c6e1ab1bc1ff3f1eb63a1c319636d01e18dfa75d1b9834ad extends Twig_Template
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
        $__internal_a3b38fa0195c07dfef522e49591116de9a2059e6ba82f2c1675429fc94cc89a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b38fa0195c07dfef522e49591116de9a2059e6ba82f2c1675429fc94cc89a6->enter($__internal_a3b38fa0195c07dfef522e49591116de9a2059e6ba82f2c1675429fc94cc89a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_42c04155c89f8419aec6b478a2ba69ec427f810b6c9418b3a40f1f2d4c25cf3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42c04155c89f8419aec6b478a2ba69ec427f810b6c9418b3a40f1f2d4c25cf3b->enter($__internal_42c04155c89f8419aec6b478a2ba69ec427f810b6c9418b3a40f1f2d4c25cf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a3b38fa0195c07dfef522e49591116de9a2059e6ba82f2c1675429fc94cc89a6->leave($__internal_a3b38fa0195c07dfef522e49591116de9a2059e6ba82f2c1675429fc94cc89a6_prof);

        
        $__internal_42c04155c89f8419aec6b478a2ba69ec427f810b6c9418b3a40f1f2d4c25cf3b->leave($__internal_42c04155c89f8419aec6b478a2ba69ec427f810b6c9418b3a40f1f2d4c25cf3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
