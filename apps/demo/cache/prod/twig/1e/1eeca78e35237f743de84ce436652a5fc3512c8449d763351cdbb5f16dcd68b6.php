<?php

/* SynapsePageBundle:Form:synapse_admin_form_layout.html.twig */
class __TwigTemplate_4c4bd146c6e84c1437d97975f8c9b37ec9adb0258139c7782c0566f95e999484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig", "SynapsePageBundle:Form:synapse_admin_form_layout.html.twig", 1);
        $this->blocks = array(
            'page_menu_row' => array($this, 'block_page_menu_row'),
            'page_menu_item_row' => array($this, 'block_page_menu_item_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_menu_row($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"synapse-page-menu\">
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "data", array()), 'row');
        echo "
    <a href=\"\" class=\"btn btn-default add-page-menu\"><i class=\"fa fa-plus\"></i></a>
  </div>
";
    }

    // line 10
    public function block_page_menu_item_row($context, array $blocks = array())
    {
        // line 11
        echo "  <div class=\"row page-menu-item\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array()), "id", array()), "html", null, true);
        echo "\">
    <div class=\"col-md-3\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "label", array()), 'widget');
        echo "</div>
    <div class=\"col-md-8\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "page", array()), 'widget');
        echo "</div>
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "position", array()), 'widget');
        echo "
    <div class=\"col-md-1\">
      <a href=\"\" role=\"delete\" class=\"btn btn-default\">
        <i class=\"fa fa-times\"></i>
      </a>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "SynapsePageBundle:Form:synapse_admin_form_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  55 => 13,  51 => 12,  46 => 11,  43 => 10,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SynapsePageBundle:Form:synapse_admin_form_layout.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/Form/synapse_admin_form_layout.html.twig");
    }
}
