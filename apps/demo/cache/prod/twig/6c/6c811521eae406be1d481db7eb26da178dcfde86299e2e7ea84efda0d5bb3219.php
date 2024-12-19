<?php

/* SynapsePageBundle:Admin/Page:create.html.twig */
class __TwigTemplate_093313b8542935d5b1aef24f739e7d5f574878ec4e7a63d171f0de84c38d77a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SynapsePageBundle::layout.html.twig", "SynapsePageBundle:Admin/Page:create.html.twig", 1);
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
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "

  <div class=\"row-fluid\">
    <div class=\"col-fill\">
      <div class=\"panel\">
        <header class=\"panel-heading composed bg-main\">
          <a href class=\"combo\">
            <i class=\"fa fa-file-text-o\"></i>
          </a>
          <h3>New page</h3>
        </header>
        <div class=\"panel-body\">
          ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "name", array()), 'row');
        echo "
          ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "parent", array()), 'row');
        echo "
          ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "title", array()), 'row');
        echo "
          ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "path", array()), 'row');
        echo "
        </div>
      </div>
    </div>
    <div class=\"col-fix\">
      <div class=\"button-bar\" data-spy=\"affix\" data-offset-top=\"55\">
        <a class=\"btn btn-big btn-warning\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("synapse_admin_page_list");
        echo "\">
          <i class=\"fa fa-times\"></i>
          <span>Cancel</span>
        </a>
        ";
        // line 31
        $context["void"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "submit", array()), "setRendered", array(0 => true), "method");
        // line 32
        echo "        <button class=\"btn btn-big btn-success\" type=\"submit\"
          id=\"";
        // line 33
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
  ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "SynapsePageBundle:Admin/Page:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 40,  83 => 33,  80 => 32,  78 => 31,  71 => 27,  62 => 21,  58 => 20,  54 => 19,  50 => 18,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SynapsePageBundle:Admin/Page:create.html.twig", "/var/www/html/src/Synapse/Page/Bundle/Resources/views/Admin/Page/create.html.twig");
    }
}
