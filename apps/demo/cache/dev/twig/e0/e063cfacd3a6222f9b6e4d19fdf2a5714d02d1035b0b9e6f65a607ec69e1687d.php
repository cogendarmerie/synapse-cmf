<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_50991dcc1a3d0311060be3314171185b95de7783bd167206a2e277173ae08d43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_311449e20555c73266d78e090fd0f9984d962a22a9606d36426442cb14833fc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311449e20555c73266d78e090fd0f9984d962a22a9606d36426442cb14833fc3->enter($__internal_311449e20555c73266d78e090fd0f9984d962a22a9606d36426442cb14833fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1238dc80032073fd46f8912f85b5ef1a02e165aa110319e38dc648d48c5adb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1238dc80032073fd46f8912f85b5ef1a02e165aa110319e38dc648d48c5adb37->enter($__internal_1238dc80032073fd46f8912f85b5ef1a02e165aa110319e38dc648d48c5adb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_311449e20555c73266d78e090fd0f9984d962a22a9606d36426442cb14833fc3->leave($__internal_311449e20555c73266d78e090fd0f9984d962a22a9606d36426442cb14833fc3_prof);

        
        $__internal_1238dc80032073fd46f8912f85b5ef1a02e165aa110319e38dc648d48c5adb37->leave($__internal_1238dc80032073fd46f8912f85b5ef1a02e165aa110319e38dc648d48c5adb37_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3530da2cbdd44e00b108dc184b562f84e21a0e4f76a5c958ffb83df9083a8ce5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3530da2cbdd44e00b108dc184b562f84e21a0e4f76a5c958ffb83df9083a8ce5->enter($__internal_3530da2cbdd44e00b108dc184b562f84e21a0e4f76a5c958ffb83df9083a8ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_99a6ece8e02d64cc0a89d93776f20fef3bf438e17308cffde98fc47148785160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a6ece8e02d64cc0a89d93776f20fef3bf438e17308cffde98fc47148785160->enter($__internal_99a6ece8e02d64cc0a89d93776f20fef3bf438e17308cffde98fc47148785160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_99a6ece8e02d64cc0a89d93776f20fef3bf438e17308cffde98fc47148785160->leave($__internal_99a6ece8e02d64cc0a89d93776f20fef3bf438e17308cffde98fc47148785160_prof);

        
        $__internal_3530da2cbdd44e00b108dc184b562f84e21a0e4f76a5c958ffb83df9083a8ce5->leave($__internal_3530da2cbdd44e00b108dc184b562f84e21a0e4f76a5c958ffb83df9083a8ce5_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_68d0b57ca6679c724cf0bb76d60dcd0cf4ac581e33efdaf87aae2f6c91df99ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d0b57ca6679c724cf0bb76d60dcd0cf4ac581e33efdaf87aae2f6c91df99ad->enter($__internal_68d0b57ca6679c724cf0bb76d60dcd0cf4ac581e33efdaf87aae2f6c91df99ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2383df16a09bb756c94b7a389af589ca232731f7ec1282b6430901ba0cde90d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2383df16a09bb756c94b7a389af589ca232731f7ec1282b6430901ba0cde90d4->enter($__internal_2383df16a09bb756c94b7a389af589ca232731f7ec1282b6430901ba0cde90d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2383df16a09bb756c94b7a389af589ca232731f7ec1282b6430901ba0cde90d4->leave($__internal_2383df16a09bb756c94b7a389af589ca232731f7ec1282b6430901ba0cde90d4_prof);

        
        $__internal_68d0b57ca6679c724cf0bb76d60dcd0cf4ac581e33efdaf87aae2f6c91df99ad->leave($__internal_68d0b57ca6679c724cf0bb76d60dcd0cf4ac581e33efdaf87aae2f6c91df99ad_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_12124ca0ca4f40e1c6901f7d7c11e32c38fbdaf1391846cab7a14cdb71c1f528 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12124ca0ca4f40e1c6901f7d7c11e32c38fbdaf1391846cab7a14cdb71c1f528->enter($__internal_12124ca0ca4f40e1c6901f7d7c11e32c38fbdaf1391846cab7a14cdb71c1f528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_188371cee78396849c74419e3f4e2b94d991a7b22c9aac24a952e5fd88090955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_188371cee78396849c74419e3f4e2b94d991a7b22c9aac24a952e5fd88090955->enter($__internal_188371cee78396849c74419e3f4e2b94d991a7b22c9aac24a952e5fd88090955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_188371cee78396849c74419e3f4e2b94d991a7b22c9aac24a952e5fd88090955->leave($__internal_188371cee78396849c74419e3f4e2b94d991a7b22c9aac24a952e5fd88090955_prof);

        
        $__internal_12124ca0ca4f40e1c6901f7d7c11e32c38fbdaf1391846cab7a14cdb71c1f528->leave($__internal_12124ca0ca4f40e1c6901f7d7c11e32c38fbdaf1391846cab7a14cdb71c1f528_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
