<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @NelmioApiDoc/resources.html.twig */
class __TwigTemplate_e08883d8181f326e75d77f920ab5adffff3c42394a0fe437bff3c52b321c2618 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@NelmioApiDoc/resources.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@NelmioApiDoc/resources.html.twig"));

        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "@NelmioApiDoc/resources.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"summary\">
        <ul>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resources"] ?? $this->getContext($context, "resources")));
        foreach ($context['_seq'] as $context["section"] => $context["sections"]) {
            // line 7
            echo "                <li><a href=\"#section-";
            echo twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['sections'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </ul>
    </div>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resources"] ?? $this->getContext($context, "resources")));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["section"] => $context["sections"]) {
            // line 12
            echo "        ";
            if (($context["section"] != "_others")) {
                // line 13
                echo "            <li class=\"section";
                echo ((($context["defaultSectionsOpened"] ?? $this->getContext($context, "defaultSectionsOpened"))) ? (" active") : (""));
                echo "\">
                <div class=\"actions\">
                    <a class=\"action-show-hide\">Show/hide</a>
                    <a class=\"action-list\">List Operations</a>
                    <a class=\"action-expand\">Expand Operations</a>
                </div>
                <h1>";
                // line 19
                echo twig_escape_filter($this->env, $context["section"], "html", null, true);
                echo "</h1>
                <ul class=\"section-list\" ";
                // line 20
                if ( !($context["defaultSectionsOpened"] ?? $this->getContext($context, "defaultSectionsOpened"))) {
                    echo "style=\"display: none\"";
                }
                echo ">
        ";
            }
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sections"]);
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["resource"] => $context["methods"]) {
                // line 23
                echo "            <a id=\"section-";
                echo twig_escape_filter($this->env, $context["section"], "html", null, true);
                echo "\"></a>
            <li class=\"resource\">
                <div class=\"heading\">
                    ";
                // line 26
                if ((($context["section"] == "_others") && ($context["resource"] != "others"))) {
                    // line 27
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, $context["resource"], "html", null, true);
                    echo "</h2>
                    ";
                } elseif ((                // line 28
$context["resource"] != "others")) {
                    // line 29
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, $context["resource"], "html", null, true);
                    echo "</h2>
                    ";
                }
                // line 31
                echo "                </div>
                <ul class=\"endpoints\">
                    <li class=\"endpoint\">
                        <ul class=\"operations\">
                            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["methods"]);
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 36
                    echo "                                ";
                    $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "@NelmioApiDoc/resources.html.twig", 36)->display($context);
                    // line 37
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                        </ul>
                    </li>
                </ul>
            </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['resource'], $context['methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        ";
            if (($context["section"] != "_others")) {
                // line 44
                echo "                </ul>
            </li>
        ";
            }
            // line 47
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['sections'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 47,  225 => 44,  222 => 43,  204 => 38,  190 => 37,  187 => 36,  170 => 35,  164 => 31,  158 => 29,  156 => 28,  151 => 27,  149 => 26,  142 => 23,  124 => 22,  117 => 20,  113 => 19,  103 => 13,  100 => 12,  83 => 11,  79 => 9,  68 => 7,  64 => 6,  60 => 4,  51 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <div id=\"summary\">
        <ul>
            {% for section, sections in resources  %}
                <li><a href=\"#section-{{ section }}\">{{ section }}</a></li>
            {% endfor %}
        </ul>
    </div>
    {% for section, sections in resources  %}
        {% if section != '_others' %}
            <li class=\"section{{ defaultSectionsOpened? ' active':'' }}\">
                <div class=\"actions\">
                    <a class=\"action-show-hide\">Show/hide</a>
                    <a class=\"action-list\">List Operations</a>
                    <a class=\"action-expand\">Expand Operations</a>
                </div>
                <h1>{{ section }}</h1>
                <ul class=\"section-list\" {% if not defaultSectionsOpened %}style=\"display: none\"{% endif %}>
        {% endif %}
        {% for resource, methods in sections %}
            <a id=\"section-{{ section }}\"></a>
            <li class=\"resource\">
                <div class=\"heading\">
                    {% if section == '_others' and resource != 'others' %}
                        <h2>{{ resource }}</h2>
                    {% elseif resource != 'others' %}
                        <h2>{{ resource }}</h2>
                    {% endif %}
                </div>
                <ul class=\"endpoints\">
                    <li class=\"endpoint\">
                        <ul class=\"operations\">
                            {% for data in methods %}
                                {% include 'NelmioApiDocBundle::method.html.twig' %}
                            {% endfor %}
                        </ul>
                    </li>
                </ul>
            </li>
        {% endfor %}
        {% if section != '_others' %}
                </ul>
            </li>
        {% endif %}
    {% endfor %}
{% endblock content %}
", "@NelmioApiDoc/resources.html.twig", "C:\\xampp72\\htdocs\\Gestion_Scrum_app\\vendor\\nelmio\\api-doc-bundle\\Nelmio\\ApiDocBundle\\Resources\\views\\resources.html.twig");
    }
}
