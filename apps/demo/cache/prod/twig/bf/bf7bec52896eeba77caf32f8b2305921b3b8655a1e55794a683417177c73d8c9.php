<?php

/* SynapseAdminBundle::layout.html.twig */
class __TwigTemplate_6d723e6ec6bf6d77e21904731a4d86c1aafda25b6e62cb9e7d2c20931bd75ca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'menu_elements' => array($this, 'block_menu_elements'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["synapse"] ?? null), "admin", array()), "base_layout", array()), "SynapseAdminBundle::layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu_elements($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("menu_elements", $context, $blocks);
        echo "
  <li class=\"menu-item\">
    <a class=\"menu-link\" href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_template_list");
        echo "\">
      <i class=\"icon fa fa-object-group\"></i>
      <span class=\"menu-label\">Templates</span>
    </a>
  </li>
  <li class=\"menu-item\">
    <a class=\"menu-link\" href=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_media_list");
        echo "\">
      <i class=\"icon fa fa-picture-o\"></i>
      <span class=\"menu-label\">Medias</span>
    </a>
  </li>
";
    }

    public function getTemplateName()
    {
        return "SynapseAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  36 => 6,  30 => 4,  27 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SynapseAdminBundle::layout.html.twig", "/var/www/html/src/Synapse/Admin/Bundle/Resources/views/layout.html.twig");
    }
}
