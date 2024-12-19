<?php

/* SynapsePageBundle:Admin/Page:list.html.twig */
class __TwigTemplate_d312406604021d9816a6d767af73a1b06c830dd4a75834c0a81a4f4025ddd952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapsePageBundle::layout.html.twig", "SynapsePageBundle:Admin/Page:list.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SynapsePageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e35904b8d34133c8f7d9fe5b7285a7e404e104fa5b06b4f443f708484cad01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e35904b8d34133c8f7d9fe5b7285a7e404e104fa5b06b4f443f708484cad01e->enter($__internal_6e35904b8d34133c8f7d9fe5b7285a7e404e104fa5b06b4f443f708484cad01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle:Admin/Page:list.html.twig"));

        $__internal_257042dd267dfd0c60bfb2ed22b552040f72b2af6657d38c951f2a1a87eb46db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257042dd267dfd0c60bfb2ed22b552040f72b2af6657d38c951f2a1a87eb46db->enter($__internal_257042dd267dfd0c60bfb2ed22b552040f72b2af6657d38c951f2a1a87eb46db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapsePageBundle:Admin/Page:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e35904b8d34133c8f7d9fe5b7285a7e404e104fa5b06b4f443f708484cad01e->leave($__internal_6e35904b8d34133c8f7d9fe5b7285a7e404e104fa5b06b4f443f708484cad01e_prof);

        
        $__internal_257042dd267dfd0c60bfb2ed22b552040f72b2af6657d38c951f2a1a87eb46db->leave($__internal_257042dd267dfd0c60bfb2ed22b552040f72b2af6657d38c951f2a1a87eb46db_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a750d0dfe5840441f1d40a2b00d12a9b6746cb73d05413e841a8a3aceb06aa7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a750d0dfe5840441f1d40a2b00d12a9b6746cb73d05413e841a8a3aceb06aa7b->enter($__internal_a750d0dfe5840441f1d40a2b00d12a9b6746cb73d05413e841a8a3aceb06aa7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a6b54858f56f8c63552c8e52731a4e3818db2f4676d8cb04d17f0001ced60be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6b54858f56f8c63552c8e52731a4e3818db2f4676d8cb04d17f0001ced60be3->enter($__internal_a6b54858f56f8c63552c8e52731a4e3818db2f4676d8cb04d17f0001ced60be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"row-fluid\">
  <div class=\"col-fill\">
    <div class=\"panel\">
      <header class=\"panel-heading composed bg-main\">
        <a href class=\"combo\">
          <i class=\"fa fa-files-o\"></i>
        </a>
        <h3>Pages</h3>
      </header>
      <table class=\"table table-striped table-advance table-hover\">
        <thead>
          <tr>
            <th>Name</th>
            <th>Url</th>
            <th>Online</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? $this->getContext($context, "pages")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 24
            echo "          <tr>
            <td>
              ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, $this->getAttribute($context["page"], "lvl", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($context["i"] > 0)) {
                    echo "&nbsp;|---";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "name", array()), "html", null, true);
            echo "
            </td>
            <td>
            ";
            // line 30
            if ($this->getAttribute($context["page"], "online", array())) {
                // line 31
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl(($context["page_rendering_route"] ?? $this->getContext($context, "page_rendering_route")), array("path" => $this->getAttribute($context["page"], "path", array())), 0), "html", null, true);
                echo "\" target=\"__blank\">
                /";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "path", array()), "html", null, true);
                echo "
              </a>
            ";
            } else {
                // line 35
                echo "              /";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "path", array()), "html", null, true);
                echo "
            ";
            }
            // line 37
            echo "            </td>
            <td>
            ";
            // line 39
            if ($this->getAttribute($context["page"], "online", array())) {
                // line 40
                echo "              <span class=\"badge label-success\">
                <i class=\"fa fa-check\"></i>
              </span>
            ";
            } else {
                // line 44
                echo "              <span class=\"badge label-danger\">
                <i class=\"fa fa-times\"></i>
              </span>
            ";
            }
            // line 48
            echo "            </td>
            <td class=\"text-right\">
              <a class=\"btn btn-success btn-sm\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_edition", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-edit\"></i>
              </a>
              <a class=\"btn btn-info btn-sm\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_preview", array("id" => $this->getAttribute($context["page"], "id", array()))), "html", null, true);
            echo "\" target=\"__preview\">
                <i class=\"fa fa-search\"></i>
              </a>
            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "        </tbody>
      </table>
    </div>
  </div>
  <div class=\"col-fix\">
    <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
      <a class=\"btn btn-big btn-primary\" href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_creation");
        echo "\">
        <i class=\"fa fa-plus\"></i>
        <span>Create</span>
      </a>
    </div>
  </div>
</div>
";
        
        $__internal_a6b54858f56f8c63552c8e52731a4e3818db2f4676d8cb04d17f0001ced60be3->leave($__internal_a6b54858f56f8c63552c8e52731a4e3818db2f4676d8cb04d17f0001ced60be3_prof);

        
        $__internal_a750d0dfe5840441f1d40a2b00d12a9b6746cb73d05413e841a8a3aceb06aa7b->leave($__internal_a750d0dfe5840441f1d40a2b00d12a9b6746cb73d05413e841a8a3aceb06aa7b_prof);

    }

    public function getTemplateName()
    {
        return "SynapsePageBundle:Admin/Page:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 65,  155 => 59,  143 => 53,  137 => 50,  133 => 48,  127 => 44,  121 => 40,  119 => 39,  115 => 37,  109 => 35,  103 => 32,  98 => 31,  96 => 30,  89 => 27,  78 => 26,  74 => 24,  70 => 23,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'SynapsePageBundle::layout.html.twig' %}

{% block content %}
<div class=\"row-fluid\">
  <div class=\"col-fill\">
    <div class=\"panel\">
      <header class=\"panel-heading composed bg-main\">
        <a href class=\"combo\">
          <i class=\"fa fa-files-o\"></i>
        </a>
        <h3>Pages</h3>
      </header>
      <table class=\"table table-striped table-advance table-hover\">
        <thead>
          <tr>
            <th>Name</th>
            <th>Url</th>
            <th>Online</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        {% for page in pages %}
          <tr>
            <td>
              {% for i in range(0, page.lvl) if i > 0 %}&nbsp;|---{% endfor %}
              {{ page.name }}
            </td>
            <td>
            {% if page.online %}
              <a href=\"{{ url(page_rendering_route, { path: page.path }, 0) }}\" target=\"__blank\">
                /{{ page.path }}
              </a>
            {% else %}
              /{{ page.path }}
            {% endif %}
            </td>
            <td>
            {% if page.online %}
              <span class=\"badge label-success\">
                <i class=\"fa fa-check\"></i>
              </span>
            {% else %}
              <span class=\"badge label-danger\">
                <i class=\"fa fa-times\"></i>
              </span>
            {% endif %}
            </td>
            <td class=\"text-right\">
              <a class=\"btn btn-success btn-sm\" href=\"{{ path('synapse_admin_page_edition', { id: page.id }) }}\">
                <i class=\"fa fa-edit\"></i>
              </a>
              <a class=\"btn btn-info btn-sm\" href=\"{{ path('synapse_admin_page_preview', { id: page.id }) }}\" target=\"__preview\">
                <i class=\"fa fa-search\"></i>
              </a>
            </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  </div>
  <div class=\"col-fix\">
    <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
      <a class=\"btn btn-big btn-primary\" href=\"{{ path('synapse_admin_page_creation') }}\">
        <i class=\"fa fa-plus\"></i>
        <span>Create</span>
      </a>
    </div>
  </div>
</div>
{% endblock %}
", "SynapsePageBundle:Admin/Page:list.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/Admin/Page/list.html.twig");
    }
}
