<?php

/* SynapseAdminBundle::base.html.twig */
class __TwigTemplate_9d085b0ea1334493b52e66b52ac4858f561027359967b4cc0654bf8db4c11bb8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'logo' => array($this, 'block_logo'),
            'menu_elements' => array($this, 'block_menu_elements'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    ";
        // line 8
        $this->displayBlock('meta', $context, $blocks);
        // line 13
        echo "
    <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "  </head>

  <body class=\"\">
    <main id=\"container\">
      <header class=\"header white-bg\">
        <!-- logo -->
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "request", array()), "baseUrl", array()), "html", null, true);
        echo "\" class=\"logo\">
        ";
        // line 33
        $this->displayBlock('logo', $context, $blocks);
        // line 36
        echo "        </a>
        <!-- /logo -->
        <div class=\"top-nav \">
          <!-- search & user info -->
          <ul class=\"nav pull-right top-menu\">
          </ul>
        </div>
      </header>
      <aside id=\"navigation\" class=\"nav-collapse\">
        <ul class=\"sidebar-menu\">
        ";
        // line 46
        $this->displayBlock('menu_elements', $context, $blocks);
        // line 47
        echo "        </ul>
      </aside>
      <section id=\"main-content\">
        <section class=\"wrapper\">
          ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "        </section>
      </section>
    </main>

    ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
  </body>
</html>
";
    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
        // line 9
        echo "      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
      <link rel=\"icon\" href=\"/bundles/synapseadmin/images/logo_blue_small.png\">
    ";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        echo "Synapse :: Admin";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "
      <!-- Font awesome -->
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">

      <!-- Synapse theme -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/synapsecmf/css/synapse.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/synapseadmin/css/synapse-admin-theme.css"), "html", null, true);
        echo "\">

    ";
    }

    // line 33
    public function block_logo($context, array $blocks = array())
    {
        // line 34
        echo "          <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/synapseadmin/images/logo_text_blue_large.png"), "html", null, true);
        echo "\" alt=\"Synapse logo\">
        ";
    }

    // line 46
    public function block_menu_elements($context, array $blocks = array())
    {
        echo "";
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        echo "";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/synapsecmf/js/synapse.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/synapseadmin/js/synapse-admin-theme.js"), "html", null, true);
        echo "\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "SynapseAdminBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 58,  160 => 57,  157 => 56,  151 => 51,  145 => 46,  138 => 34,  135 => 33,  128 => 23,  124 => 22,  117 => 17,  114 => 16,  108 => 14,  101 => 9,  98 => 8,  91 => 60,  89 => 56,  83 => 52,  81 => 51,  75 => 47,  73 => 46,  61 => 36,  59 => 33,  55 => 32,  47 => 26,  45 => 16,  40 => 14,  37 => 13,  35 => 8,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "SynapseAdminBundle::base.html.twig", "/var/www/html/src/Synapse/Admin/Bundle/Resources/views/base.html.twig");
    }
}
