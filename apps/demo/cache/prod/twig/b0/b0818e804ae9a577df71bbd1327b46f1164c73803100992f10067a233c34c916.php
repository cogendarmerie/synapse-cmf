<?php

/* SynapsePageBundle:Admin/Page:list.html.twig */
class __TwigTemplate_be93758f15ef4ad4cdbf7492c3053e35f026546c2b0e3b077a2ec57d1caede1b extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl(($context["page_rendering_route"] ?? null), array("path" => $this->getAttribute($context["page"], "path", array())), 0), "html", null, true);
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
        return array (  145 => 65,  137 => 59,  125 => 53,  119 => 50,  115 => 48,  109 => 44,  103 => 40,  101 => 39,  97 => 37,  91 => 35,  85 => 32,  80 => 31,  78 => 30,  71 => 27,  60 => 26,  56 => 24,  52 => 23,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SynapsePageBundle:Admin/Page:list.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/Admin/Page/list.html.twig");
    }
}
