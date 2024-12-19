<?php

/* SynapseAdminBundle::base.html.twig */
class __TwigTemplate_aefabd08f486f93a60de7776033bf982ed834fe3ebbcb5432fc0f152b41daa6d extends Twig_Template
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
        $__internal_8d263cbe379593d983d81d168aeeb2ae98c3d782e57e0428cc0afed7582e6610 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d263cbe379593d983d81d168aeeb2ae98c3d782e57e0428cc0afed7582e6610->enter($__internal_8d263cbe379593d983d81d168aeeb2ae98c3d782e57e0428cc0afed7582e6610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle::base.html.twig"));

        $__internal_e69e54bd2a63d218e79a3a33adb0ae88657bcad28a7b5dd6253e37f62cfc753a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69e54bd2a63d218e79a3a33adb0ae88657bcad28a7b5dd6253e37f62cfc753a->enter($__internal_e69e54bd2a63d218e79a3a33adb0ae88657bcad28a7b5dd6253e37f62cfc753a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SynapseAdminBundle::base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "baseUrl", array()), "html", null, true);
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
        
        $__internal_8d263cbe379593d983d81d168aeeb2ae98c3d782e57e0428cc0afed7582e6610->leave($__internal_8d263cbe379593d983d81d168aeeb2ae98c3d782e57e0428cc0afed7582e6610_prof);

        
        $__internal_e69e54bd2a63d218e79a3a33adb0ae88657bcad28a7b5dd6253e37f62cfc753a->leave($__internal_e69e54bd2a63d218e79a3a33adb0ae88657bcad28a7b5dd6253e37f62cfc753a_prof);

    }

    // line 8
    public function block_meta($context, array $blocks = array())
    {
        $__internal_7bd9f765d85b16a02bb9712e597c60fb81cb81ca511fe6b2def81dfb15684ac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bd9f765d85b16a02bb9712e597c60fb81cb81ca511fe6b2def81dfb15684ac6->enter($__internal_7bd9f765d85b16a02bb9712e597c60fb81cb81ca511fe6b2def81dfb15684ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        $__internal_b35b02c62228cca4229a04a7cf5fb1c7b0d1a4f29ff772bc9f6b443acd279ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b35b02c62228cca4229a04a7cf5fb1c7b0d1a4f29ff772bc9f6b443acd279ea4->enter($__internal_b35b02c62228cca4229a04a7cf5fb1c7b0d1a4f29ff772bc9f6b443acd279ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 9
        echo "      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
      <link rel=\"icon\" href=\"/bundles/synapseadmin/images/logo_blue_small.png\">
    ";
        
        $__internal_b35b02c62228cca4229a04a7cf5fb1c7b0d1a4f29ff772bc9f6b443acd279ea4->leave($__internal_b35b02c62228cca4229a04a7cf5fb1c7b0d1a4f29ff772bc9f6b443acd279ea4_prof);

        
        $__internal_7bd9f765d85b16a02bb9712e597c60fb81cb81ca511fe6b2def81dfb15684ac6->leave($__internal_7bd9f765d85b16a02bb9712e597c60fb81cb81ca511fe6b2def81dfb15684ac6_prof);

    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c79dc94268fe7afc406a07dc222e5793487f5dae53dacf1292b49497d6d0377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c79dc94268fe7afc406a07dc222e5793487f5dae53dacf1292b49497d6d0377->enter($__internal_2c79dc94268fe7afc406a07dc222e5793487f5dae53dacf1292b49497d6d0377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8cd0e7009e0d774a99ca50a7a891c392c4da718b8f24854057273a2f90b0a24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cd0e7009e0d774a99ca50a7a891c392c4da718b8f24854057273a2f90b0a24f->enter($__internal_8cd0e7009e0d774a99ca50a7a891c392c4da718b8f24854057273a2f90b0a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Synapse :: Admin";
        
        $__internal_8cd0e7009e0d774a99ca50a7a891c392c4da718b8f24854057273a2f90b0a24f->leave($__internal_8cd0e7009e0d774a99ca50a7a891c392c4da718b8f24854057273a2f90b0a24f_prof);

        
        $__internal_2c79dc94268fe7afc406a07dc222e5793487f5dae53dacf1292b49497d6d0377->leave($__internal_2c79dc94268fe7afc406a07dc222e5793487f5dae53dacf1292b49497d6d0377_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7fcf94fa5e69d332b209e901a54d9735b57620e610e5d55729265165f791ccfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcf94fa5e69d332b209e901a54d9735b57620e610e5d55729265165f791ccfd->enter($__internal_7fcf94fa5e69d332b209e901a54d9735b57620e610e5d55729265165f791ccfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1b84eab983454cdc709ef60aa2939cda92158e0bf8ccfd0209d9b2ba15aa186b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b84eab983454cdc709ef60aa2939cda92158e0bf8ccfd0209d9b2ba15aa186b->enter($__internal_1b84eab983454cdc709ef60aa2939cda92158e0bf8ccfd0209d9b2ba15aa186b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1b84eab983454cdc709ef60aa2939cda92158e0bf8ccfd0209d9b2ba15aa186b->leave($__internal_1b84eab983454cdc709ef60aa2939cda92158e0bf8ccfd0209d9b2ba15aa186b_prof);

        
        $__internal_7fcf94fa5e69d332b209e901a54d9735b57620e610e5d55729265165f791ccfd->leave($__internal_7fcf94fa5e69d332b209e901a54d9735b57620e610e5d55729265165f791ccfd_prof);

    }

    // line 33
    public function block_logo($context, array $blocks = array())
    {
        $__internal_2adcb0149e40bb7f4896b5682408cb25756bd9f5513f1f6908ad311a5f228cdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2adcb0149e40bb7f4896b5682408cb25756bd9f5513f1f6908ad311a5f228cdc->enter($__internal_2adcb0149e40bb7f4896b5682408cb25756bd9f5513f1f6908ad311a5f228cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        $__internal_73d180f7742232e4af81f47e4025daacce4aa434dc5908054704ded80d67742e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d180f7742232e4af81f47e4025daacce4aa434dc5908054704ded80d67742e->enter($__internal_73d180f7742232e4af81f47e4025daacce4aa434dc5908054704ded80d67742e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 34
        echo "          <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/synapseadmin/images/logo_text_blue_large.png"), "html", null, true);
        echo "\" alt=\"Synapse logo\">
        ";
        
        $__internal_73d180f7742232e4af81f47e4025daacce4aa434dc5908054704ded80d67742e->leave($__internal_73d180f7742232e4af81f47e4025daacce4aa434dc5908054704ded80d67742e_prof);

        
        $__internal_2adcb0149e40bb7f4896b5682408cb25756bd9f5513f1f6908ad311a5f228cdc->leave($__internal_2adcb0149e40bb7f4896b5682408cb25756bd9f5513f1f6908ad311a5f228cdc_prof);

    }

    // line 46
    public function block_menu_elements($context, array $blocks = array())
    {
        $__internal_da932cafd05fd69635ae691d766ca3b8c3375dc6082257701f0bb1be8c627974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da932cafd05fd69635ae691d766ca3b8c3375dc6082257701f0bb1be8c627974->enter($__internal_da932cafd05fd69635ae691d766ca3b8c3375dc6082257701f0bb1be8c627974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_elements"));

        $__internal_1d5570434d5cba907d258b828acaf55b07a4628e05304bef83bee662adb16a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5570434d5cba907d258b828acaf55b07a4628e05304bef83bee662adb16a3c->enter($__internal_1d5570434d5cba907d258b828acaf55b07a4628e05304bef83bee662adb16a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_elements"));

        echo "";
        
        $__internal_1d5570434d5cba907d258b828acaf55b07a4628e05304bef83bee662adb16a3c->leave($__internal_1d5570434d5cba907d258b828acaf55b07a4628e05304bef83bee662adb16a3c_prof);

        
        $__internal_da932cafd05fd69635ae691d766ca3b8c3375dc6082257701f0bb1be8c627974->leave($__internal_da932cafd05fd69635ae691d766ca3b8c3375dc6082257701f0bb1be8c627974_prof);

    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
        $__internal_b40b5fd26d437b956ce47b4beacf4eb40a9dad8c6d246057363719c4d29f2c21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40b5fd26d437b956ce47b4beacf4eb40a9dad8c6d246057363719c4d29f2c21->enter($__internal_b40b5fd26d437b956ce47b4beacf4eb40a9dad8c6d246057363719c4d29f2c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_09364ffaba055746079eca3d1100979214242ddb7327cd1a497da91e953e4aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09364ffaba055746079eca3d1100979214242ddb7327cd1a497da91e953e4aa6->enter($__internal_09364ffaba055746079eca3d1100979214242ddb7327cd1a497da91e953e4aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "";
        
        $__internal_09364ffaba055746079eca3d1100979214242ddb7327cd1a497da91e953e4aa6->leave($__internal_09364ffaba055746079eca3d1100979214242ddb7327cd1a497da91e953e4aa6_prof);

        
        $__internal_b40b5fd26d437b956ce47b4beacf4eb40a9dad8c6d246057363719c4d29f2c21->leave($__internal_b40b5fd26d437b956ce47b4beacf4eb40a9dad8c6d246057363719c4d29f2c21_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5861aea12cddc9569c7606526c1e511fe5b72dc7a5607490bb2fd68b5a6d8631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5861aea12cddc9569c7606526c1e511fe5b72dc7a5607490bb2fd68b5a6d8631->enter($__internal_5861aea12cddc9569c7606526c1e511fe5b72dc7a5607490bb2fd68b5a6d8631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0aaac0ecdd1e81943019985c55fa66157d2c2b44fb761f32dd537927431e4890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aaac0ecdd1e81943019985c55fa66157d2c2b44fb761f32dd537927431e4890->enter($__internal_0aaac0ecdd1e81943019985c55fa66157d2c2b44fb761f32dd537927431e4890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/synapsecmf/js/synapse.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/synapseadmin/js/synapse-admin-theme.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_0aaac0ecdd1e81943019985c55fa66157d2c2b44fb761f32dd537927431e4890->leave($__internal_0aaac0ecdd1e81943019985c55fa66157d2c2b44fb761f32dd537927431e4890_prof);

        
        $__internal_5861aea12cddc9569c7606526c1e511fe5b72dc7a5607490bb2fd68b5a6d8631->leave($__internal_5861aea12cddc9569c7606526c1e511fe5b72dc7a5607490bb2fd68b5a6d8631_prof);

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
        return array (  255 => 58,  250 => 57,  241 => 56,  223 => 51,  205 => 46,  192 => 34,  183 => 33,  170 => 23,  166 => 22,  159 => 17,  150 => 16,  132 => 14,  119 => 9,  110 => 8,  97 => 60,  95 => 56,  89 => 52,  87 => 51,  81 => 47,  79 => 46,  67 => 36,  65 => 33,  61 => 32,  53 => 26,  51 => 16,  46 => 14,  43 => 13,  41 => 8,  32 => 1,);
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    {% block meta %}
      <meta name=\"description\" content=\"\">
      <meta name=\"author\" content=\"\">
      <link rel=\"icon\" href=\"/bundles/synapseadmin/images/logo_blue_small.png\">
    {% endblock %}

    <title>{% block title 'Synapse :: Admin' %}</title>

    {% block stylesheets %}

      <!-- Font awesome -->
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css\">

      <!-- Synapse theme -->
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/synapsecmf/css/synapse.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('bundles/synapseadmin/css/synapse-admin-theme.css') }}\">

    {% endblock %}
  </head>

  <body class=\"\">
    <main id=\"container\">
      <header class=\"header white-bg\">
        <!-- logo -->
        <a href=\"{{ app.request.baseUrl }}\" class=\"logo\">
        {% block logo %}
          <img src=\"{{ asset('/bundles/synapseadmin/images/logo_text_blue_large.png') }}\" alt=\"Synapse logo\">
        {% endblock %}
        </a>
        <!-- /logo -->
        <div class=\"top-nav \">
          <!-- search & user info -->
          <ul class=\"nav pull-right top-menu\">
          </ul>
        </div>
      </header>
      <aside id=\"navigation\" class=\"nav-collapse\">
        <ul class=\"sidebar-menu\">
        {% block menu_elements '' %}
        </ul>
      </aside>
      <section id=\"main-content\">
        <section class=\"wrapper\">
          {% block content '' %}
        </section>
      </section>
    </main>

    {% block javascripts %}
      <script src=\"{{ asset('bundles/synapsecmf/js/synapse.js') }}\"></script>
      <script src=\"{{ asset('bundles/synapseadmin/js/synapse-admin-theme.js') }}\"></script>
    {% endblock %}

  </body>
</html>
", "SynapseAdminBundle::base.html.twig", "/var/www/html/src/Synapse/Admin/Bundle/Resources/views/base.html.twig");
    }
}
