<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b074ca885828ba1a737771562cf4353853d9bbfca2b01b18b4485a335ee545a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df09648951c83673c58efdc2adf140cee3d8ed7563be58baa9dbd781578d46f0 = $this->env->getExtension("native_profiler");
        $__internal_df09648951c83673c58efdc2adf140cee3d8ed7563be58baa9dbd781578d46f0->enter($__internal_df09648951c83673c58efdc2adf140cee3d8ed7563be58baa9dbd781578d46f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df09648951c83673c58efdc2adf140cee3d8ed7563be58baa9dbd781578d46f0->leave($__internal_df09648951c83673c58efdc2adf140cee3d8ed7563be58baa9dbd781578d46f0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9dbf48feffd7580eb26710adfa6bf46f4d8200fc04759ca82e38d12ee715d254 = $this->env->getExtension("native_profiler");
        $__internal_9dbf48feffd7580eb26710adfa6bf46f4d8200fc04759ca82e38d12ee715d254->enter($__internal_9dbf48feffd7580eb26710adfa6bf46f4d8200fc04759ca82e38d12ee715d254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9dbf48feffd7580eb26710adfa6bf46f4d8200fc04759ca82e38d12ee715d254->leave($__internal_9dbf48feffd7580eb26710adfa6bf46f4d8200fc04759ca82e38d12ee715d254_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ebbb9ae6c273216804f14ce09165f6c9b57fd18628c4dc5a628f0fd9afe5fc68 = $this->env->getExtension("native_profiler");
        $__internal_ebbb9ae6c273216804f14ce09165f6c9b57fd18628c4dc5a628f0fd9afe5fc68->enter($__internal_ebbb9ae6c273216804f14ce09165f6c9b57fd18628c4dc5a628f0fd9afe5fc68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ebbb9ae6c273216804f14ce09165f6c9b57fd18628c4dc5a628f0fd9afe5fc68->leave($__internal_ebbb9ae6c273216804f14ce09165f6c9b57fd18628c4dc5a628f0fd9afe5fc68_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7cc3cb87eecda563f78aba9f1a7bb858e16d590dbc2e12695a518d8ae1b040bb = $this->env->getExtension("native_profiler");
        $__internal_7cc3cb87eecda563f78aba9f1a7bb858e16d590dbc2e12695a518d8ae1b040bb->enter($__internal_7cc3cb87eecda563f78aba9f1a7bb858e16d590dbc2e12695a518d8ae1b040bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7cc3cb87eecda563f78aba9f1a7bb858e16d590dbc2e12695a518d8ae1b040bb->leave($__internal_7cc3cb87eecda563f78aba9f1a7bb858e16d590dbc2e12695a518d8ae1b040bb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
