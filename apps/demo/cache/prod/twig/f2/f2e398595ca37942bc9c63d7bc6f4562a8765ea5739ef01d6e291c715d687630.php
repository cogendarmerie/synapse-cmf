<?php

/* SynapsePageBundle:Admin/Page:edit.html.twig */
class __TwigTemplate_b09eac79b303861d5018cbe1a8b79b280e89e53ad5ceea3dc538819cdd75a144 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapsePageBundle::layout.html.twig", "SynapsePageBundle:Admin/Page:edit.html.twig", 1);
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
        // line 3
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? null), array(0 => "SynapseAdminBundle:Form:synapse_admin_form_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"row\">
    <div class=\"col-md-12\">
      <ul class=\"breadcrumb\">
        <li>
          <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_list");
        echo "\">
            <i class=\"fa fa-files-o\"></i>
            Pages
          </a>
        </li>
        <li class=\"active\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "name", array()), "html", null, true);
        echo "</li>
        <li class=\"active\">edit</li>
      </ul>
    </div>
  </div>

  ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

  <div class=\"row-fluid\">
    <div class=\"col-fill row\">

      ";
        // line 27
        echo "      <div id=\"form-general\" class=\"panel col-md-6\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-file-text-o\"></i>
          </a>
          <h3>General</h3>
        </header>
        <div class=\"panel-body\">
          ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row');
        echo "
          ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "online", array()), 'row');
        echo "
        </div>
      </div>

      ";
        // line 41
        echo "      <div id=\"form-meta\" class=\"panel col-md-6\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-sitemap\"></i>
          </a>
          <h3>Metadata</h3>
        </header>
        <div class=\"panel-body\">
          ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "meta", array()), 'row');
        echo "
        </div>
      </div>

      ";
        // line 54
        echo "      <div id=\"form-content\" class=\"synapse-theme-form panel col-md-12\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-scribd\"></i>
          </a>
          <h3>Content</h3>
        </header>
        ";
        // line 61
        if ($this->getAttribute(($context["form"] ?? null), "synapse", array(), "any", true, true)) {
            // line 62
            echo "          ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "synapse", array()), 'widget');
            echo "
        ";
        } else {
            // line 64
            echo "          <div class=\"panel-body panel-body-info\">
            <p class=\"info\">
              <span class=\"badge label-warning\"><i class=\"fa fa-warning\"></i></span>
              You don't have any active theme, you won't be able to display the page. Create a theme and at least a template to apply one to this content.
            </p>
          </div>
        ";
        }
        // line 71
        echo "      </div>

    </div>
    <div class=\"col-fix\">
      <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
        <a class=\"btn btn-big btn-warning\" href=\"";
        // line 76
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_list");
        echo "\">
          <i class=\"fa fa-times\"></i>
          <span>Cancel</span>
        </a>
        ";
        // line 80
        $context["void"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "submit", array()), "setRendered", array(0 => true), "method");
        // line 81
        echo "        <button class=\"btn btn-big btn-success\" type=\"submit\"
          id=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "submit", array()), "vars", array()), "id", array()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "submit", array()), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
        >
          <i class=\"fa fa-2x fa-check\"></i>
          Submit
        </button>
      </div>
    </div>
  </div>
  ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SynapsePageBundle:Admin/Page:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 90,  148 => 82,  145 => 81,  143 => 80,  136 => 76,  129 => 71,  120 => 64,  114 => 62,  112 => 61,  103 => 54,  96 => 49,  86 => 41,  79 => 36,  75 => 35,  65 => 27,  57 => 21,  48 => 15,  40 => 10,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SynapsePageBundle:Admin/Page:edit.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/Admin/Page/edit.html.twig");
    }
}
