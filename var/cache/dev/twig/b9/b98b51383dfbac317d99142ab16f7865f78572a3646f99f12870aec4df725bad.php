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

/* @NelmioApiDoc/method.html.twig */
class __TwigTemplate_a01617efc472a0ab0d350169ccadf35dda31ce613a0dd8dbd0f7e3f3d6e5fe17 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@NelmioApiDoc/method.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@NelmioApiDoc/method.html.twig"));

        // line 1
        echo "<li class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "method", [])), "html", null, true);
        echo " operation\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", []), "html", null, true);
        echo "\">
    <div class=\"heading toggler";
        // line 2
        if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "deprecated", [])) {
            echo " deprecated";
        }
        echo "\" data-href=\"#";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "id", []), "html", null, true);
        echo "\">
        <h3>
            <span class=\"http_method\">
                <i>";
        // line 5
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "method", [])), "html", null, true);
        echo "</i>
            </span>

            ";
        // line 8
        if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "deprecated", [])) {
            // line 9
            echo "            <span class=\"deprecated\">
                <i>DEPRECATED</i>
            </span>
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "https", [])) {
            // line 15
            echo "                <span class=\"icon lock\" title=\"HTTPS\"></span>
            ";
        }
        // line 17
        echo "            ";
        if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "authentication", [])) {
            // line 18
            echo "                <span class=\"icon keys\" title=\"Needs ";
            (((twig_length_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "authenticationRoles", [])) > 0)) ? (print (twig_escape_filter($this->env, twig_join_filter($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "authenticationRoles", []), ", "), "html", null, true))) : (print ("authentication")));
            echo "\"></span>
            ";
        }
        // line 20
        echo "
            <span class=\"path\">
                ";
        // line 22
        if ($this->getAttribute(($context["data"] ?? null), "host", [], "any", true, true)) {
            // line 23
            echo (($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "https", [])) ? ("https://") : ("http://"));
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "host", []), "html", null, true);
        }
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "uri", []), "html", null, true);
        echo "
            </span>
           ";
        // line 28
        if ($this->getAttribute(($context["data"] ?? null), "tags", [], "any", true, true)) {
            // line 29
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "tags", []));
            foreach ($context['_seq'] as $context["tag"] => $context["color_code"]) {
                // line 30
                echo "                    <span class=\"tag\" ";
                if (((isset($context["color_code"]) || array_key_exists("color_code", $context)) &&  !twig_test_empty($context["color_code"]))) {
                    echo "style=\"background-color:";
                    echo twig_escape_filter($this->env, $context["color_code"], "html", null, true);
                    echo ";\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tag'], $context['color_code'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        }
        // line 33
        echo "        </h3>
        <ul class=\"options\">
            ";
        // line 35
        if ($this->getAttribute(($context["data"] ?? null), "description", [], "any", true, true)) {
            // line 36
            echo "                <li>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "description", []), "html", null, true);
            echo "</li>
            ";
        }
        // line 38
        echo "        </ul>
    </div>

    <div class=\"content\" style=\"display: ";
        // line 41
        if (((isset($context["displayContent"]) || array_key_exists("displayContent", $context)) && (($context["displayContent"] ?? $this->getContext($context, "displayContent")) == true))) {
            echo "display";
        } else {
            echo "none";
        }
        echo ";\">
        <ul class=\"tabs\">
            ";
        // line 43
        if (($context["enableSandbox"] ?? $this->getContext($context, "enableSandbox"))) {
            // line 44
            echo "                <li class=\"selected\" data-pane=\"content\">Documentation</li>
                <li data-pane=\"sandbox\">Sandbox</li>
            ";
        }
        // line 47
        echo "        </ul>

        <div class=\"panes\">
            <div class=\"pane content selected\">
            ";
        // line 51
        if (($this->getAttribute(($context["data"] ?? null), "documentation", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "documentation", [])))) {
            // line 52
            echo "                <h4>Documentation</h4>
                <div>";
            // line 53
            echo $this->env->getExtension('Nelmio\ApiDocBundle\Twig\Extension\MarkdownExtension')->markdown($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "documentation", []));
            echo "</div>
            ";
        }
        // line 55
        echo "
            ";
        // line 56
        if (($this->getAttribute(($context["data"] ?? null), "link", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "link", [])))) {
            // line 57
            echo "                <h4>Link</h4>
                <div><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "link", []), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "link", []), "html", null, true);
            echo "</a></div>
            ";
        }
        // line 60
        echo "
            ";
        // line 61
        if (($this->getAttribute(($context["data"] ?? null), "requirements", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "requirements", [])))) {
            // line 62
            echo "                <h4>Requirements</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Requirement</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "requirements", []));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 74
                echo "                            <tr>
                                <td>";
                // line 75
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                                <td>";
                // line 76
                (($this->getAttribute($context["infos"], "requirement", [], "any", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["infos"], "requirement", []), "html", null, true))) : (print ("")));
                echo "</td>
                                <td>";
                // line 77
                (($this->getAttribute($context["infos"], "dataType", [], "any", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["infos"], "dataType", []), "html", null, true))) : (print ("")));
                echo "</td>
                                <td>";
                // line 78
                (($this->getAttribute($context["infos"], "description", [], "any", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["infos"], "description", []), "html", null, true))) : (print ("")));
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "                    </tbody>
                </table>
            ";
        }
        // line 84
        echo "
            ";
        // line 85
        if (($this->getAttribute(($context["data"] ?? null), "filters", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "filters", [])))) {
            // line 86
            echo "                <h4>Filters</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Information</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "filters", []));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 96
                echo "                        <tr>
                            <td>";
                // line 97
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                            <td>
                                <table>
                                ";
                // line 100
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["infos"]);
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 101
                    echo "                                    <tr>
                                        <td>";
                    // line 102
                    echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $context["key"]), "html", null, true);
                    echo "</td>
                                        <td>";
                    // line 103
                    echo twig_escape_filter($this->env, twig_trim_filter(twig_replace_filter(twig_jsonencode_filter($context["value"], twig_constant("JSON_UNESCAPED_UNICODE")), ["\\\\" => "\\"]), "\""), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 106
                echo "                                </table>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                    </tbody>
                </table>
            ";
        }
        // line 113
        echo "
            ";
        // line 114
        if (($this->getAttribute(($context["data"] ?? null), "parameters", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "parameters", [])))) {
            // line 115
            echo "                <h4>Parameters</h4>
                <table class='fullwidth'>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Required?</th>
                            <th>Format</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 127
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "parameters", []));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 128
                echo "                            ";
                if ( !$this->getAttribute($context["infos"], "readonly", [])) {
                    // line 129
                    echo "                                <tr>
                                    <td>";
                    // line 130
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 131
                    (($this->getAttribute($context["infos"], "dataType", [], "any", true, true)) ? (print (twig_escape_filter($this->env, $this->getAttribute($context["infos"], "dataType", []), "html", null, true))) : (print ("")));
                    echo "</td>
                                    <td>";
                    // line 132
                    echo (($this->getAttribute($context["infos"], "required", [])) ? ("true") : ("false"));
                    echo "</td>
                                    <td class=\"format\">";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "format", []), "html", null, true);
                    echo "</td>
                                    <td>";
                    // line 134
                    (($this->getAttribute($context["infos"], "description", [], "any", true, true)) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["infos"], "description", [])), "html", null, true))) : (print ("")));
                    echo "</td>
                                </tr>
                            ";
                }
                // line 137
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                    </tbody>
                </table>
            ";
        }
        // line 141
        echo "

            ";
        // line 143
        if (($this->getAttribute(($context["data"] ?? null), "headers", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "headers", [])))) {
            // line 144
            echo "                <h4>Headers</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Required?</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "headers", []));
            foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                // line 155
                echo "                        <tr>
                            <td>";
                // line 156
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</td>
                            <td>";
                // line 157
                echo ((($this->getAttribute($context["infos"], "required", [], "any", true, true) && ($this->getAttribute($context["infos"], "required", []) == "true"))) ? ("true") : ("false"));
                echo "</td>
                            <td>";
                // line 158
                (($this->getAttribute($context["infos"], "description", [], "any", true, true)) ? (print (twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["infos"], "description", [])), "html", null, true))) : (print ("")));
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 161
            echo "                    </tbody>
                </table>
            ";
        }
        // line 164
        echo "
            ";
        // line 165
        if (($this->getAttribute(($context["data"] ?? null), "parsedResponseMap", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "parsedResponseMap", [])))) {
            // line 166
            echo "                <h4>Return</h4>
                <table class='fullwidth'>
                    <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Versions</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "parsedResponseMap", []));
            foreach ($context['_seq'] as $context["status_code"] => $context["response"]) {
                // line 177
                echo "                    <tbody>
                        <tr>
                            <td>
                                <h4>
                                    ";
                // line 181
                echo twig_escape_filter($this->env, $context["status_code"], "html", null, true);
                echo "
                                    ";
                // line 182
                if (($this->getAttribute(($context["data"] ?? null), "statusCodes", [], "any", true, true) && $this->getAttribute($this->getAttribute(($context["data"] ?? null), "statusCodes", [], "any", false, true), $context["status_code"], [], "array", true, true))) {
                    // line 183
                    echo "                                        - ";
                    echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "statusCodes", []), $context["status_code"], [], "array"), ", "), "html", null, true);
                    echo "
                                    ";
                }
                // line 185
                echo "                                </h4>
                            </td>
                        </tr>
                    ";
                // line 188
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["response"], "model", []));
                foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                    // line 189
                    echo "                        <tr>
                            <td>";
                    // line 190
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo "</td>
                            <td>";
                    // line 191
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "dataType", []), "html", null, true);
                    echo "</td>
                            <td>";
                    // line 192
                    $this->loadTemplate("NelmioApiDocBundle:Components:version.html.twig", "@NelmioApiDoc/method.html.twig", 192)->display(twig_to_array(["sinceVersion" => $this->getAttribute($context["infos"], "sinceVersion", []), "untilVersion" => $this->getAttribute($context["infos"], "untilVersion", [])]));
                    echo "</td>
                            <td>";
                    // line 193
                    echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "description", []), "html", null, true);
                    echo "</td>
                        </tr>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 196
                echo "                    </tbody>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status_code'], $context['response'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 198
            echo "                </table>
            ";
        }
        // line 200
        echo "
            ";
        // line 201
        if (($this->getAttribute(($context["data"] ?? null), "statusCodes", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "statusCodes", [])))) {
            // line 202
            echo "                <h4>Status Codes</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Status Code</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "statusCodes", []));
            foreach ($context['_seq'] as $context["status_code"] => $context["descriptions"]) {
                // line 212
                echo "                        <tr>
                            <td><a href=\"http://en.wikipedia.org/wiki/HTTP_";
                // line 213
                echo twig_escape_filter($this->env, $context["status_code"], "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $context["status_code"], "html", null, true);
                echo "</a></td>
                            <td>
                                <ul>
                                    ";
                // line 216
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["descriptions"]);
                foreach ($context['_seq'] as $context["_key"] => $context["description"]) {
                    // line 217
                    echo "                                        <li>";
                    echo twig_escape_filter($this->env, $context["description"], "html", null, true);
                    echo "</li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 219
                echo "                                </ul>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['status_code'], $context['descriptions'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "                    </tbody>
                </table>
            ";
        }
        // line 226
        echo "
            ";
        // line 227
        if (($this->getAttribute(($context["data"] ?? null), "cache", [], "any", true, true) &&  !twig_test_empty($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "cache", [])))) {
            // line 228
            echo "                <h4>Cache</h4>
                <div>";
            // line 229
            echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "cache", []), "html", null, true);
            echo "s</div>
            ";
        }
        // line 231
        echo "
            </div>

            ";
        // line 234
        if (($context["enableSandbox"] ?? $this->getContext($context, "enableSandbox"))) {
            // line 235
            echo "                <div class=\"pane sandbox\">
                    ";
            // line 236
            if ((( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", [])) && $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "https", [])) && ($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "secure", []) != $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "https", [])))) {
                // line 237
                echo "                    Please reload the documentation using the scheme ";
                if ($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "https", [])) {
                    echo "HTTPS";
                } else {
                    echo "HTTP";
                }
                echo " if you want to use the sandbox.
                    ";
            } else {
                // line 239
                echo "                        <form method=\"\" action=\"";
                if ($this->getAttribute(($context["data"] ?? null), "host", [], "any", true, true)) {
                    echo (($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "https", [])) ? ("https://") : ("http://"));
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "host", []), "html", null, true);
                }
                echo twig_escape_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "uri", []), "html", null, true);
                echo "\">
                            <fieldset class=\"parameters\">
                                <legend>Input</legend>
                                ";
                // line 242
                if ($this->getAttribute(($context["data"] ?? null), "requirements", [], "any", true, true)) {
                    // line 243
                    echo "                                    <h4>Requirements</h4>
                                    ";
                    // line 244
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "requirements", []));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 245
                        echo "                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"";
                        // line 246
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                        // line 248
                        if ($this->getAttribute($context["infos"], "description", [], "any", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "description", []), "html", null, true);
                        } else {
                            echo "Value";
                        }
                        echo "\" ";
                        if ($this->getAttribute($context["infos"], "default", [], "any", true, true)) {
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "default", []), "html", null, true);
                            echo "\" ";
                        }
                        echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 251
                    echo "                                ";
                }
                // line 252
                echo "                                ";
                if ($this->getAttribute(($context["data"] ?? null), "filters", [], "any", true, true)) {
                    // line 253
                    echo "                                    <h4>Filters</h4>
                                    ";
                    // line 254
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "filters", []));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 255
                        echo "                                        <p class=\"tuple filter\">
                                            <input type=\"text\" class=\"key\" value=\"";
                        // line 256
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                        // line 258
                        if ($this->getAttribute($context["infos"], "description", [], "any", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "description", []), "html", null, true);
                        } else {
                            echo "Value";
                        }
                        echo "\" ";
                        if ($this->getAttribute($context["infos"], "default", [], "any", true, true)) {
                            echo " value=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "default", []), "html", null, true);
                            echo "\" ";
                        }
                        echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 261
                    echo "                                ";
                }
                // line 262
                echo "                                ";
                if ($this->getAttribute(($context["data"] ?? null), "parameters", [], "any", true, true)) {
                    // line 263
                    echo "                                    <h4>Parameters</h4>
                                    ";
                    // line 264
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "parameters", []));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 265
                        echo "                                    ";
                        if ( !$this->getAttribute($context["infos"], "readonly", [])) {
                            // line 266
                            echo "                                        <p class=\"tuple\" data-dataType=\"";
                            if ($this->getAttribute($context["infos"], "dataType", [])) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "dataType", []), "html", null, true);
                            }
                            echo "\" data-format=\"";
                            if ($this->getAttribute($context["infos"], "format", [])) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "format", []), "html", null, true);
                                echo " ";
                            }
                            echo "\" data-description=\"";
                            if ($this->getAttribute($context["infos"], "description", [])) {
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["infos"], "description", [])), "html", null, true);
                            }
                            echo "\">
                                            <input type=\"text\" class=\"key\" value=\"";
                            // line 267
                            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo "\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                                <option value=\"textarea\">Textarea</option>
                                            </select>
                                            <input type=\"text\" class=\"value\" placeholder=\"";
                            // line 276
                            if ($this->getAttribute($context["infos"], "dataType", [])) {
                                echo "[";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "dataType", []), "html", null, true);
                                echo "] ";
                            }
                            if ($this->getAttribute($context["infos"], "format", [])) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "format", []), "html", null, true);
                            }
                            if ($this->getAttribute($context["infos"], "description", [])) {
                                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["infos"], "description", [])), "html", null, true);
                            } else {
                                echo "Value";
                            }
                            echo "\" ";
                            if ($this->getAttribute($context["infos"], "default", [], "any", true, true)) {
                                echo " value=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "default", []), "html", null, true);
                                echo "\" ";
                            }
                            echo "/> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                        }
                        // line 279
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 280
                    echo "                                    <button type=\"button\" class=\"add_parameter\">New parameter</button>
                                ";
                }
                // line 282
                echo "
                            </fieldset>

                            <fieldset class=\"headers\">
                                ";
                // line 286
                $context["methods"] = twig_split_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "method", [])), "|");
                // line 287
                echo "                                ";
                if ((twig_length_filter($this->env, ($context["methods"] ?? $this->getContext($context, "methods"))) > 1)) {
                    // line 288
                    echo "                                    <legend>Method</legend>
                                    <select name=\"header_method\">
                                    ";
                    // line 290
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["methods"] ?? $this->getContext($context, "methods")));
                    foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                        // line 291
                        echo "                                        <option value=\"";
                        echo twig_escape_filter($this->env, $context["method"], "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $context["method"], "html", null, true);
                        echo "</option>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 293
                    echo "                                    </select>
                                ";
                } else {
                    // line 295
                    echo "                                    <input type=\"hidden\" name=\"header_method\" value=\"";
                    echo twig_escape_filter($this->env, twig_join_filter(($context["methods"] ?? $this->getContext($context, "methods"))), "html", null, true);
                    echo "\" />
                                ";
                }
                // line 297
                echo "
                                <legend>Headers</legend>

                                ";
                // line 300
                if (($context["acceptType"] ?? $this->getContext($context, "acceptType"))) {
                    // line 301
                    echo "                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"Accept\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" value=\"";
                    // line 304
                    echo twig_escape_filter($this->env, ($context["acceptType"] ?? $this->getContext($context, "acceptType")), "html", null, true);
                    echo "\" /> <span class=\"remove\">-</span>
                                    </p>
                                ";
                }
                // line 307
                echo "
                                ";
                // line 308
                if ($this->getAttribute(($context["data"] ?? null), "headers", [], "any", true, true)) {
                    // line 309
                    echo "
                                    ";
                    // line 310
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? $this->getContext($context, "data")), "headers", []));
                    foreach ($context['_seq'] as $context["name"] => $context["infos"]) {
                        // line 311
                        echo "                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"";
                        // line 312
                        echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                        echo "\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" value=\"";
                        // line 314
                        if ($this->getAttribute($context["infos"], "default", [], "any", true, true)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["infos"], "default", []), "html", null, true);
                        }
                        echo "\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                                        </p>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['name'], $context['infos'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 317
                    echo "
                                ";
                }
                // line 319
                echo "
                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                                </p>

                                <button type=\"button\" class=\"add_header\">New header</button>
                            </fieldset>

                            <fieldset class=\"request-content\">
                                <legend>Content</legend>

                                <textarea class=\"content\" placeholder=\"Content set here will override the parameters that do not match the url\"></textarea>

                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key content-type\" value=\"Content-Type\" disabled=\"disabled\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" />
                                    <button  type=\"button\" class=\"set-content-type\">Set header</button> <small>Replaces header if set</small>
                                </p>
                            </fieldset>

                            <div class=\"buttons\">
                                <input type=\"submit\" value=\"Try!\" />
                            </div>
                        </form>

                        <script type=\"text/x-tmpl\" class=\"parameters_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                                <option value=\"textarea\">Textarea</option>
                                            </select>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>

                        <script type=\"text/x-tmpl\" class=\"headers_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>


                        <div class=\"result\">
                            <h4>Request URL</h4>
                            <pre class=\"url\"></pre>

                            <h4 class=\"request-body-header\">Request body</h4>
                            <pre class=\"request-body\"></pre>

                            <h4>Response Headers&nbsp;<small>[<a href=\"\" class=\"to-expand\">Expand</a>]</small>&nbsp;<small class=\"profiler\">[<a href=\"\" class=\"profiler-link\" target=\"_blank\">Profiler</a>]</small></h4>
                            <pre class=\"headers to-expand\"></pre>

                            <h4>Response Body&nbsp;<small>[<a href=\"\" class=\"to-raw\">Raw</a>]</small></h4>
                            <pre class=\"response prettyprint\"></pre>

                            <h4>Curl Command Line</h4>
                            <pre class=\"curl-command\"></pre>
                        </div>
                    ";
            }
            // line 388
            echo "                </div>
            ";
        }
        // line 390
        echo "        </div>
    </div>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@NelmioApiDoc/method.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  922 => 390,  918 => 388,  847 => 319,  843 => 317,  832 => 314,  827 => 312,  824 => 311,  820 => 310,  817 => 309,  815 => 308,  812 => 307,  806 => 304,  801 => 301,  799 => 300,  794 => 297,  788 => 295,  784 => 293,  773 => 291,  769 => 290,  765 => 288,  762 => 287,  760 => 286,  754 => 282,  750 => 280,  744 => 279,  720 => 276,  708 => 267,  692 => 266,  689 => 265,  685 => 264,  682 => 263,  679 => 262,  676 => 261,  657 => 258,  652 => 256,  649 => 255,  645 => 254,  642 => 253,  639 => 252,  636 => 251,  617 => 248,  612 => 246,  609 => 245,  605 => 244,  602 => 243,  600 => 242,  589 => 239,  579 => 237,  577 => 236,  574 => 235,  572 => 234,  567 => 231,  562 => 229,  559 => 228,  557 => 227,  554 => 226,  549 => 223,  540 => 219,  531 => 217,  527 => 216,  519 => 213,  516 => 212,  512 => 211,  501 => 202,  499 => 201,  496 => 200,  492 => 198,  485 => 196,  476 => 193,  472 => 192,  468 => 191,  464 => 190,  461 => 189,  457 => 188,  452 => 185,  446 => 183,  444 => 182,  440 => 181,  434 => 177,  430 => 176,  418 => 166,  416 => 165,  413 => 164,  408 => 161,  399 => 158,  395 => 157,  391 => 156,  388 => 155,  384 => 154,  372 => 144,  370 => 143,  366 => 141,  361 => 138,  355 => 137,  349 => 134,  345 => 133,  341 => 132,  337 => 131,  333 => 130,  330 => 129,  327 => 128,  323 => 127,  309 => 115,  307 => 114,  304 => 113,  299 => 110,  290 => 106,  281 => 103,  277 => 102,  274 => 101,  270 => 100,  264 => 97,  261 => 96,  257 => 95,  246 => 86,  244 => 85,  241 => 84,  236 => 81,  227 => 78,  223 => 77,  219 => 76,  215 => 75,  212 => 74,  208 => 73,  195 => 62,  193 => 61,  190 => 60,  183 => 58,  180 => 57,  178 => 56,  175 => 55,  170 => 53,  167 => 52,  165 => 51,  159 => 47,  154 => 44,  152 => 43,  143 => 41,  138 => 38,  132 => 36,  130 => 35,  126 => 33,  123 => 32,  108 => 30,  103 => 29,  101 => 28,  96 => 26,  93 => 24,  91 => 23,  89 => 22,  85 => 20,  79 => 18,  76 => 17,  72 => 15,  70 => 14,  67 => 13,  61 => 9,  59 => 8,  53 => 5,  43 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"{{ data.method|lower }} operation\" id=\"{{ data.id }}\">
    <div class=\"heading toggler{% if data.deprecated %} deprecated{% endif %}\" data-href=\"#{{ data.id }}\">
        <h3>
            <span class=\"http_method\">
                <i>{{ data.method|upper }}</i>
            </span>

            {% if data.deprecated %}
            <span class=\"deprecated\">
                <i>DEPRECATED</i>
            </span>
            {% endif %}

            {% if data.https %}
                <span class=\"icon lock\" title=\"HTTPS\"></span>
            {% endif %}
            {% if data.authentication %}
                <span class=\"icon keys\" title=\"Needs {{ data.authenticationRoles|length > 0 ? data.authenticationRoles|join(', ') : 'authentication' }}\"></span>
            {% endif %}

            <span class=\"path\">
                {% if data.host is defined -%}
                    {{ data.https ? 'https://' : 'http://' -}}
                    {{ data.host -}}
                {% endif -%}
                {{ data.uri }}
            </span>
           {% if data.tags is defined %}
                {% for tag, color_code in data.tags %}
                    <span class=\"tag\" {% if color_code is defined and color_code is not empty %}style=\"background-color:{{ color_code }};\"{% endif %}>{{ tag }}</span>
                {% endfor %}
            {%  endif %}
        </h3>
        <ul class=\"options\">
            {% if data.description is defined %}
                <li>{{ data.description }}</li>
            {% endif %}
        </ul>
    </div>

    <div class=\"content\" style=\"display: {% if displayContent is defined and displayContent == true %}display{% else %}none{% endif %};\">
        <ul class=\"tabs\">
            {% if enableSandbox %}
                <li class=\"selected\" data-pane=\"content\">Documentation</li>
                <li data-pane=\"sandbox\">Sandbox</li>
            {% endif %}
        </ul>

        <div class=\"panes\">
            <div class=\"pane content selected\">
            {% if data.documentation is defined and data.documentation is not empty %}
                <h4>Documentation</h4>
                <div>{{ data.documentation|extra_markdown }}</div>
            {% endif %}

            {% if data.link is defined and data.link is not empty %}
                <h4>Link</h4>
                <div><a href=\"{{ data.link }}\" target=\"_blank\">{{ data.link }}</a></div>
            {% endif %}

            {% if data.requirements is defined and data.requirements is not empty %}
                <h4>Requirements</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Requirement</th>
                            <th>Type</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for name, infos in data.requirements %}
                            <tr>
                                <td>{{ name }}</td>
                                <td>{{ infos.requirement is defined ? infos.requirement : ''}}</td>
                                <td>{{ infos.dataType is defined ? infos.dataType : ''}}</td>
                                <td>{{ infos.description is defined ? infos.description : ''}}</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}

            {% if data.filters is defined and data.filters is not empty %}
                <h4>Filters</h4>
                <table class=\"fullwidth\">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Information</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for name, infos in data.filters %}
                        <tr>
                            <td>{{ name }}</td>
                            <td>
                                <table>
                                {% for key, value in infos %}
                                    <tr>
                                        <td>{{ key|title }}</td>
                                        <td>{{ value|json_encode(constant('JSON_UNESCAPED_UNICODE'))|replace({'\\\\\\\\': '\\\\'})|trim('\"') }}</td>
                                    </tr>
                                {% endfor %}
                                </table>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}

            {% if data.parameters is defined and data.parameters is not empty %}
                <h4>Parameters</h4>
                <table class='fullwidth'>
                    <thead>
                        <tr>
                            <th>Parameter</th>
                            <th>Type</th>
                            <th>Required?</th>
                            <th>Format</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for name, infos in data.parameters %}
                            {% if not infos.readonly %}
                                <tr>
                                    <td>{{ name }}</td>
                                    <td>{{ infos.dataType is defined ? infos.dataType : '' }}</td>
                                    <td>{{ infos.required ? 'true' : 'false' }}</td>
                                    <td class=\"format\">{{ infos.format }}</td>
                                    <td>{{ infos.description is defined ? infos.description|trans : ''  }}</td>
                                </tr>
                            {% endif %}
                        {% endfor %}
                    </tbody>
                </table>
            {% endif %}


            {% if data.headers is defined and data.headers is not empty %}
                <h4>Headers</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Required?</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for name, infos in data.headers %}
                        <tr>
                            <td>{{ name }}</td>
                            <td>{{ infos.required is defined and infos.required == 'true' ? 'true' : 'false'}}</td>
                            <td>{{ infos.description is defined ? infos.description|trans : ''}}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}

            {% if data.parsedResponseMap is defined and data.parsedResponseMap is not empty %}
                <h4>Return</h4>
                <table class='fullwidth'>
                    <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Type</th>
                        <th>Versions</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                {% for status_code, response in data.parsedResponseMap %}
                    <tbody>
                        <tr>
                            <td>
                                <h4>
                                    {{ status_code }}
                                    {% if data.statusCodes is defined and data.statusCodes[status_code] is defined %}
                                        - {{ data.statusCodes[status_code]|join(', ') }}
                                    {% endif %}
                                </h4>
                            </td>
                        </tr>
                    {% for name, infos in response.model %}
                        <tr>
                            <td>{{ name }}</td>
                            <td>{{ infos.dataType }}</td>
                            <td>{% include 'NelmioApiDocBundle:Components:version.html.twig' with {'sinceVersion': infos.sinceVersion, 'untilVersion': infos.untilVersion} only %}</td>
                            <td>{{ infos.description }}</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                {% endfor %}
                </table>
            {% endif %}

            {% if data.statusCodes is defined and data.statusCodes is not empty %}
                <h4>Status Codes</h4>
                <table class=\"fullwidth\">
                    <thead>
                    <tr>
                        <th>Status Code</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for status_code, descriptions in data.statusCodes %}
                        <tr>
                            <td><a href=\"http://en.wikipedia.org/wiki/HTTP_{{ status_code }}\" target=\"_blank\">{{ status_code }}</a></td>
                            <td>
                                <ul>
                                    {% for description in descriptions %}
                                        <li>{{ description }}</li>
                                    {%  endfor %}
                                </ul>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}

            {% if data.cache is defined and data.cache is not empty %}
                <h4>Cache</h4>
                <div>{{ data.cache }}s</div>
            {% endif %}

            </div>

            {% if enableSandbox %}
                <div class=\"pane sandbox\">
                    {% if app.request is not null and data.https and app.request.secure != data.https %}
                    Please reload the documentation using the scheme {% if data.https %}HTTPS{% else %}HTTP{% endif %} if you want to use the sandbox.
                    {% else %}
                        <form method=\"\" action=\"{% if data.host is defined %}{{ data.https ? 'https://' : 'http://' }}{{ data.host }}{% endif %}{{ data.uri }}\">
                            <fieldset class=\"parameters\">
                                <legend>Input</legend>
                                {% if data.requirements is defined %}
                                    <h4>Requirements</h4>
                                    {% for name, infos in data.requirements %}
                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"{{ name }}\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"{% if infos.description is defined %}{{ infos.description }}{% else %}Value{% endif %}\" {% if infos.default is defined %} value=\"{{ infos.default }}\" {% endif %}/> <span class=\"remove\">-</span>
                                        </p>
                                    {% endfor %}
                                {% endif %}
                                {% if data.filters is defined %}
                                    <h4>Filters</h4>
                                    {% for name, infos in data.filters %}
                                        <p class=\"tuple filter\">
                                            <input type=\"text\" class=\"key\" value=\"{{ name }}\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" placeholder=\"{% if infos.description is defined %}{{ infos.description }}{% else %}Value{% endif %}\" {% if infos.default is defined %} value=\"{{ infos.default }}\" {% endif %}/> <span class=\"remove\">-</span>
                                        </p>
                                    {% endfor %}
                                {% endif %}
                                {% if data.parameters is defined %}
                                    <h4>Parameters</h4>
                                    {% for name, infos in data.parameters %}
                                    {% if not infos.readonly %}
                                        <p class=\"tuple\" data-dataType=\"{% if infos.dataType %}{{ infos.dataType }}{% endif %}\" data-format=\"{% if infos.format %}{{ infos.format }} {% endif %}\" data-description=\"{% if infos.description %}{{ infos.description|trans }}{% endif %}\">
                                            <input type=\"text\" class=\"key\" value=\"{{ name }}\" placeholder=\"Key\" />
                                            <span>=</span>
                                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                                <option value=\"textarea\">Textarea</option>
                                            </select>
                                            <input type=\"text\" class=\"value\" placeholder=\"{% if infos.dataType %}[{{ infos.dataType }}] {% endif %}{% if infos.format %}{{ infos.format }}{% endif %}{% if infos.description %}{{ infos.description|trans }}{% else %}Value{% endif %}\" {% if infos.default is defined %} value=\"{{ infos.default }}\" {% endif %}/> <span class=\"remove\">-</span>
                                        </p>
                                    {% endif %}
                                    {% endfor %}
                                    <button type=\"button\" class=\"add_parameter\">New parameter</button>
                                {% endif %}

                            </fieldset>

                            <fieldset class=\"headers\">
                                {% set methods = data.method|upper|split('|') %}
                                {% if methods|length > 1 %}
                                    <legend>Method</legend>
                                    <select name=\"header_method\">
                                    {% for method in methods %}
                                        <option value=\"{{ method }}\">{{ method }}</option>
                                    {% endfor %}
                                    </select>
                                {% else %}
                                    <input type=\"hidden\" name=\"header_method\" value=\"{{ methods|join }}\" />
                                {% endif %}

                                <legend>Headers</legend>

                                {% if acceptType %}
                                    <p class=\"tuple\">
                                        <input type=\"text\" class=\"key\" value=\"Accept\" />
                                        <span>=</span>
                                        <input type=\"text\" class=\"value\" value=\"{{ acceptType }}\" /> <span class=\"remove\">-</span>
                                    </p>
                                {% endif %}

                                {% if data.headers is defined %}

                                    {% for name, infos in data.headers %}
                                        <p class=\"tuple\">
                                            <input type=\"text\" class=\"key\" value=\"{{ name }}\" />
                                            <span>=</span>
                                            <input type=\"text\" class=\"value\" value=\"{% if infos.default is defined %}{{ infos.default }}{% endif %}\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                                        </p>
                                    {% endfor %}

                                {% endif %}

                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                                </p>

                                <button type=\"button\" class=\"add_header\">New header</button>
                            </fieldset>

                            <fieldset class=\"request-content\">
                                <legend>Content</legend>

                                <textarea class=\"content\" placeholder=\"Content set here will override the parameters that do not match the url\"></textarea>

                                <p class=\"tuple\">
                                    <input type=\"text\" class=\"key content-type\" value=\"Content-Type\" disabled=\"disabled\" />
                                    <span>=</span>
                                    <input type=\"text\" class=\"value\" placeholder=\"Value\" />
                                    <button  type=\"button\" class=\"set-content-type\">Set header</button> <small>Replaces header if set</small>
                                </p>
                            </fieldset>

                            <div class=\"buttons\">
                                <input type=\"submit\" value=\"Try!\" />
                            </div>
                        </form>

                        <script type=\"text/x-tmpl\" class=\"parameters_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <select class=\"tuple_type\">
                                                <option value=\"\">Type</option>
                                                <option value=\"string\">String</option>
                                                <option value=\"boolean\">Boolean</option>
                                                <option value=\"file\">File</option>
                                                <option value=\"textarea\">Textarea</option>
                                            </select>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>

                        <script type=\"text/x-tmpl\" class=\"headers_tuple_template\">
                        <p class=\"tuple\">
                            <input type=\"text\" class=\"key\" placeholder=\"Key\" />
                            <span>=</span>
                            <input type=\"text\" class=\"value\" placeholder=\"Value\" /> <span class=\"remove\">-</span>
                        </p>
                        </script>


                        <div class=\"result\">
                            <h4>Request URL</h4>
                            <pre class=\"url\"></pre>

                            <h4 class=\"request-body-header\">Request body</h4>
                            <pre class=\"request-body\"></pre>

                            <h4>Response Headers&nbsp;<small>[<a href=\"\" class=\"to-expand\">Expand</a>]</small>&nbsp;<small class=\"profiler\">[<a href=\"\" class=\"profiler-link\" target=\"_blank\">Profiler</a>]</small></h4>
                            <pre class=\"headers to-expand\"></pre>

                            <h4>Response Body&nbsp;<small>[<a href=\"\" class=\"to-raw\">Raw</a>]</small></h4>
                            <pre class=\"response prettyprint\"></pre>

                            <h4>Curl Command Line</h4>
                            <pre class=\"curl-command\"></pre>
                        </div>
                    {% endif %}
                </div>
            {% endif %}
        </div>
    </div>
</li>
", "@NelmioApiDoc/method.html.twig", "C:\\xampp72\\htdocs\\Gestion_Scrum_app\\vendor\\nelmio\\api-doc-bundle\\Nelmio\\ApiDocBundle\\Resources\\views\\method.html.twig");
    }
}
