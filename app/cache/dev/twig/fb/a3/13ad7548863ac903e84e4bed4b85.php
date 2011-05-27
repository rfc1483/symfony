<?php

/* VendorHelloBundle:Default:index.html.twig */
class __TwigTemplate_fba313ad7548863ac903e84e4bed4b85 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'name'), "html");
        echo "!";
    }

    public function getTemplateName()
    {
        return "VendorHelloBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
