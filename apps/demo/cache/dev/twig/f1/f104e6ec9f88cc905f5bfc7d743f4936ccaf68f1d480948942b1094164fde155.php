<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4db714bfd64cd2cc289ccae8b5b0827342116c2b9b353a5301d30372b33a202a extends Twig_Template
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
        $__internal_fd9a45f05ed431318b1dae018cd03a8454f6658cda14151d77260c89ca07bacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd9a45f05ed431318b1dae018cd03a8454f6658cda14151d77260c89ca07bacc->enter($__internal_fd9a45f05ed431318b1dae018cd03a8454f6658cda14151d77260c89ca07bacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_f90826e41b2b7e295457c4d81de4be4af3076e0dc5ebd93b0df086e3fac1d200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f90826e41b2b7e295457c4d81de4be4af3076e0dc5ebd93b0df086e3fac1d200->enter($__internal_f90826e41b2b7e295457c4d81de4be4af3076e0dc5ebd93b0df086e3fac1d200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fd9a45f05ed431318b1dae018cd03a8454f6658cda14151d77260c89ca07bacc->leave($__internal_fd9a45f05ed431318b1dae018cd03a8454f6658cda14151d77260c89ca07bacc_prof);

        
        $__internal_f90826e41b2b7e295457c4d81de4be4af3076e0dc5ebd93b0df086e3fac1d200->leave($__internal_f90826e41b2b7e295457c4d81de4be4af3076e0dc5ebd93b0df086e3fac1d200_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
