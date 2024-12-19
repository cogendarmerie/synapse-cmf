<?php

/* SynapseAdminBundle::layout.html.twig */
class __TwigTemplate_458f76bebbec710806f228c6cc53ab40d468fff86f0118daefddedd3dbbcdce8 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["synapse"] ?? $this->getContext($context, "synapse")), "admin", array()), "base_layout", array()), "SynapseAdminBundle::layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b34abfaa9d4f2cbdb442dfdc8d628f8e7e7658f311fd7a00759073b2f5bbb47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b34abfaa9d4f2cbdb442dfdc8d628f8e7e7658f311fd7a00759073b2f5bbb47->enter($__internal_0b34abfaa9d4f2cbdb442dfdc8d628f8e7e7658f311fd7a00759073b2f5bbb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle::layout.html.twig"));

        $__internal_be4fd467f9b9f26de81df5a72fea803b57d1487aba41054eb6be726c049e63e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4fd467f9b9f26de81df5a72fea803b57d1487aba41054eb6be726c049e63e3->enter($__internal_be4fd467f9b9f26de81df5a72fea803b57d1487aba41054eb6be726c049e63e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle::layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b34abfaa9d4f2cbdb442dfdc8d628f8e7e7658f311fd7a00759073b2f5bbb47->leave($__internal_0b34abfaa9d4f2cbdb442dfdc8d628f8e7e7658f311fd7a00759073b2f5bbb47_prof);

        
        $__internal_be4fd467f9b9f26de81df5a72fea803b57d1487aba41054eb6be726c049e63e3->leave($__internal_be4fd467f9b9f26de81df5a72fea803b57d1487aba41054eb6be726c049e63e3_prof);

    }

    // line 3
    public function block_menu_elements($context, array $blocks = array())
    {
        $__internal_19679558358164f9e0465e513cf1d4acc18b7403f4fb8d24cf9da27f1baa5074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19679558358164f9e0465e513cf1d4acc18b7403f4fb8d24cf9da27f1baa5074->enter($__internal_19679558358164f9e0465e513cf1d4acc18b7403f4fb8d24cf9da27f1baa5074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_elements"));

        $__internal_5ab73b05ad0472ddc0340f7100427fd8447abab3b71fe931ac27a703f2860f27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab73b05ad0472ddc0340f7100427fd8447abab3b71fe931ac27a703f2860f27->enter($__internal_5ab73b05ad0472ddc0340f7100427fd8447abab3b71fe931ac27a703f2860f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_elements"));

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
        
        $__internal_5ab73b05ad0472ddc0340f7100427fd8447abab3b71fe931ac27a703f2860f27->leave($__internal_5ab73b05ad0472ddc0340f7100427fd8447abab3b71fe931ac27a703f2860f27_prof);

        
        $__internal_19679558358164f9e0465e513cf1d4acc18b7403f4fb8d24cf9da27f1baa5074->leave($__internal_19679558358164f9e0465e513cf1d4acc18b7403f4fb8d24cf9da27f1baa5074_prof);

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
        return array (  63 => 12,  54 => 6,  48 => 4,  39 => 3,  18 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends synapse.admin.base_layout %}

{% block menu_elements %}
  {{ parent() }}
  <li class=\"menu-item\">
    <a class=\"menu-link\" href=\"{{ path('synapse_admin_template_list') }}\">
      <i class=\"icon fa fa-object-group\"></i>
      <span class=\"menu-label\">Templates</span>
    </a>
  </li>
  <li class=\"menu-item\">
    <a class=\"menu-link\" href=\"{{ path('synapse_admin_media_list') }}\">
      <i class=\"icon fa fa-picture-o\"></i>
      <span class=\"menu-label\">Medias</span>
    </a>
  </li>
{% endblock %}
", "SynapseAdminBundle::layout.html.twig", "/var/www/html/src/Synapse/Admin/Bundle/Resources/views/layout.html.twig");
    }
}
