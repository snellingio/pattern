<?php

namespace Snelling\Pattern;

class Parse
{
    private $delimiters;
    private $validation;

    /**
     * Parser constructor.
     * @param array  $delimiters
     * @param string $validation
     */
    public function __construct(array $delimiters = ['{', '}'], $validation = '::')
    {
        $this->delimiters = $delimiters;
        $this->validation = $validation;
    }

    /**
     * @param string $string
     * @param string $pattern
     * @return array
     */
    public function process($string, $pattern)
    {
        $results             = [];
        $special_chars_regex = '~[\\\^\$\*\+\.\?\(\)]~';
        $token_regex         = '~' . $this->delimiters[0] . '([^' . implode('', $this->delimiters) . '\t\r\n]+)' . $this->delimiters[1] . '~';
        preg_match_all($token_regex, $pattern, $tokens);
        $tokens        = $tokens[1];
        $pattern_regex = $pattern;
        $pattern_regex = preg_replace($special_chars_regex, '\\\\$0', $pattern_regex);
        $pattern_regex = preg_replace($token_regex, '(.+)', $pattern_regex);
        $pattern_regex = '~' . $pattern_regex . '~';
        preg_match_all($pattern_regex, $string, $matches);
        $matches = array_filter(array_map('array_filter', $matches));
        if (empty($matches)) {
            return $results;
        }
        $matches = array_splice($matches, 1);
        for ($i = 0, $max = count($tokens); $i < $max; $i++) {
            $token = $tokens[$i];
            $match = $matches[$i][0];
            if (strpos($token, $this->validation)) {
                list($token,) = explode($this->validation, $token);
            }
            $results[$token] = $match;
        }

        return $results;
    }
}