<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_b25ed1de00615be234de238cb5d7e4ea2ffe68a1a165df223b7df5c1b8f3e3d7 extends Twig_Template
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
        $__internal_4e6f41c46898bf489ba4d4985765193ebaedaa1c46f1a4b88f74dbe9cb01bf99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e6f41c46898bf489ba4d4985765193ebaedaa1c46f1a4b88f74dbe9cb01bf99->enter($__internal_4e6f41c46898bf489ba4d4985765193ebaedaa1c46f1a4b88f74dbe9cb01bf99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_e530439a01f1ddc05de269b05280a15d8532a45f51034dd462c0ba4b742b4f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e530439a01f1ddc05de269b05280a15d8532a45f51034dd462c0ba4b742b4f37->enter($__internal_e530439a01f1ddc05de269b05280a15d8532a45f51034dd462c0ba4b742b4f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4e6f41c46898bf489ba4d4985765193ebaedaa1c46f1a4b88f74dbe9cb01bf99->leave($__internal_4e6f41c46898bf489ba4d4985765193ebaedaa1c46f1a4b88f74dbe9cb01bf99_prof);

        
        $__internal_e530439a01f1ddc05de269b05280a15d8532a45f51034dd462c0ba4b742b4f37->leave($__internal_e530439a01f1ddc05de269b05280a15d8532a45f51034dd462c0ba4b742b4f37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
