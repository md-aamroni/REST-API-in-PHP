<?php

/**
 * Router
 *
 * @param mixed
 * @return string|array
 */
function route($request, $response, $callback)
{
	$getRoute = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
	$resolve = basename($_SERVER['REQUEST_URI']);

	if ($resolve === $request) {
		$result = $response;

		if (is_callable($callback)) {
			call_user_func($callback, $result);
		}

		return $result;
	}
}


/**
 * View
 *
 * @param mixed
 * @return string|array
 */
function view($file, $data = false)
{
	try {
		if (file_exists('./resource/view/' . $file . '.php')) {
			include('./resource/view/' . $file . '.php');
			return $data;
		} else {
			throw new Exception('Oops! file not exist');
		}
	} catch (Exception $e) {
		return $e->getMessage();
	}
}


/**
 * Variable Dumper
 *
 * @param mixed
 * @return string|array
 */
function dd($var, $type = null)
{
	if (!is_null($type) && $type === 'json') {
		echo json_encode($var, JSON_PRETTY_PRINT);
	} elseif (!is_null($type) && $type === 'dump') {
		if (is_array($var)) {
			echo '<pre>';
			var_dump($var);
			echo '</pre>';
		} else {
			echo $var . ' (type of "' . gettype($var) . '" ' . strlen($var) . ')';
		}
	} else {
		if (is_array($var)) {
			echo '<pre>';
			print_r($var);
			echo '</pre>';
		} else {
			echo $var . ' (type of "' . gettype($var) . '" ' . strlen($var) . ')';
		}
	}
}
