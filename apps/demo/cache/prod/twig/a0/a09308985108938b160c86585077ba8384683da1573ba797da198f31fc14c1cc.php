<?php

/* SynapsePageBundle::base.html.twig */
class __TwigTemplate_a5cf823c3102539137816da7e49b5f2b0c1291c2d89ad9092c72782ba996d24a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapseAdminBundle::base.html.twig", "SynapsePageBundle::base.html.twig", 1);
        $this->blocks = array(
            'menu_elements' => array($this, 'block_menu_elements'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynapseAdminBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu_elements($context, array $blocks = array())
    {
        // line 4
        echo "  <li class=\"menu-item\">
    <a class=\"menu-link\" href=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_list");
        echo "\">
      <i class=\"icon fa fa-files-o\"></i>
      <span class=\"menu-label\">Pages</span>
    </a>
  </li>
  ";
        // line 10
        $this->displayParentBlock("menu_elements", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "SynapsePageBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SynapsePageBundle::base.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/base.html.twig");
    }
}
