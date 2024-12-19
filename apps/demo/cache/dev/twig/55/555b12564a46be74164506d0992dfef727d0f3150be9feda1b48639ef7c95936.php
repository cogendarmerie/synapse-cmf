<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_1d1a3602c347dd8b6423754b2f03338aff894336773a85dc50b73ff602f92b23 extends Twig_Template
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
        $__internal_510fa1deae955db37d97a7acf1a81b9d5c507d9207a8242cf0f08cd937262349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510fa1deae955db37d97a7acf1a81b9d5c507d9207a8242cf0f08cd937262349->enter($__internal_510fa1deae955db37d97a7acf1a81b9d5c507d9207a8242cf0f08cd937262349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a826fd6aa93b29fbd96e61392be3ed8f575e7941c932cee1714487d416ef4a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a826fd6aa93b29fbd96e61392be3ed8f575e7941c932cee1714487d416ef4a3b->enter($__internal_a826fd6aa93b29fbd96e61392be3ed8f575e7941c932cee1714487d416ef4a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_510fa1deae955db37d97a7acf1a81b9d5c507d9207a8242cf0f08cd937262349->leave($__internal_510fa1deae955db37d97a7acf1a81b9d5c507d9207a8242cf0f08cd937262349_prof);

        
        $__internal_a826fd6aa93b29fbd96e61392be3ed8f575e7941c932cee1714487d416ef4a3b->leave($__internal_a826fd6aa93b29fbd96e61392be3ed8f575e7941c932cee1714487d416ef4a3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
