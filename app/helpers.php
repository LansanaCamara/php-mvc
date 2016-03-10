<?php

/**
 * This function renders a view partial and extracts
 * any optional data to be used as a variable name
 * in the partial.
 *
 * @param $view
 * @param array $data
 * @throws Exception
 */
function render($view, array $data = [])
{
    extract($data);

    if (is_readable('../app/views/partials/' . $view . '.php')) {
        require_once '../app/views/partials/' . $view . '.php';
    } else {
        throw new Exception("The partial '$view' does not exist or is not readable");
    }
}