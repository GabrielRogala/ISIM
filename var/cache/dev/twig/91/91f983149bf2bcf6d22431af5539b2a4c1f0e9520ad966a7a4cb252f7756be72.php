<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_56a62487abaccdb238b5cae3007c1a2080bcf65689b2a8520e7f687b149de006 extends Twig_Template
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
        $__internal_8cbcebf36f2c63c9b441df74766bc6d39a73e358f76d61841c2982cc0c182bec = $this->env->getExtension("native_profiler");
        $__internal_8cbcebf36f2c63c9b441df74766bc6d39a73e358f76d61841c2982cc0c182bec->enter($__internal_8cbcebf36f2c63c9b441df74766bc6d39a73e358f76d61841c2982cc0c182bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cbcebf36f2c63c9b441df74766bc6d39a73e358f76d61841c2982cc0c182bec->leave($__internal_8cbcebf36f2c63c9b441df74766bc6d39a73e358f76d61841c2982cc0c182bec_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e0db925c5a9687064ea38174491498a2a9c670dde50eca1a6824fcc0e9641031 = $this->env->getExtension("native_profiler");
        $__internal_e0db925c5a9687064ea38174491498a2a9c670dde50eca1a6824fcc0e9641031->enter($__internal_e0db925c5a9687064ea38174491498a2a9c670dde50eca1a6824fcc0e9641031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e0db925c5a9687064ea38174491498a2a9c670dde50eca1a6824fcc0e9641031->leave($__internal_e0db925c5a9687064ea38174491498a2a9c670dde50eca1a6824fcc0e9641031_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cce13ada7e27e259949ccf7ebcc19509f56ef61b5a81423d3e7cee7f4f03f491 = $this->env->getExtension("native_profiler");
        $__internal_cce13ada7e27e259949ccf7ebcc19509f56ef61b5a81423d3e7cee7f4f03f491->enter($__internal_cce13ada7e27e259949ccf7ebcc19509f56ef61b5a81423d3e7cee7f4f03f491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cce13ada7e27e259949ccf7ebcc19509f56ef61b5a81423d3e7cee7f4f03f491->leave($__internal_cce13ada7e27e259949ccf7ebcc19509f56ef61b5a81423d3e7cee7f4f03f491_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_282f004dd00ee0a416e208689f5adb9e69194b545d1e5cd42af999b95d9fcad6 = $this->env->getExtension("native_profiler");
        $__internal_282f004dd00ee0a416e208689f5adb9e69194b545d1e5cd42af999b95d9fcad6->enter($__internal_282f004dd00ee0a416e208689f5adb9e69194b545d1e5cd42af999b95d9fcad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_282f004dd00ee0a416e208689f5adb9e69194b545d1e5cd42af999b95d9fcad6->leave($__internal_282f004dd00ee0a416e208689f5adb9e69194b545d1e5cd42af999b95d9fcad6_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
