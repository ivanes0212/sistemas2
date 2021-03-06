<?php

/* uniSistemasBundle:software:responderSoftware.html.twig */
class __TwigTemplate_c8da3d72ebabef647ee2c05bf7e5ae2cba954d452a753207514506044c68deef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("uniSistemasBundle::layout.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "uniSistemasBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Listado de maquinas virtuales con este software: ";
        echo twig_escape_filter($this->env, (isset($context["nomSoft"]) ? $context["nomSoft"] : $this->getContext($context, "nomSoft")), "html", null, true);
        echo "</h1>
    
           ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 8
            echo "               <h3>Maquinas que usan ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre"), "html", null, true);
            echo "</h3>
               ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "softmaq"));
            foreach ($context['_seq'] as $context["_key"] => $context["soft"]) {
                // line 10
                echo "            
            
        <h2><a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("maquinasv_show", array("id" => $this->getAttribute((isset($context["soft"]) ? $context["soft"] : $this->getContext($context, "soft")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soft"]) ? $context["soft"] : $this->getContext($context, "soft")), "nombre"), "html", null, true);
                echo "</a></h2>
             ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soft"]) ? $context["soft"] : $this->getContext($context, "soft")), "ipvirtual"), "html", null, true);
                echo "
            <br>
            Hardware en el que está la maquina:";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["soft"]) ? $context["soft"] : $this->getContext($context, "soft")), "maqhard"), "nombre"), "html", null, true);
                echo "
            <br>
            <br>
   
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['soft'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        
    ";
    }

    public function getTemplateName()
    {
        return "uniSistemasBundle:software:responderSoftware.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 21,  76 => 20,  65 => 15,  60 => 13,  54 => 12,  50 => 10,  46 => 9,  41 => 8,  37 => 7,  31 => 5,  28 => 4,);
    }
}
