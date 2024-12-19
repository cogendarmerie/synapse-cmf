<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_93ab246c54ba3e5ab8aa018e97c2910facc4f4534c6634e8e4da747b2e0194e7 extends Twig_Template
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
        $__internal_1e6b87ece5cf6c334f82494288e2ca14b087838d80ee95499817c65563be472b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6b87ece5cf6c334f82494288e2ca14b087838d80ee95499817c65563be472b->enter($__internal_1e6b87ece5cf6c334f82494288e2ca14b087838d80ee95499817c65563be472b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_b59cfbf7da18ab33b697aae182f98f2ef6dad574be764bdd88738ccf94aed0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59cfbf7da18ab33b697aae182f98f2ef6dad574be764bdd88738ccf94aed0ea->enter($__internal_b59cfbf7da18ab33b697aae182f98f2ef6dad574be764bdd88738ccf94aed0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_1e6b87ece5cf6c334f82494288e2ca14b087838d80ee95499817c65563be472b->leave($__internal_1e6b87ece5cf6c334f82494288e2ca14b087838d80ee95499817c65563be472b_prof);

        
        $__internal_b59cfbf7da18ab33b697aae182f98f2ef6dad574be764bdd88738ccf94aed0ea->leave($__internal_b59cfbf7da18ab33b697aae182f98f2ef6dad574be764bdd88738ccf94aed0ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
