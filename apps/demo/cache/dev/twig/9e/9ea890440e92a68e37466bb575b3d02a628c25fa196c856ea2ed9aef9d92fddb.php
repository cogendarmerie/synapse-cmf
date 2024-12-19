<?php

/* SynapseDemoThemeBundle::layout.html.twig */
class __TwigTemplate_ec4c786eaba216bd916880f92e02691126bf16e096af9b5fa7b3fbc68c385d84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'meta' => array($this, 'block_meta'),
            'top' => array($this, 'block_top'),
            'jumbotron' => array($this, 'block_jumbotron'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cffb4bb4457200dbace7e0c00cfc2fa52326e8d135ed866ffe219823568ec4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cffb4bb4457200dbace7e0c00cfc2fa52326e8d135ed866ffe219823568ec4b->enter($__internal_3cffb4bb4457200dbace7e0c00cfc2fa52326e8d135ed866ffe219823568ec4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle::layout.html.twig"));

        $__internal_6cc180a75e166e74fb11bd17682497c568c3869635112e5e2d384a83a5d31003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cc180a75e166e74fb11bd17682497c568c3869635112e5e2d384a83a5d31003->enter($__internal_6cc180a75e166e74fb11bd17682497c568c3869635112e5e2d384a83a5d31003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseDemoThemeBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    ";
        // line 9
        $this->displayBlock('meta', $context, $blocks);
        // line 15
        echo "
    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css\">

    <!-- Custom styles for this template -->
    <link href=\"http://v4-alpha.getbootstrap.com/examples/jumbotron/jumbotron.css\" rel=\"stylesheet\">
  </head>

  <body>

    <nav class=\"navbar navbar-static-top navbar-dark bg-inverse\">
      <a class=\"navbar-brand\" href=\"#\">Synapse Demo</a>
      <ul class=\"nav navbar-nav\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">About</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Main top for a primary marketing message or call to action -->
    ";
        // line 41
        $this->displayBlock('top', $context, $blocks);
        // line 46
        echo "
    <!-- Main jumbotron for a primary marketing message or call to action -->
    ";
        // line 48
        $this->displayBlock('jumbotron', $context, $blocks);
        // line 53
        echo "
    <div class=\"container\">
    ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 60
        echo "
      <hr>

      <footer>
        <p>&copy; LinkValue 2016</p>
      </footer>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js\"></script>
  </body>
</html>
";
        
        $__internal_3cffb4bb4457200dbace7e0c00cfc2fa52326e8d135ed866ffe219823568ec4b->leave($__internal_3cffb4bb4457200dbace7e0c00cfc2fa52326e8d135ed866ffe219823568ec4b_prof);

        
        $__internal_6cc180a75e166e74fb11bd17682497c568c3869635112e5e2d384a83a5d31003->leave($__internal_6cc180a75e166e74fb11bd17682497c568c3869635112e5e2d384a83a5d31003_prof);

    }

    // line 9
    public function block_meta($context, array $blocks = array())
    {
        $__internal_afc91989b43949893d9960d816428a0548ed4da190e4354e74f8fbb3de6c39e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc91989b43949893d9960d816428a0548ed4da190e4354e74f8fbb3de6c39e9->enter($__internal_afc91989b43949893d9960d816428a0548ed4da190e4354e74f8fbb3de6c39e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_51ed162743d61bd53c77092a471c868566328c748ac1cf489f167cc572b2b63b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ed162743d61bd53c77092a471c868566328c748ac1cf489f167cc572b2b63b->enter($__internal_51ed162743d61bd53c77092a471c868566328c748ac1cf489f167cc572b2b63b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 10
        echo "      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">

      <title>Synapse demo template</title>
    ";
        
        $__internal_51ed162743d61bd53c77092a471c868566328c748ac1cf489f167cc572b2b63b->leave($__internal_51ed162743d61bd53c77092a471c868566328c748ac1cf489f167cc572b2b63b_prof);

        
        $__internal_afc91989b43949893d9960d816428a0548ed4da190e4354e74f8fbb3de6c39e9->leave($__internal_afc91989b43949893d9960d816428a0548ed4da190e4354e74f8fbb3de6c39e9_prof);

    }

    // line 41
    public function block_top($context, array $blocks = array())
    {
        $__internal_f2c884268421554609d17a6f1ba24b242d5dcc00773c8d59e28eddb2173884a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c884268421554609d17a6f1ba24b242d5dcc00773c8d59e28eddb2173884a2->enter($__internal_f2c884268421554609d17a6f1ba24b242d5dcc00773c8d59e28eddb2173884a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        $__internal_4fc184bb9d134bb69c67d6bbcb6d7bf0ad493ec2de9296a8a804be8fb69b480c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fc184bb9d134bb69c67d6bbcb6d7bf0ad493ec2de9296a8a804be8fb69b480c->enter($__internal_4fc184bb9d134bb69c67d6bbcb6d7bf0ad493ec2de9296a8a804be8fb69b480c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top"));

        // line 42
        echo "      <div class=\"top\">
        ";
        // line 43
        echo $this->env->getExtension('Synapse\Cmf\Framework\Engine\Bridge\Twig\Extension')->renderZone("top");
        echo "
      </div>
    ";
        
        $__internal_4fc184bb9d134bb69c67d6bbcb6d7bf0ad493ec2de9296a8a804be8fb69b480c->leave($__internal_4fc184bb9d134bb69c67d6bbcb6d7bf0ad493ec2de9296a8a804be8fb69b480c_prof);

        
        $__internal_f2c884268421554609d17a6f1ba24b242d5dcc00773c8d59e28eddb2173884a2->leave($__internal_f2c884268421554609d17a6f1ba24b242d5dcc00773c8d59e28eddb2173884a2_prof);

    }

    // line 48
    public function block_jumbotron($context, array $blocks = array())
    {
        $__internal_4916070b6806c0a38baa80ad40b03e262539584287988fe4f748c128b34bbe75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4916070b6806c0a38baa80ad40b03e262539584287988fe4f748c128b34bbe75->enter($__internal_4916070b6806c0a38baa80ad40b03e262539584287988fe4f748c128b34bbe75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        $__internal_c94f26c4918ce9dfc818bfb9079b6f7a0e4b539ba7f75a10f2c6e96afa0afb08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c94f26c4918ce9dfc818bfb9079b6f7a0e4b539ba7f75a10f2c6e96afa0afb08->enter($__internal_c94f26c4918ce9dfc818bfb9079b6f7a0e4b539ba7f75a10f2c6e96afa0afb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jumbotron"));

        // line 49
        echo "      <div class=\"jumbotron\">
        ";
        // line 50
        echo $this->env->getExtension('Synapse\Cmf\Framework\Engine\Bridge\Twig\Extension')->renderZone("jumbotron");
        echo "
      </div>
    ";
        
        $__internal_c94f26c4918ce9dfc818bfb9079b6f7a0e4b539ba7f75a10f2c6e96afa0afb08->leave($__internal_c94f26c4918ce9dfc818bfb9079b6f7a0e4b539ba7f75a10f2c6e96afa0afb08_prof);

        
        $__internal_4916070b6806c0a38baa80ad40b03e262539584287988fe4f748c128b34bbe75->leave($__internal_4916070b6806c0a38baa80ad40b03e262539584287988fe4f748c128b34bbe75_prof);

    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        $__internal_dbb0f1ac49ef92857d7e3d5a1377584d92f6e338f9e6ede9e17f4d4ac6f02ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbb0f1ac49ef92857d7e3d5a1377584d92f6e338f9e6ede9e17f4d4ac6f02ea6->enter($__internal_dbb0f1ac49ef92857d7e3d5a1377584d92f6e338f9e6ede9e17f4d4ac6f02ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_53242d21d52b1b715d357edd17fa8c49c61b7f24c2104a8fdf14a0c6c8c3a61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53242d21d52b1b715d357edd17fa8c49c61b7f24c2104a8fdf14a0c6c8c3a61f->enter($__internal_53242d21d52b1b715d357edd17fa8c49c61b7f24c2104a8fdf14a0c6c8c3a61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 56
        echo "      <div class=\"row\">
        ";
        // line 57
        echo $this->env->getExtension('Synapse\Cmf\Framework\Engine\Bridge\Twig\Extension')->renderZone("content");
        echo "
      </div>
    ";
        
        $__internal_53242d21d52b1b715d357edd17fa8c49c61b7f24c2104a8fdf14a0c6c8c3a61f->leave($__internal_53242d21d52b1b715d357edd17fa8c49c61b7f24c2104a8fdf14a0c6c8c3a61f_prof);

        
        $__internal_dbb0f1ac49ef92857d7e3d5a1377584d92f6e338f9e6ede9e17f4d4ac6f02ea6->leave($__internal_dbb0f1ac49ef92857d7e3d5a1377584d92f6e338f9e6ede9e17f4d4ac6f02ea6_prof);

    }

    public function getTemplateName()
    {
        return "SynapseDemoThemeBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  194 => 57,  191 => 56,  182 => 55,  169 => 50,  166 => 49,  157 => 48,  144 => 43,  141 => 42,  132 => 41,  118 => 10,  109 => 9,  83 => 60,  81 => 55,  77 => 53,  75 => 48,  71 => 46,  69 => 41,  41 => 15,  39 => 9,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    {% block meta %}
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">

      <title>Synapse demo template</title>
    {% endblock %}

    <!-- Bootstrap core CSS -->
    <link rel=\"stylesheet\" href=\"http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css\">

    <!-- Custom styles for this template -->
    <link href=\"http://v4-alpha.getbootstrap.com/examples/jumbotron/jumbotron.css\" rel=\"stylesheet\">
  </head>

  <body>

    <nav class=\"navbar navbar-static-top navbar-dark bg-inverse\">
      <a class=\"navbar-brand\" href=\"#\">Synapse Demo</a>
      <ul class=\"nav navbar-nav\">
        <li class=\"nav-item active\">
          <a class=\"nav-link\" href=\"#\">Home <span class=\"sr-only\">(current)</span></a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">About</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"#\">Contact</a>
        </li>
      </ul>
    </nav>

    <!-- Main top for a primary marketing message or call to action -->
    {% block top %}
      <div class=\"top\">
        {{ synapse_zone('top') }}
      </div>
    {% endblock %}

    <!-- Main jumbotron for a primary marketing message or call to action -->
    {% block jumbotron %}
      <div class=\"jumbotron\">
        {{ synapse_zone('jumbotron') }}
      </div>
    {% endblock %}

    <div class=\"container\">
    {% block content %}
      <div class=\"row\">
        {{ synapse_zone('content') }}
      </div>
    {% endblock %}

      <hr>

      <footer>
        <p>&copy; LinkValue 2016</p>
      </footer>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
    <script>window.jQuery || document.write('<script src=\"../../assets/js/vendor/jquery.min.js\"><\\/script>')</script>
    <script src=\"http://v4-alpha.getbootstrap.com/dist/js/bootstrap.min.js\"></script>
  </body>
</html>
", "SynapseDemoThemeBundle::layout.html.twig", "/var/www/html/src/Synapse/Demo/Bundle/ThemeBundle/Resources/views/layout.html.twig");
    }
}
