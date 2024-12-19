<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_371631dfad1429657f4aaf11a4942d812189cfa27fdba39a3e8dc8631070e94e extends Twig_Template
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
        $__internal_4e306d58fc04e87b2ad32f7ba8a29c4a84c43dc2e3d57c2f693069d55133a911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e306d58fc04e87b2ad32f7ba8a29c4a84c43dc2e3d57c2f693069d55133a911->enter($__internal_4e306d58fc04e87b2ad32f7ba8a29c4a84c43dc2e3d57c2f693069d55133a911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_5536e19a3dc1f7012fbe4ba66b442dc095bbbbaf0ce9261256d85f3570984b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5536e19a3dc1f7012fbe4ba66b442dc095bbbbaf0ce9261256d85f3570984b17->enter($__internal_5536e19a3dc1f7012fbe4ba66b442dc095bbbbaf0ce9261256d85f3570984b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_4e306d58fc04e87b2ad32f7ba8a29c4a84c43dc2e3d57c2f693069d55133a911->leave($__internal_4e306d58fc04e87b2ad32f7ba8a29c4a84c43dc2e3d57c2f693069d55133a911_prof);

        
        $__internal_5536e19a3dc1f7012fbe4ba66b442dc095bbbbaf0ce9261256d85f3570984b17->leave($__internal_5536e19a3dc1f7012fbe4ba66b442dc095bbbbaf0ce9261256d85f3570984b17_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
